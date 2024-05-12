<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'image' => 'https://fak2eimg.pl/250x100/',
            'name' => 'Slider2',
            'content' => 'E-Ticar1et Sitemize Hoş Geldiniz',
            'link' => 'urunler1',
            'status' => '0',
        ]);
        Slider::create([
            'image' => 'https://fak2eimg.pl/250x100/',
            'name' => 'Slider2',
            'content' => 'E-Ticar1et Sitemize Hoş Geldiniz',
            'link' => 'urunler1',
            'status' => '0',
        ]);
    }
}
