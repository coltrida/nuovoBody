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
                'descrizione' => 'ghhgvjhgjhg yuhfgjhgjfhgjbgh ghyhgjhgjhgj guhugjhhgjhkhjghkhgjhhgjhhgjh hgjnhgjhhgjbhgjb'
            ],
            [
                'nome' => 'Gino',
                'cognome' => 'Strubalino',
                'descrizione' => 'ghhgvjhgjhg yuhfgjhgjfhgjbgh ghyhgjhgjhgj guhugjhhgjhkhjghkhgjhhgjhhgjh  hygjghj hygjghgjbn hygjhj hgjnhgjhhgjbhgjb'
            ],
            [
                'nome' => 'Michele',
                'cognome' => 'Broccomire',
                'descrizione' => 'ghhgvjhgjhg yuhfgjhgjfhgjbgh ghyhgjhgjhgj guhugjhhgjhkh'
            ],
        ]);
    }
}
