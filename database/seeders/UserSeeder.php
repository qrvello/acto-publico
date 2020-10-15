<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Santiago',
            'lastname' => 'Curvello',
            'email' => 'admin',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'admin2',
            'lastname' => 'admin',
            'email' => 'admin2',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'admin3',
            'lastname' => 'admin',
            'email' => 'admin3',
            'password' => bcrypt('admin')
        ]);
    }
}
