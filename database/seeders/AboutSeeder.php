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
            'image' => 'Gürberk Gürtürk',
            'name' => '29',
            'content' => '1995-05-06'
        ]);
    }
}
