<?php

namespace Database\Seeders;

use App\Models\Cake;
use Illuminate\Database\Seeder;
use Database\Seeders\MenuSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CakesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cakes = [
            [
                'tipe_cake' => 'Red Velvet',
                'banyak_layer' => '2',
                'ukuran_cake' => '40 cm x 40 cm',
                'jumlah_lilin' => '5',
                'pesan_pada_cake' => 'Happy Birthday Lou',
                'menu_id' => '1'


            ],
            [
                'tipe_cake' => 'Black Forest',
                'banyak_layer' => '1',
                'ukuran_cake' => '40 cm x 40 cm',
                'jumlah_lilin' => '3',
                'pesan_pada_cake' => 'Happy Birthday Rina',
                'menu_id' => '2'


            ],
            [
                'tipe_cake' => 'Rainbow Cake',
                'banyak_layer' => '2',
                'ukuran_cake' => '60 cm x 60 cm',
                'jumlah_lilin' => '10',
                'pesan_pada_cake' => 'Congrats for your graduation',
                'menu_id' => '3'

            ],
        ];
        $this->call([MenuSeeder::class]);
        foreach ($cakes as $ck) {
            \App\Models\Cake::firstOrCreate($ck);
        }
    }
}
