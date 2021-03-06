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
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 1,
            'hours' => 4,
            'matter' => 'Matematica',
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);

        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => false,
            'character' => 'Titular',
            'turn' => 'Mañana',
            'establishment_id' => 2,
            'matter' => 'Ciencias Sociales',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 1,
            'matter' => 'Matematica',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 3,
            'matter' => 'Matematica',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 3,
            'matter' => 'Matematica',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 2,
            'matter' => 'Matematica',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 1,
            'matter' => 'Matematica',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 2,
            'matter' => 'Matematica',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 3,
            'matter' => 'Matematica',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 1,
            'matter' => 'Matematica',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 3,
            'hours' => 4,
            'matter' => 'Educación física',
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
        Publication::create([
            'name' => 'PROFESOR DE NIVEL MEDIO',
            'state' => true,
            'character' => 'Suplente',
            'turn' => 'Varios',
            'establishment_id' => 1,
            'matter' => 'Laboratorio de hardware',
            'hours' => 4,
            'date' => date("Y-m-d H:i:s"),
            'observation' => 'Ciclo básico 1º 13'

        ]);
    }
}
