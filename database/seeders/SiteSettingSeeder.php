<?php

namespace Database\Seeders;

#use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name' => 'adres',
            'data' => 'Samsun adres bilgilerim burada',
        ]);

        SiteSetting::create([
            'name' => 'phone',
            'data' => '+90 (456) 567 78 89',
        ]);

        SiteSetting::create([
            'name' => 'email',
            'data' => 'seker_pancari@tost.com',
        ]);

        SiteSetting::create([
            'name' => 'harita',
            'data' =>null,
        ]);
    }
 }


