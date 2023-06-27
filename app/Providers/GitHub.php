<?php

namespace App\Providers;

use App\Models\Proyecto;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use ZipArchive;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;

class GitHub extends ServiceProvider
{
    const GITHUB_API_VERSION = '2022-11-28';
    const GITHUB_API_ENDPOINT = 'https://api.github.com';

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public static function createRepo(Proyecto $proyecto) {
        $githubResponse = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => 'Bearer ' . env('GITHUB_TOKEN'),
            'X-GitHub-Api-Version' => self::GITHUB_API_VERSION,
        ])->withUrlParameters([
            'endpoint' => self::GITHUB_API_ENDPOINT,
            'owner' => env('GITHUB_OWNER'),
        ])->post('{+endpoint}/orgs/{owner}/repos', $proyecto->getGithubSettings());

        if($githubResponse->successful()) {
            $githubResponse = Http::get($githubResponse->headers()['Location'][0]);
        }
        return $githubResponse;
    }

    public static function deleteRepo(Proyecto $proyecto) {
        $githubResponse = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => 'Bearer ' . env('GITHUB_TOKEN'),
            'X-GitHub-Api-Version' => self::GITHUB_API_VERSION,
        ])->withUrlParameters([
            'endpoint' => self::GITHUB_API_ENDPOINT,
            'owner' => env('GITHUB_OWNER'),
            'repo' => $proyecto->getRepoNameFromURL(),
        ])->delete('{+endpoint}/repos/{owner}/{repo}');

        return $githubResponse;
    }

    public static function pushZipFile(Proyecto $proyecto, String $path) : void {
        $tmpdir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . $proyecto->getRepoNameFromURL();
        $zipPath = base_path() . DIRECTORY_SEPARATOR . $path;
        self::extractFilesFromZip($zipPath, $tmpdir);

        $files = File::allFiles($tmpdir);

        foreach ($files as $file) {
            $fileBase64 = base64_encode(file_get_contents($file->getRealPath()));
            $repoName = $proyecto->getRepoNameFromURL();
            $path = str_replace($tmpdir . DIRECTORY_SEPARATOR, '', $file->getRealPath());
            $sha = self::getFileSHA($repoName, $path);
            // TODO commit only modified files regarding sha
            $githubResponse = Http::withHeaders([
                'Accept' => 'application/vnd.github+json',
                'Authorization' => 'Bearer ' . env('GITHUB_TOKEN'),
                'X-GitHub-Api-Version' => self::GITHUB_API_VERSION,
            ])->withUrlParameters([
                'endpoint' => self::GITHUB_API_ENDPOINT,
                'owner' => env('GITHUB_OWNER'),
                'repo' => $repoName,
                'path' => $path,
            ])->put('{+endpoint}/repos/{owner}/{repo}/contents/{path}', [
                'message' => 'Entrega de proyecto',
                'content' => $fileBase64,
                'sha' => $sha,
            ]);
        }

        File::deleteDirectory($tmpdir);


    }

    public static function extractFilesFromZip(String $path, String $tmpdir) :bool
    {
        $successful = false;
        $zip = new ZipArchive;
        $res = $zip->open($path);

        if ($res === true) {
            $zip->extractTo($tmpdir);
            $zip->close();
            $successful = true;
        }
        return $successful;
    }

    public static function getFileSHA(String $repoName, String $path) {
        $githubResponse = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => 'Bearer ' . env('GITHUB_TOKEN'),
            'X-GitHub-Api-Version' => self::GITHUB_API_VERSION,
        ])->withUrlParameters([
            'endpoint' => self::GITHUB_API_ENDPOINT,
            'owner' => env('GITHUB_OWNER'),
            'repo' => $repoName,
            'path' => $path,
        ])->GET('{+endpoint}/repos/{owner}/{repo}/contents/{path}');

        return $githubResponse->successful()
            ? $githubResponse->collect()->get('sha')
            : null;
    }
}

        //https://api.github.com/repos/OWNER/REPO/commits

/*         $githubResponse = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => 'Bearer ' . env('GITHUB_TOKEN'),
            'X-GitHub-Api-Version' => self::GITHUB_API_VERSION,
        ])->withUrlParameters([
            'endpoint' => self::GITHUB_API_ENDPOINT,
            'action_set' => 'repos',
            'owner' => '2DAW-CarlosIII',
            'repo' => 'webMarcaPersonalFPEstudiantes',
            'action' => 'commits'
        ])->withMiddleware(
            Middleware::mapRequest(function (RequestInterface $request) {
                return $request;
            })
        )->get('{+endpoint}/{action_set}/{owner}/{repo}/{action}');
 */
