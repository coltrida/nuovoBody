<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use function now;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::insert([
            [
                'nome' => 'pugilato',
                'descrizione' => 'grrf dslaòkfjòkldjsa afòlj òadsfj òadskfjò dlsfjkalòk',
                'trainer_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'nuoto',
                'descrizione' => 'grrf dslaòkfjòkldjsa afòlj òadsfj òadskfjò dlsfjkalòk',
                'trainer_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'box',
                'descrizione' => 'grrf dslaòkfjòkldjsa afòlj òadsfj òadskfjò dlsfjkalòk',
                'trainer_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
