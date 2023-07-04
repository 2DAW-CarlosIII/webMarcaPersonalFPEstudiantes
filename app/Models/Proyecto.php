<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'docente_id',
        'url_github',
        'metadatos',
        'ciclo_id',
        'descripcion',
        'repozip',
    ];

    public const filterFields = [
        'nombre',
        'docente_id',
        'url_github',
        'metadatos',
        'ciclo_id',
        'descripcion'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function teacher()
    {
        return $this->hasOne(User::class, 'id', 'docente_id');
    }

    public function createRepoName() {
        // TODO obtener un nombre según curso, familia, ciclo, nombre
        return "prueba";
    }

    public function getRepoNameFromURL() {
        $url = $this->url_github;
        $repoName = substr($url, strripos($url, '/') + 1);
        return $repoName;
    }

    public function urlPerteneceOrganizacion() {
        return strpos($this->url_github, env('GITHUB_OWNER')) > 0;
    }

    public function getGithubSettings() {
        // TODO obtener un nombre según curso, familia, ciclo, nombre
        return [
            'org' => env('GITHUB_OWNER'),
            'name' => $this->nombre,
            'description' => $this->descripcion,
            'homepage' => $this->url_github,
            'private' => false,
            'has_issues' => true,
            'has_projects' => false,
            'has_wiki' => false,
        ];
    }
}
