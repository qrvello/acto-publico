<?php

namespace Database\Seeders;

use App\Models\Establishment;
use Illuminate\Database\Seeder;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Establishment::create([
            'name' => 'Chacabuco',
            'adress' => 'Rivadavia 17747',
        ]);

        Establishment::create([
            'name' => 'Japón',
            'adress' => 'Arieta 1231',
        ]);

        Establishment::create([
            'name' => 'Islas Malvinas',
            'adress' => 'Jujuy 23423',
        ]);
    }
}
