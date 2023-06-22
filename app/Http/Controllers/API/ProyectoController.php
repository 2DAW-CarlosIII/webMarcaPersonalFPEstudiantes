<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Http\Resources\ProyectoResource;

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
        return response($proyecto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $proyectoData = json_decode($request->getContent(), true);
        $proyecto->update($proyectoData);

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
