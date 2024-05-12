<?php

namespace Database\Seeders;

use App\Models\GG;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GG::create([
            'isim' => 'Gürberk Gürtürk',
            'yas' => '29',
            'cinsiyet' => 1,
            'dogum_tarihi' => '1995-05-06'
        ]);
    }
}
