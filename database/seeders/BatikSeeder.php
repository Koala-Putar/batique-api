<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Batik;

class BatikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batiks = [
            [
                'name' => 'Ulam Sari',
                'image' => 'https://drive.google.com/file/d/1xnRtub-gNCoAxbslK68swzQC8Vt9cmKr/view?usp=sharing',
                'description' => 'Motif Batik ini adalah salah satu jenis motif batik yang paling terkenal. Motif batik ini menunjukan gambar ikan dan udang yang mewakili mata pencaharian masyarakat Bali, yaitu nelayan. Motif batik bali ulamsari Mas bermakna kesejahteraan dan kemakmuran masayrakat yang hidup di pesisir pantai.',
                'category_id' => 1,
            ],
        ];
    }
}
