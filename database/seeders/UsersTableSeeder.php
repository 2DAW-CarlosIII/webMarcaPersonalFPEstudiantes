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
                'last_name_name'=>env('WEB_ADMIN_USERNAME'),
                'email'=>env('WEB_ADMIN_EMAIL'),
                'password'=>bcrypt(env('WEB_ADMIN_PASS'))
            ]);
    }
 }
