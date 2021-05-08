<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(


            [
                'name'=>'Love-Box',
                'price'=>'150 Bdt',
                'category'=>'Card',
                'description'=>"It is a beautiful card ",
                'gallery'=>"https://www.pexels.com/photo/high-angle-shot-of-laptop-and-smartphone-257923/"



            ],
            [
                'name'=>'Opp mobile',
                'price'=>'25000 Bdt',
                'category'=>'Mobile',
                'description'=>"It is a smartphone. it has 4 gb ram and rom 32 gb.camera 14px both ",
                'gallery'=>"https://www.pexels.com/photo/high-angle-shot-of-laptop-and-smartphone-257923/"



            ]
        );

    }
}
