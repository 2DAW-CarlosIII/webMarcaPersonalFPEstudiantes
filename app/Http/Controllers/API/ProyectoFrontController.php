<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Http\Resources\ProyectoResource;

class ProyectoFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProyectoResource::collection(Proyecto::all());
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
        return new ProyectoResource($proyecto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
