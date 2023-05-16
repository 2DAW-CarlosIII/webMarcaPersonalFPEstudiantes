<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function getIndex() {
        return view('proyectos.index', array('arrayProyectos' => self::$arrayProyectos));
    }
    public function getShow($id) {
        return view('proyectos.show', array('id'=>$id, 'proyecto' => self::$arrayProyectos[$id]));
    }
    public function getCreate() {
        return view('proyectos.create');
    }
    public function getEdit($id) {
        return view('proyectos.edit', array('id'=>$id, 'proyecto' => self::$arrayProyectos[$id]));
    }
    public function putStore($id) {
        //TODO: lógica para editar proyecto en BBDD
        return ('Proyecto editado con éxito');
    }
}

