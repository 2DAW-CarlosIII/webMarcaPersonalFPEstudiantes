<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function getIndex() {
        $proyectos = Proyecto::all();
        return view('proyectos.index', array('arrayProyectos' => $proyectos));
    }
    public function getShow($id) {
        $proyecto = Proyecto::findOrFail($id);
        return view('proyectos.show', array('id'=>$id, 'proyecto' => $proyecto));
    }
    public function getSearch(Request $request) {
        $search = $request->input('search');
        $resultados = Proyecto::query()
                    ->where('nombre', 'LIKE', "%{$search}%")
                    ->orWhere('metadatos', 'LIKE', "%{$search}%")
                    ->get();
        return view('proyectos.index', array('arrayProyectos' => $resultados));
    }

    public function getCreate() {
        return view('proyectos.create');
    }
    public function getEdit($id) {
        $proyecto = Proyecto::findOrFail($id);
        return view('proyectos.edit', array('id'=>$id, 'proyecto' => $proyecto));
    }
    public function store(Request $request){
        $proyectoNuevo = new Proyecto();
        $proyectoNuevo->nombre = $request->input('nombre');
        $proyectoNuevo->metadatos = $request->input('metadatos');
        $proyectoNuevo->docente_id = $request->input('docente_id');
        $proyectoNuevo->url_github = $request->input('url_github');
        $proyectoNuevo->save();

        $url = action([ProyectoController::class, 'getShow'], array('id' => $proyectoNuevo->id));
        return redirect($url);

    }

    public function putStore($id, Request $request) {
        $proyectoEdit = Proyecto::findOrFail($id);
        $proyectoEdit->nombre = $request->input('nombre');
        $proyectoEdit->metadatos = $request->input('metadatos');
        $proyectoEdit->docente_id = $request->input('docente_id');
        $proyectoEdit->url_github = $request->input('url_github');
        $proyectoEdit->save();

        $url = action([ProyectoController::class, 'getShow'], array('id' => $proyectoEdit->id));
        return redirect($url);

        return ('Proyecto editado con éxito');
    }
}

