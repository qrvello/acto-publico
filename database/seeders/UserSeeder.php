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
        //Se crea el usuario
        $user = User::create([
            'name' => 'Santiago',
            'lastname' => 'Curvello',
            'email' => 'admin',
            'password' => bcrypt('admin')
        ]);
        
        //Se le asigna el rol admin al usuario y sus permisos
        $user->assignRole('admin');
        $user->givePermissionTo('admin');
        
        //Se crea el usuario
        $user = User::create([
            'name' => 'Luciano',
            'lastname' => 'Ferreiros',
            'email' => 'admin2',
            'password' => bcrypt('admin2')
        ]);
        
        //Se le asigna el rol admin al usuario y sus permisos
        $user->assignRole('admin');
        $user->givePermissionTo('admin');

        return $user;
    }
}
