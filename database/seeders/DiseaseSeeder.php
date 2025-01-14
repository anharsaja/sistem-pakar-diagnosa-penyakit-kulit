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
                'suggestion' => 'Bersihkan wajah rutin, gunakan produk non-komedogenik, konsumsi makanan sehat, dan hindari stres. Jika parah, konsultasikan penggunaan retinoid atau antibiotik topikal/oral ke dokter.',
            ],
            [
                'code' => 'P02',
                'name' => 'Lupus',
                'description' => 'Lupus adalah penyakit autoimun yang menyebabkan peradangan pada berbagai bagian tubuh. Pencegahan: Hindari paparan sinar matahari langsung, kelola stres, dan konsumsi makanan sehat yang mendukung sistem imun.',
                'suggestion' => ' Konsultasi dokter diperlukan. Konsumsi kortikosteroid dan obat imunosupresif sesuai anjuran. Hindari paparan sinar matahari langsung dan jaga pola hidup sehat untuk mengelola gejala.',
            ],
            [
                'code' => 'P03',
                'name' => 'Rosacea',
                'description' => 'Rosacea adalah kondisi kulit kronis yang menyebabkan kemerahan dan pembuluh darah terlihat di wajah. Pencegahan: Hindari pemicu seperti makanan pedas, alkohol, dan paparan panas ekstrem. Gunakan pelembap yang cocok untuk kulit sensitif.',
                'suggestion' => 'Gunakan pembersih wajah lembut, hindari pemicu seperti makanan pedas dan alkohol. Konsultasikan terapi laser atau krim metronidazol/topikal brimonidine dengan dokter kulit.',
            ],
            [
                'code' => 'P04',
                'name' => 'Flek Hitam',
                'description' => 'Flek hitam adalah area kulit yang gelap akibat produksi melanin berlebih. Pencegahan: Gunakan tabir surya setiap hari, hindari paparan sinar UV langsung, dan konsumsi makanan kaya antioksidan.',
                'suggestion' => 'Gunakan tabir surya SPF tinggi setiap hari, kombinasikan dengan krim pencerah seperti asam kojat atau hidrokuinon. Eksfoliasi rutin dan hindari paparan sinar matahari berlebih.',
            ],
            [
                'code' => 'P05',
                'name' => 'Dermatitis Seboroik',
                'description' => 'Dermatitis Seboroik adalah gangguan kulit yang menyebabkan bercak bersisik, kulit merah, dan ketombe. Pencegahan: Gunakan sampo antiketombe secara teratur, hindari produk yang mengiritasi kulit, dan kelola stres.',
                'suggestion' => 'Gunakan sampo antijamur seperti ketoconazole, hindari produk berbahan iritan. Oleskan krim kortikosteroid ringan jika direkomendasikan. Jaga kebersihan kulit dan kelola stres.',
            ],
        ]);
    }
}
