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
            [
                'code' => 'P01',
                'name' => 'Jerawat',
                'description' => 'Jerawat adalah kondisi kulit yang terjadi ketika folikel rambut tersumbat oleh minyak dan sel kulit mati. Pencegahan: Bersihkan wajah secara teratur, hindari produk yang menyumbat pori-pori, dan kurangi konsumsi makanan berminyak.',
            ],
            [
                'code' => 'P02',
                'name' => 'Lupus',
                'description' => 'Lupus adalah penyakit autoimun yang menyebabkan peradangan pada berbagai bagian tubuh. Pencegahan: Hindari paparan sinar matahari langsung, kelola stres, dan konsumsi makanan sehat yang mendukung sistem imun.',
            ],
            [
                'code' => 'P03',
                'name' => 'Rosacea',
                'description' => 'Rosacea adalah kondisi kulit kronis yang menyebabkan kemerahan dan pembuluh darah terlihat di wajah. Pencegahan: Hindari pemicu seperti makanan pedas, alkohol, dan paparan panas ekstrem. Gunakan pelembap yang cocok untuk kulit sensitif.',
            ],
            [
                'code' => 'P04',
                'name' => 'Flek Hitam',
                'description' => 'Flek hitam adalah area kulit yang gelap akibat produksi melanin berlebih. Pencegahan: Gunakan tabir surya setiap hari, hindari paparan sinar UV langsung, dan konsumsi makanan kaya antioksidan.',
            ],
            [
                'code' => 'P05',
                'name' => 'Dermatitis Seboroik',
                'description' => 'Dermatitis Seboroik adalah gangguan kulit yang menyebabkan bercak bersisik, kulit merah, dan ketombe. Pencegahan: Gunakan sampo antiketombe secara teratur, hindari produk yang mengiritasi kulit, dan kelola stres.',
            ],
        ]);
    }
}
