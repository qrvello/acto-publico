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
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'admin2',
            'email' => 'admin2@admin.com',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'admin3',
            'email' => 'admin3@admin.com',
            'password' => bcrypt('admin')
        ]);
    }
}
