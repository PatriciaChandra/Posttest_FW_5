<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
            [
                'namakue' => 'Red Velvet',
                'bahan' => 'tepung,gula,telur,buah berry',
                'harga' => '50000',
            ],
            [
                'namakue' => 'Rainbow Cake',
                'bahan' => 'tepung,gula,telur,ceres',
                'harga' => '60000',
            ],
            [
                'namakue' => 'Black Forest',
                'bahan' => 'tepung,gula,telur,dark coklat',
                'harga' => '50000',
            ],
           
        ];
        foreach($menu as $mn) {
            \App\Models\Menu::firstOrCreate($mn);
        }
    }
}
