<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertaintySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Jerawat
            ['disease_id' => 1, 'symptom_id' => 4, 'value' => 1],
            ['disease_id' => 1, 'symptom_id' => 2, 'value' => 0.4],
            ['disease_id' => 1, 'symptom_id' => 5, 'value' => 0.8],
            ['disease_id' => 1, 'symptom_id' => 7, 'value' => 0.2],
            ['disease_id' => 1, 'symptom_id' => 1, 'value' => 0.8],
            ['disease_id' => 1, 'symptom_id' => 6, 'value' => 0.2],

            // Lupus
            ['disease_id' => 2, 'symptom_id' => 1, 'value' => 0.4],
            ['disease_id' => 2, 'symptom_id' => 8, 'value' => 1],
            ['disease_id' => 2, 'symptom_id' => 9, 'value' => 0.2],
            ['disease_id' => 2, 'symptom_id' => 10, 'value' => 0.6],
            ['disease_id' => 2, 'symptom_id' => 11, 'value' => 0.4],
            ['disease_id' => 2, 'symptom_id' => 6, 'value' => 0.8],
            ['disease_id' => 2, 'symptom_id' => 14, 'value' => 0.4],

            // Rosacea
            ['disease_id' => 3, 'symptom_id' => 12, 'value' => 1],
            ['disease_id' => 3, 'symptom_id' => 14, 'value' => 0.6],
            ['disease_id' => 3, 'symptom_id' => 1, 'value' => 0.4],
            ['disease_id' => 3, 'symptom_id' => 17, 'value' => 0.5],
            ['disease_id' => 3, 'symptom_id' => 16, 'value' => 0.2],
            ['disease_id' => 3, 'symptom_id' => 15, 'value' => 0.2],

            // Flek Hitam
            ['disease_id' => 4, 'symptom_id' => 13, 'value' => 0.8],
            ['disease_id' => 4, 'symptom_id' => 18, 'value' => 1],
            ['disease_id' => 4, 'symptom_id' => 1, 'value' => 0.2],
            ['disease_id' => 4, 'symptom_id' => 14, 'value' => 0.7],
            ['disease_id' => 4, 'symptom_id' => 19, 'value' => 1],

            // Dermatitis Seboroik
            ['disease_id' => 5, 'symptom_id' => 1, 'value' => 1],
            ['disease_id' => 5, 'symptom_id' => 20, 'value' => 0.8],
            ['disease_id' => 5, 'symptom_id' => 21, 'value' => 0.4],
            ['disease_id' => 5, 'symptom_id' => 22, 'value' => 0.4],
            ['disease_id' => 5, 'symptom_id' => 23, 'value' => 0.9],
        ];

        DB::table('certainties')->insert($data);
    }
}
