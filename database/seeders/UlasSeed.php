<?php

namespace Database\Seeders;

use App\Models\ulasim;
#use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UlasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ulasim::create([
            'adres' => 'Samsun / Atakum, Çobanlı, Aydınlık, 55200',
            'telefon' => '+90 (456) 567 78 89',
            'posta' => 'seker_pancari@tost.com'
        ]);
    }
}
