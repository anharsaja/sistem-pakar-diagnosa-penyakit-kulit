<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([
            [ 'code' => 'P01', 'name' => 'Jerawat' ],
            [ 'code' => 'P02', 'name' => 'Lupus' ],
            [ 'code' => 'P03', 'name' => 'Rosacea' ],
            [ 'code' => 'P04', 'name' => 'Flek Hitam' ],
            [ 'code' => 'P05', 'name' => 'Dermatitis Seboroik' ],
        ]);
    }
}
