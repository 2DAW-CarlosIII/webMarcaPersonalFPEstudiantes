<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       self::seedProyectos();
       $this->command->info('¡Tabla proyectos iniciada con datos!');
    }

    public function seedProyectos()
    {
        Proyecto::truncate();
        Proyecto::insert(self::$arrayProyectos);
    }
    private static $arrayProyectos = array(
        array(
            'docente_id' => '2',
            'nombre' => 'Web Marca Personal C3',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        ),
        array(
            'docente_id' => '3',
            'nombre' => 'Encuentro Empresarial C3',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        ),
        array(
            'docente_id' => '4',
            'nombre' => 'C3Runner',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        ),
        array(
            'docente_id' => '5',
            'nombre' => 'InmoC3',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        ),
        array(
            'docente_id' => '6',
            'nombre' => 'Andrómeda',
            'url_github' => 'https://github.com/2DAW-CarlosIII/webMarcaPersonalFPEstudiantes/',
            'metadatos' => 'El veloz murciélago hindú comía feliz cardillo y kiwi'
        )
    );
}
