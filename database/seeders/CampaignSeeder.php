<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
            'thumbnail'=> 'campaign/1.jpg',
            'tittle' => 'Donasi Teh Manis Campur Jeruk',
            'slug' => 'Donasi-Teh-Manis-Campur-Jeruk',
            'story' => 'Ceritanya gweh pengin belli teh yang banyak banget dengan rasa jeruk',
            'target' => 10000,
            'end_date' => '2002-09-28'
        ]);

        Campaign::create([
            'thumbnail'=> 'campaign/2.jpg',
            'tittle' => 'Donasi Es Teh Manis Campur',
            'slug' => 'Donasi-Es-Teh-Manis-Campur',
            'story' => 'Ceritanya gweh pengin es teh yang banyak banget dengan rasa lemon hauahahahahhahaha',
            'target' => 20000,
            'end_date' => '2007-05-28'
        ]);
    }
}
