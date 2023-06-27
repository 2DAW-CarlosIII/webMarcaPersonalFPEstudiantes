<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Http\Resources\ProyectoResource;
use App\Providers\GitHub;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = filterFrontParameters(Proyecto::class);
        return $registros->get();
    }

    /**
     * Return the total of resources.
     */
    public static function count()
    {
        return Proyecto::count();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proyecto = json_decode($request->getContent(), true);

        $proyecto = Proyecto::create($proyecto);

        return new ProyectoResource($proyecto);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        $proyecto->users;
        $proyecto->teacher;
        return response($proyecto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        // TODO control de excepciones
        $proyectoData = $request->all();
        if($proyectoRepoZip = $request->file('repoZip')) {
            // TODO para el proyecto no es necesario almacenar el fichero en la base de datos ni en public
            // Es posible hacer el push desde el archivo recién cargado.
            $path = $proyectoRepoZip->store('public' . DIRECTORY_SEPARATOR . 'repoZips');
            $path = 'public' . DIRECTORY_SEPARATOR
                . 'storage' . DIRECTORY_SEPARATOR
                . 'repoZips' . DIRECTORY_SEPARATOR
                . $proyectoRepoZip->hashName();
            $proyectoData['repozip'] = $path;
        }

        if (isset($path) && strlen($proyecto->url_github) == 0) {
            $githubResponse = GitHub::createRepo($proyecto);
            if($githubResponse->successful()) {
                $proyectoData['url_github'] = $githubResponse->collect()->get('html_url');
            }
        }

        $proyecto->update($proyectoData);

        if (isset($path) && $proyecto->urlPerteneceOrganizacion()) {
            GitHub::pushZipFile($proyecto, $path);
            unlink(base_path() . DIRECTORY_SEPARATOR . $path);
        }

//        GitHub::deleteRepo($proyecto);

        return $proyecto;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
    }

    public function attachEstudiantes(Request $request, $id)
    {
        $payload = json_decode($request->getContent(), true);
        $alumno = $payload['alumno'];
        //$idproyecto = $payload['proyecto'];
        $proyecto=Proyecto::findOrFail($id);

        $proyecto->users()->attach($alumno);

    }
    public function detachEstudiantes(Request $request, $id)
    {
        $payload = json_decode($request->getContent(), true);
        $alumno = $payload['alumno'];
        //$idproyecto = $payload['proyecto'];
        $proyecto=Proyecto::findOrFail($id);

        $proyecto->users()->detach($alumno);

    }
}
