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
            'content' => '1950\'den beri sürdürdüğümüz işimizde çok başarılıyız. Hehe'
        ]);
    }
}
