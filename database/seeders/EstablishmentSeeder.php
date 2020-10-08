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
            'name' => 'chacabuco',
            'adress' => 'rivadavia 17747',
        ]);

        Establishment::create([
            'name' => 'japon',
            'adress' => 'arieta 1231',
        ]);

        Establishment::create([
            'name' => 'islas malvinas',
            'adress' => 'arieta 12312312',
        ]);
    }
}
