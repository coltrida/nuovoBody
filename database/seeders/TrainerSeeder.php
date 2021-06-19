<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::insert([
            [
                'nome' => 'Mario',
                'cognome' => 'Rossi',
            ],
            [
                'nome' => 'Gino',
                'cognome' => 'Strubalino',
            ],
            [
                'nome' => 'Michele',
                'cognome' => 'Broccomire',
            ],
        ]);
    }
}
