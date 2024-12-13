<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('symptoms')->insert([
        //     // Disease 1: Jerawat
        //     [ 'code' => 'G01', 'name' => 'Produksi minyak berlebih', 'expert_value' => 1, 'disease_id' => 1 ],
        //     [ 'code' => 'G02', 'name' => 'Adanya sumbatan lapisan kulit mati pada pori – pori yang terinfeksi', 'expert_value' => 0.4, 'disease_id' => 1 ],
        //     [ 'code' => 'G03', 'name' => 'Benjolan kecil kemerahan (papul) yang muncul di atas kulit terasa nyeri', 'expert_value' => 0.8, 'disease_id' => 1 ],
        //     [ 'code' => 'G04', 'name' => 'Stres', 'expert_value' => 0.2, 'disease_id' => 1 ],
        //     [ 'code' => 'G05', 'name' => 'Kulit terasa gatal', 'expert_value' => 0.8, 'disease_id' => 1 ],
        //     [ 'code' => 'G06', 'name' => 'Sensasi panas atau terbakar akibat adanya peradangan', 'expert_value' => 0.2, 'disease_id' => 1 ],

        //     // Disease 2: Lupus
        //     [ 'code' => 'G07', 'name' => 'Kulit terasa gatal', 'expert_value' => 0.4, 'disease_id' => 2 ],
        //     [ 'code' => 'G08', 'name' => 'Ruam pada batang hidung dan kedua pipi', 'expert_value' => 1, 'disease_id' => 2 ],
        //     [ 'code' => 'G09', 'name' => 'Nyeri pada persendian', 'expert_value' => 0.2, 'disease_id' => 2 ],
        //     [ 'code' => 'G10', 'name' => 'Sakit kepala', 'expert_value' => 0.6, 'disease_id' => 2 ],
        //     [ 'code' => 'G11', 'name' => 'Rasa lelah yang ekstrim', 'expert_value' => 0.4, 'disease_id' => 2 ],
        //     [ 'code' => 'G12', 'name' => 'Sensasi panas atau terbakar akibat adanya peradangan', 'expert_value' => 0.8, 'disease_id' => 2 ],
        //     [ 'code' => 'G13', 'name' => 'Terpapar sinar matahari yang berlebihan', 'expert_value' => 0.4, 'disease_id' => 2 ],

        //     // Disease 3: Rosacea
        //     [ 'code' => 'G14', 'name' => 'Kemerahan pada pipi, dahi, dagu dan hidung yang menetap', 'expert_value' => 1, 'disease_id' => 3 ],
        //     [ 'code' => 'G15', 'name' => 'Terpapar sinar matahari yang berlebihan', 'expert_value' => 0.6, 'disease_id' => 3 ],
        //     [ 'code' => 'G16', 'name' => 'Kulit terasa gatal', 'expert_value' => 0.4, 'disease_id' => 3 ],
        //     [ 'code' => 'G17', 'name' => 'Permukaan kulit menjadi kasar', 'expert_value' => 0.5, 'disease_id' => 3 ],
        //     [ 'code' => 'G18', 'name' => 'Pembuluh darah di bawah kulit terlihat jelas', 'expert_value' => 0.2, 'disease_id' => 3 ],
        //     [ 'code' => 'G19', 'name' => 'Makanan yang mengandung kafein dan alkohol', 'expert_value' => 0.2, 'disease_id' => 3 ],

        //     // Disease 4: Flek Hitam
        //     [ 'code' => 'G20', 'name' => 'Perubahan warna kulit setelah mengalami goresan, ruam, atau jerawat', 'expert_value' => 0.8, 'disease_id' => 4 ],
        //     [ 'code' => 'G21', 'name' => 'Adanya bercak atau titik-titik kecil dan tidak menonjol, yang menyebar di permukaan kulit', 'expert_value' => 1, 'disease_id' => 4 ],
        //     [ 'code' => 'G22', 'name' => 'Kulit terasa gatal', 'expert_value' => 0.2, 'disease_id' => 4 ],
        //     [ 'code' => 'G23', 'name' => 'Terpapar sinar matahari yang berlebihan', 'expert_value' => 0.7, 'disease_id' => 4 ],
        //     [ 'code' => 'G24', 'name' => 'Terjadi karena bawaan genetic', 'expert_value' => 1, 'disease_id' => 4 ],

        //     // Disease 5: Dermatitis Seboroik
        //     [ 'code' => 'G25', 'name' => 'Kulit terasa gatal', 'expert_value' => 1, 'disease_id' => 5 ],
        //     [ 'code' => 'G26', 'name' => 'Kelopak mata akan berkerak atau berwarna kemerahan', 'expert_value' => 0.8, 'disease_id' => 5 ],
        //     [ 'code' => 'G27', 'name' => 'Kulit bersisik pada wajah di daerah yang berminyak', 'expert_value' => 0.4, 'disease_id' => 5 ],
        //     [ 'code' => 'G28', 'name' => 'Kelupasan kulit atau ketombe yang terjadi di kumis, jenggot, atau alis', 'expert_value' => 0.4, 'disease_id' => 5 ],
        //     [ 'code' => 'G29', 'name' => 'Kulit kepala berwarna merah dan berketombe', 'expert_value' => 0.9, 'disease_id' => 5 ],
        // ]);
        $symptoms = [
            ['code' => 'G01', 'name' => 'Kulit terasa gatal'],
            ['code' => 'G02', 'name' => 'Adanya sumbatan lapisan kulit mati pada pori – pori yang terinfeksi'],
            ['code' => 'G03', 'name' => 'Benjolan berwarna kemerahan atau kuning (karena mengandung nanah)'],
            ['code' => 'G04', 'name' => 'Produksi minyak berlebih'],
            ['code' => 'G05', 'name' => 'Benjolan kecil kemerahan (papul) yang muncul di atas kulit terasa nyeri'],
            ['code' => 'G06', 'name' => 'Sensasi panas atau terbakar akibat adanya peradangan'],
            ['code' => 'G07', 'name' => 'Stres'],
            ['code' => 'G08', 'name' => 'Ruam pada batang hidung dan kedua pipi'],
            ['code' => 'G09', 'name' => 'Nyeri pada persendian'],
            ['code' => 'G10', 'name' => 'Sakit kepala'],
            ['code' => 'G11', 'name' => 'Rasa lelah yang ekstrim'],
            ['code' => 'G12', 'name' => 'Kemerahan pada pipi, dahi, dagu dan hidung yang menetap'],
            ['code' => 'G13', 'name' => 'Perubahan warna kulit setelah mengalami goresan, ruam, atau jerawat'],
            ['code' => 'G14', 'name' => 'Terpapar sinar matahari yang berlebihan'],
            ['code' => 'G15', 'name' => 'Makanan yang mengandung kafein dan alkohol'],
            ['code' => 'G16', 'name' => 'Pembuluh darah di bawah kulit terlihat jelas'],
            ['code' => 'G17', 'name' => 'Permukaan kulit menjadi kasar'],
            ['code' => 'G18', 'name' => 'Adanya bercak atau titik-titik kecil dan tidak menonjol, yang menyebar di permukaan kulit'],
            ['code' => 'G19', 'name' => 'Terjadi karena bawaan genetic'],
            ['code' => 'G20', 'name' => 'Kelopak mata akan berkerak atau berwarna kemerahan'],
            ['code' => 'G21', 'name' => 'Kulit bersisik pada wajah di daerah yang berminyak'],
            ['code' => 'G22', 'name' => 'Kelupasan kulit atau ketombe yang terjadi di kumis, jenggot, atau alis'],
            ['code' => 'G23', 'name' => 'Kulit kepala berwarna merah dan berketombe'],
        ];

        DB::table('symptoms')->insert($symptoms);
    }
}
