<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProyectoUser;

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
            for ($j = 8; $j <= 10; $j++) {
                DB::table('proyecto_user')->insert([
                    'proyecto_id'=>$i,
                    'user_id'=>$j,
                ]);
            }
        }
    }
}
