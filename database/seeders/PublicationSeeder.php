<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publication;
class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publication::create([
            'name' => 'prof de musica',
            'state' => true,
            'turn' => 'tarde',
            'establishment_id' => 1,
        ]);

        Publication::create([
            'name' => 'prof de musica',
            'state' => true,
            'turn' => 'tarde',
            'establishment_id' => 1,
        ]);

        Publication::create([
            'name' => 'prof de musica',
            'state' => true,
            'turn' => 'tarde',
            'establishment_id' => 2,
        ]);

        Publication::create([
            'name' => 'prof de musica',
            'state' => true,
            'turn' => 'tarde',
            'establishment_id' => 3,
        ]);
    }
}
