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
                'suggestion' => 'Cuci wajah dua kali sehari dengan pembersih lembut, hindari memencet jerawat, dan gunakan produk non-komedogenik. Konsumsi makanan sehat, hindari stres, dan tidur cukup. Jika kondisi memburuk, konsultasikan penggunaan retinoid, benzoyl peroxide, atau antibiotik topikal/oral kepada dokter kulit. Terapi hormonal juga bisa menjadi opsi untuk jerawat terkait perubahan hormon.',
            ],
            [
                'code' => 'P02',
                'name' => 'Lupus',
                'description' => 'Lupus adalah penyakit autoimun yang menyebabkan peradangan pada berbagai bagian tubuh. Pencegahan: Hindari paparan sinar matahari langsung, kelola stres, dan konsumsi makanan sehat yang mendukung sistem imun.',
                'suggestion' => 'Konsultasikan dengan dokter untuk pengobatan seperti kortikosteroid, obat imunosupresif, atau hydroxychloroquine. Hindari paparan sinar matahari langsung dengan mengenakan tabir surya. Jaga pola hidup sehat dengan olahraga ringan, tidur cukup, dan diet seimbang. Perhatikan gejala seperti ruam, nyeri sendi, atau kelelahan untuk memantau kondisi dan mencegah komplikasi.',
            ],
            [
                'code' => 'P03',
                'name' => 'Rosacea',
                'description' => 'Rosacea adalah kondisi kulit kronis yang menyebabkan kemerahan dan pembuluh darah terlihat di wajah. Pencegahan: Hindari pemicu seperti makanan pedas, alkohol, dan paparan panas ekstrem. Gunakan pelembap yang cocok untuk kulit sensitif.',
                'suggestion' => 'Bersihkan wajah dengan pembersih lembut dua kali sehari. Hindari pemicu seperti alkohol, makanan pedas, atau panas berlebih. Gunakan tabir surya spektrum luas setiap hari. Konsultasikan krim metronidazol, asam azelaic, atau brimonidine untuk mengurangi kemerahan. Terapi laser juga efektif untuk kasus yang lebih berat. Hindari produk berbahan keras.',
            ],
            [
                'code' => 'P04',
                'name' => 'Flek Hitam',
                'description' => 'Flek hitam adalah area kulit yang gelap akibat produksi melanin berlebih. Pencegahan: Gunakan tabir surya setiap hari, hindari paparan sinar UV langsung, dan konsumsi makanan kaya antioksidan.',
                'suggestion' => 'Gunakan tabir surya SPF 30+ setiap hari untuk mencegah flek memburuk. Kombinasikan dengan produk pencerah seperti hidrokuinon, asam kojat, atau niacinamide. Eksfoliasi kulit secara rutin untuk mempercepat regenerasi. Hindari paparan sinar matahari langsung dan gunakan topi atau payung. Konsultasikan terapi laser atau chemical peeling dengan dokter kulit jika flek sulit hilang.',
            ],
            [
                'code' => 'P05',
                'name' => 'Dermatitis Seboroik',
                'description' => 'Dermatitis Seboroik adalah gangguan kulit yang menyebabkan bercak bersisik, kulit merah, dan ketombe. Pencegahan: Gunakan sampo antiketombe secara teratur, hindari produk yang mengiritasi kulit, dan kelola stres.',
                'suggestion' => 'Gunakan sampo antijamur seperti ketoconazole atau selenium sulfide untuk kulit kepala. Oleskan krim kortikosteroid ringan pada area kulit yang terkena. Bersihkan kulit dengan lembut dan hindari produk berbahan iritan. Hindari stres dan jaga pola hidup sehat. Jika gejala berulang, konsultasikan dengan dokter untuk perawatan jangka panjang yang lebih efektif.',
            ],
        ]);
    }
}
