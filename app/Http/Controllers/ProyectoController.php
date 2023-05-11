<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function getIndex() {
        return view('proyectos.index');
    }
    public function getShow($id) {
        return view('proyectos.show', array('id'=>$id));
    }
    public function getCreate() {
        return view('proyectos.create');
    }
    public function getEdit($id) {
        return view('proyectos.edit', array('id'=>$id));
    }
}
