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

    private static $arrayProyectos = array(
        array(
            'docente' => 'Alberto Sierra',
            'nombre' => 'Web Marca Personal C3',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        ),
        array(
            'docente' => 'MCruz Sanz',
            'nombre' => 'Encuentro Empresarial C3',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        ),
        array(
            'docente' => 'Victor Garrido',
            'nombre' => 'C3Runner',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        ),
        array(
            'docente' => 'Vicente López',
            'nombre' => 'InmoC3',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        ),
        array(
            'docente' => 'Francisco Ortiz',
            'nombre' => 'Andrómeda',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        )
    );
}

