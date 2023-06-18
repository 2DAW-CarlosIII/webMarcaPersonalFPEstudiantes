<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        $this->call(UsersTableSeeder::class);
        $this->call(ProyectosTableSeeder::class);
        $this->call(ProyectosEstudianteTableSeeder::class);

        Model::reguard();

        Schema::enableForeignKeyConstraints();

        $this->command->info('Tablas iniciadas correctamente');
    }
}
