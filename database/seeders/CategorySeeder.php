<?php

namespace Database\Seeders;

use App\Models\Category;
#use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       $erkek = Category::create([
            'image' => 'https://www.shipbob.com/au/wp-content/uploads/sites/33/2022/07/PRODUCT-RANGE.jpg',
            'thumbnail' => NULL,
            'cat_ust' => NULL,
            'name' => 'Erkek',
            'content' => 'Erkek Giyim',
            'status' => '1'
        ]);

        Category::create([
            'image' => 'https://www.shipbob.com/au/wp-content/uploads/sites/33/2022/07/PRODUCT-RANGE.jpg',
            'thumbnail' => NULL,
            'cat_ust' => $erkek->id,
            'name' => 'Erkek Kazak',
            'content' => 'Erkek Kazaklar',
            'status' => '1'
        ]);
        Category::create([
            'image' => 'https://www.shipbob.com/au/wp-content/uploads/sites/33/2022/07/PRODUCT-RANGE.jpg',
            'thumbnail' => NULL,
            'cat_ust' => $erkek->id,
            'name' => 'Erkek Pantolon',
            'content' => 'Erkek Pantolonlar',
            'status' => '1'
        ]);

        $kadin = Category::create([
            'image' => 'https://www.shipbob.com/au/wp-content/uploads/sites/33/2022/07/PRODUCT-RANGE.jpg',
            'thumbnail' => NULL,
            'cat_ust' => NULL,
            'name' => 'Kadın',
            'content' => 'Kadın Giyim',
            'status' => '1'
        ]);

        Category::create([
            'image' => 'https://www.shipbob.com/au/wp-content/uploads/sites/33/2022/07/PRODUCT-RANGE.jpg',
            'thumbnail' => NULL,
            'cat_ust' => $kadin->id,
            'name' => 'Kadın Çanta',
            'content' => 'Kadın Çantalar',
            'status' => '1'
        ]);

        Category::create([
            'image' => 'https://www.shipbob.com/au/wp-content/uploads/sites/33/2022/07/PRODUCT-RANGE.jpg',
            'thumbnail' => NULL,
            'cat_ust' => $kadin->id,
            'name' => 'Kadın Pantolon',
            'content' => 'Kadın Pantolonlar',
            'status' => '1'
        ]);

        $cocuk = Category::create([
            'image' => 'https://www.shipbob.com/au/wp-content/uploads/sites/33/2022/07/PRODUCT-RANGE.jpg',
            'thumbnail' => NULL,
            'cat_ust' => NULL,
            'name' => 'Çocuk',
            'content' => 'Çocuk Giyim',
            'status' => '1'
        ]);

        Category::create([
            'image' => 'https://www.shipbob.com/au/wp-content/uploads/sites/33/2022/07/PRODUCT-RANGE.jpg',
            'thumbnail' => NULL,
            'cat_ust' => $cocuk->id,
            'name' => 'Çocuk Şort',
            'content' => 'Çocuk Şortlar',
            'status' => '1'
        ]);

        Category::create([
            'image' => 'https://www.shipbob.com/au/wp-content/uploads/sites/33/2022/07/PRODUCT-RANGE.jpg',
            'thumbnail' => NULL,
            'cat_ust' => $cocuk->id,
            'name' => 'Çocuk Pantolon',
            'content' => 'Çocuk Pantolonlar',
            'status' => '1'
        ]);
    }
}
