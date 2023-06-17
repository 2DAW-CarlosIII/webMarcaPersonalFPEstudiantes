<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedAdmin();
        self::seedUsers();
        $this->command->info('¡Tabla users inicializada con datos!');
    }
    private function seedUsers()
    {
        $user = User::factory(6)->create();
    }
    private function seedAdmin()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
                'first_name'=>env('WEB_ADMIN_USERNAME'),
                'last_name'=>env('WEB_ADMIN_USERNAME'),
                'email'=>env('WEB_ADMIN_EMAIL'),
                'password'=>bcrypt(env('WEB_ADMIN_PASS'))
            ]);
            DB::table('users')->insert([
                'first_name'=>'Alberto',
                'last_name'=>'Sierra Olmo',
                'email'=>'albsierra@murciaeduca.es',
                'password'=>bcrypt(env('WEB_ADMIN_PASS')),
                'isTeacher' => true
            ]);
            DB::table('users')->insert([
                'first_name'=>'Víctor M.',
                'last_name'=>'Garrido Cases',
                'email'=>'vmanuel.garrido@murciaeduca.es',
                'password'=>bcrypt(env('WEB_ADMIN_PASS')),
                'isTeacher' => true
            ]);
            DB::table('users')->insert([
                'first_name'=>'M. Cruz',
                'last_name'=>'Sanz Zamarrón',
                'email'=>'mcruz.sanz@murciaeduca.es',
                'password'=>bcrypt(env('WEB_ADMIN_PASS')),
                'isTeacher' => true
            ]);
            DB::table('users')->insert([
                'first_name'=>'Vicente J.',
                'last_name'=>'López Belmonte',
                'email'=>'doncarnal@murciaeduca.es',
                'password'=>bcrypt(env('WEB_ADMIN_PASS')),
                'isTeacher' => true
            ]);
            DB::table('users')->insert([
                'first_name'=>'Francisco',
                'last_name'=>'Ortiz',
                'email'=>'fortiz@murciaeduca.es',
                'password'=>bcrypt(env('WEB_ADMIN_PASS')),
                'isTeacher' => true
            ]);
    }
 }
