<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo Mobile',
            'price'=>"400",
            'description'=>"a smartphone with 6gb ram, designed for excellence in mobile gaming.",
            'category'=>"Mobile",
                'gallery'=>"https://images-na.ssl-images-amazon.com/images/I/71wPwmxo2NL._SL1500_.jpg"
            ],
            [
                'name'=>'Samsung Mobile',
                'price'=>"550",
                'description'=>"a smartphone with 8gb, just the allround device for your day to day intensive use.",
                'category'=>"Mobile",
                'gallery'=>"https://www.pakmobizone.pk/wp-content/uploads/2020/02/Samsung-GALAXY-NOTE-10-Lite-1png.jpg"
            ],
            [
                'name'=>'Iphone X',
                'price'=>"1600",
                'description'=>"Your basic overpriced apple product, good for instagram and facebook uses",
                'category'=>"Mobile",
                'gallery'=>"https://tweakers.net/i/SrOfYWms2XtjIGaH8M6FzTSxjas=/i/2002468080.jpeg"
            ],
            [
                'name'=>'Nokia Mobile',
                'price'=>"150",
                'description'=>"3310 beats brick, if you want an indestructible phone this is the device for you",
                'category'=>"Mobile",
                'gallery'=>"https://i.guim.co.uk/img/media/30ae6f657de5843fa3dfc463c8ecd317855d905e/171_0_1667_1000/master/1667.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=51da1c5eac08485557dfff1f396bd0fc"
            ],
            [
                'name'=>'Blackberry Mobile',
                'price'=>"20",
                'description'=>"Just don't buy this really...",
                'category'=>"Mobile",
                'gallery'=>"https://media.s-bol.com/NPrGKBrpk8K/878x1200.jpg"
            ],
            [
                'name'=>'Huawei Mobile',
                'price'=>"250",
                'description'=>"if you value performance over privacy this phone is made for you!",
                'category'=>"Mobile",
                'gallery'=>"https://www.powerplanetonline.com/cdnassets/huawei_mate_30_pro_8gb_256gb_ds_plata_07_ad_l.jpg"
            ],


        ]);
    }
}
