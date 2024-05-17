<?php

namespace Database\Seeders;

use App\Models\About;
#use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'image' => 'https://randomwordgenerator.com/img/picture-generator/54e9d6464d5ab10ff3d8992cc12c30771037dbf852547940772c7dd49348_640.jpg',
            'name' => 'Biz Çok İyiyiz',
            'content' => '1950\'den beri sürdürdüğümüz işimizde çok başarılıyız. Hehe',
            'text_1_icon' => '',
            'text_1' => '',
            'text_1_content' => '',
            'text_2_icon' => '',
            'text_2' => '',
            'text_2_content' => '',
            'text_3_icon' => '',
            'text_3' => '',
            'text_3_content' => ''

        ]);
    }
}
