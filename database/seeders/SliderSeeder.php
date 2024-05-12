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
            'image' => 'https://cdn.pixabay.com/photo/2024/03/05/10/38/boat-8614314_1280.jpg',
            'name' => 'Yep Yeni Fırsatlar',
            'content' => 'Yüzbinlerce Üründe %54\'e Varan İndirim',
            'link' => 'urunler',
            'status' => '1',
        ]);
    }
}
