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
            'text_1_icon' => 'icon-truck',
            'text_1' => 'ÜCRETSIZ KARGO',
            'text_1_content' => 'Ücretsiz kargo ile ürünlerin normal satış fiyatına ek olarak ekstra bir kargo ücreti ödemek zorunda kalmazsınız. Bu da özellikle toplu alımlarda veya bütçenizi korumak istediğiniz durumlarda önemli bir avantaj sağlar.',
            'text_2_icon' => 'icon-refresh2',
            'text_2' => 'KOLAY İADE',
            'text_2_content' => 'Kolay iade politikası sayesinde, aldığınız ürünlerden memnun kalmamanız durumunda kolayca iade edebileceğinizi bilerek daha güvenli bir şekilde alışveriş yapabilirsiniz. Bu sayede denemekten çekindiğiniz ürünleri sipariş etmekte tereddüt etmezsiniz.',
            'text_3_icon' => 'icon-help',
            'text_3' => 'MÜŞTERI MEMNUNIYETI',
            'text_3_content' => 'Müşterilerinizin sorunlarını hızlı ve etkili bir şekilde çözmek, onların memnuniyetini sağlayacaktır. Memnun müşteriler, firmanızla tekrar alışveriş yapma ve sizi başkalarına tavsiye etme olasılıkları daha yüksektir.'

        ]);
    }
}
