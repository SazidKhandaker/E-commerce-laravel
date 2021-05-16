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
        DB::table('products')->insert([

            [
                'name' => 'Love-Box',
                'price' => 150,
                'category' => 'Card',
                'description' => "It is a beautiful card ",
                'gallery' => "https://www.mynameart.com/pics/especially-for-you-love-greeting-cards.jpg"
            ],
            [
                'name' => 'Opp Mobile',
                'price' => 25000,
                'category' => 'Mobile',
                'description' => "It is a smartphone. it has 4 gb ram and rom 32 gb.camera 14px both ",
                'gallery' => "https://i.pinimg.com/564x/54/f8/c7/54f8c7bf57fd8cb515c406518561af46.jpg"
            ],

            [
                'name' => 'Lg Mobile',
                'price' => 2100,
                'category' => 'Mobile',
                'description' => "It is a smartphone. it has 3 gb ram and rom 32 gb.camera 12 fornt px and back 10 px ",
                'gallery' => "https://i.gadgets360cdn.com/products/large/lg-w41-pro-378x800-1613982892.jpg?downsize=*:420&output-quality=80"
            ],
            [
                'name' => 'Candy',
                'price' => 300,
                'category' => 'Chocolate',
                'description' => "Sugger 10%.Test very good. Round shape  ",
                'gallery' => "https://st.depositphotos.com/1064024/3289/i/950/depositphotos_32891271-stock-photo-mixed-colorful-fruit-bonbon.jpg"
            ],
            [
                'name' => 'Dairy Milk',
                'price' => 450,
                'category' => 'Chocolate',
                'description' => "Test very good. soft and square  shape  ",
                'gallery' => "https://bazaardelivery.com/software/asset/image/product_image/4aa93f4f163b7102b9e209b5e0d4727c.jpg"
            ],
            [
                'name' => 'R600a Refrigerant',
                'price' => 30000,
                'category' => 'Refrigerant',
                'description' => "Frame Less Door.Key & Lock Interior Light ",
                'gallery' => "https://www.butterflygroupbd.com/media/catalog/product/cache/65c39cc83905c3b1d2d2bf926bb9de08/e/c/eco_218_liter_frame_less_glass_door_purple_1.jpg"
            ],
            [
                'name' => 'D-15 Tv',
                'price' => 16000,
                'category' => 'TV',
                'description' => "It is a smart Tv.This is 36 inches and slim body",
                'gallery' => "https://image.shutterstock.com/image-photo/4k-monitor-isolated-on-white-260nw-357968483.jpg"
            ],
            [
                'name' => 'Lg Tv',
                'price' => 26000,
                'category' => 'TV',
                'description' => "It is a smart Tv.This is 36 inches and slim body.it is 2k Tv",
                'gallery' => "https://static.toiimg.com/photo/54419295/Crown-CT3200-32-inch-LED-Full-HD-TV.jpg"

            ],
            [
                'name' => 'Western Kurti',
                'price' => 2000,
                'category' => 'Dress',
                'description' => "The dress is very soft and length 44 and body 38.",
                'gallery' => "https://cdn.shopify.com/s/files/1/0932/1794/products/HHH061_NesliNapDress_LightBlueGlitterCheck_A_grande.jpg?v=1612806814"
            ],
            [
                'name' => 'Sleavless Kurti',
                'price' => 2500,
                'category' => 'Dress',
                'description' => "Western dress and length 42 and body 36.",
                'gallery' => "https://cdn.shopify.com/s/files/1/0011/9783/4252/products/20_375a8763-f5d7-4184-a352-4523ef713733.jpg?v=1576267132"
            ],
            [
                'name' => 'Lenvo Headphone',
                'price' => 1950,
                'category' => 'Headphone',
                'description' => "Bluetooth headphone.charge can hold 22 hours.area range 100m",
                'gallery' => "https://diamu.com.bd/wp-content/uploads/2020/11/Lenovo-HD200-Headphone-1.jpg"
            ],
            [
                'name' => 'Red Shirt',
                'price' => 2760,
                'category' => 'Dress',
                'description' => "Chest -42 and length-34",
                'gallery' => "https://cdn11.bigcommerce.com/s-pkla4xn3/images/stencil/1280x1280/products/11753/114418/2018-Fashion-New-Male-Shirt-Long-Sleeve-Mens-Clothes-Oblique-Button-Dress-Shirts-Mandarin-Collar-Men__02469.1574244136.jpg?c=2"
            ],
            [
                'name' => 'Ear Phone',
                'price' => 270,
                'category' => 'Headphone',
                'description' => "Earphone.charge cable 4.2mm",
                'gallery' => "https://www.lenovo.com/medias/GXD0S50936-01-500x400.png?context=bWFzdGVyfHJvb3R8MzA3Mjd8aW1hZ2UvcG5nfGg4MC9oNDQvMTEwNTQ3ODE0OTczNzQucG5nfDYwOGEwOThjYTBiMWFhZjJhYWQ0NzQyZTBiZjk1Y2U3N2FlYWYwMmRjN2MxNzM5M2EwOTk0ODdlM2EyODUyZDQ"
            ],
            [
                'name' => 'Blue Shirt',
                'price' => 2200,
                'category' => 'Dress',
                'description' => "length-38 and chest 44",
                'gallery' => "https://static-01.daraz.com.bd/p/55e0a90be531e55740dba7b877c04cbe.jpg"
            ],
            [
                'name' => 'Pant',
                'price' => 2700,
                'category' => 'Dress',
                'description' => "length-38 and west 36",
                'gallery' => "https://static-01.daraz.com.bd/p/aed1c8eb9703de1bc648c01e23582902.jpg"
            ],
            [
                'name' => 'Ladies Bag',
                'price' => 900,
                'category' => 'Bag',
                'description' => "Ladies bag.Very soft .waterproof",
                'gallery' => "https://www.prada.com/content/dam/pradanux_products/1/1BD/1BD228/2BB0F0046/1BD228_2BB0_F0046_V_OJN_SLF.png"
            ],
            [
                'name' => 'Carry Bag',
                'price' => 1500,
                'category' => 'Bag',
                'description' => "Carry  bag.Very strong .waterproof",
                'gallery' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbDspKbqzQYIGN6jDPat2TJ4jGCdwElMDIhQ&usqp=CAU"
            ],

            [
                'name' => 'Air -Fan',
                'price' => 1500,
                'category' => 'Fan',
                'description' => "Very cool fan.Give cool air",
                'gallery' => "https://upload.wikimedia.org/wikipedia/commons/1/17/Ventilatore_a_soffitto_%283%29.png"
            ],
            [
                'name' => 'I-Phone Mobile',
                'price' => 90000,
                'category' => 'Mobile',
                'description' => "It is smart-phone. iPhone 12 has a 6.1-inch1 all-screen Super Retina XDR display.",
                'gallery' => "https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-12-r1.jpg"
            ],
            [
                'name' => 'Travel- Bag',
                'price' => 1860,
                'category' => 'Bag',
                'description' => "Back side bag.Very strong .waterproof",
                'gallery' => "https://staticimg.titan.co.in/Fastrack/Catalog/A0723NRD01_1.jpg?pView=listing"

            ],
        ]);


    }
}
