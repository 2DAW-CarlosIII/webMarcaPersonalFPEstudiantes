<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProyectoUser;
use App\Models\Proyecto;

class ProyectosEstudianteTableSeeder extends Seeder
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
        ProyectoUser::truncate();
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 0; $j < (random_int(1, 3)); $j++) {
                $proyecto = Proyecto::find($i);
                $proyecto->users()->attach(random_int(7, 12));
            }
        }
    }
}
