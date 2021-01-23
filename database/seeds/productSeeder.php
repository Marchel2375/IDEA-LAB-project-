<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
         ['product_type_id' => 1, 'name' => 'Sagitarrius Single Bed', 'image' => 'photos\singlebed.jpg', 'stock' => 2, 'price' => 900, 'description' => '1-bed and 2 pillows set. Firm structure and High quality material will ensure your comfort for the rest of the night.'],
         ['product_type_id' => 1, 'name' => 'Golden Sagitarrius Double Bed', 'image' => 'photos\doublebed.jpg', 'stock' => 3, 'price' => 1500, 'description' => '1-large bed and 2 pillows set. Expanding from our previous model, this model will give you relaxing experience on the night with its soft texture and strong durability of its material will increase the longevity of its usages.'],
         ['product_type_id' => 1, 'name' => 'Wish Upon a Star Queen Bed', 'image' => 'photos\queenbed.jpg', 'stock' => 1, 'price' => 2000, 'description' => '1-large queen sized bed and 2 pillows set. Larger and more comfortable, giving you sweet dreams and no nightmares using this bed !'],
         ['product_type_id' => 1, 'name' => 'Digital World King Bed', 'image' => 'photos\DigitalBed.jpg', 'stock' => 1, 'price' => 2200, 'description' => '1-large king sized bed. Surfing the Internet with all relaxation.'],
         ['product_type_id' => 1, 'name' => 'Thrones King Bed', 'image' => 'photos\kingbed.jpg', 'stock' => 3, 'price' => 2500, 'description' => '1-large king sized bed. Be the king of your house with supremacy of this bed'],
         ['product_type_id' => 2, 'name' => 'Desk 2049', 'image' => 'photos\desk1.jpg', 'stock' => 2, 'price' => 1000, 'description' => '145x110 cm sized desk only. Granting you extraordinary efficiency as a work desk, while sporting elegant and futuristic design as well.'],
         ['product_type_id' => 2, 'name' => 'Classic Desk', 'image' => 'photos\desk2.jpg', 'stock' => 1, 'price' => 700, 'description' => '112x99cm sized desk, compact yet simple design.'],
         ['product_type_id' => 2, 'name' => 'Royal Desk', 'image' => 'photos\desk3.jpg', 'stock' => 3, 'price' => 1000, 'description' => '125x105cm sized desk, with elegant and british-royalty themed design'],
         ['product_type_id' => 2, 'name' => 'Wood Desk', 'image' => 'photos\desk4.jpg', 'stock' => 1, 'price' => 1000, 'description' => '140x106cm sized desk, cheap yet functional wood-material based desk'],
         ['product_type_id' => 2, 'name' => 'Steel Desk', 'image' => 'photos\desk5.jpg', 'stock' => 3, 'price' => 1000, 'description' => '145x107cm sized desk, stainless steel to ensure longevity of usage.'],
         ['product_type_id' => 3, 'name' => 'Royal Wingback', 'image' => 'photos\chair1.jpg', 'stock' => 4, 'price' => 600, 'description' => 'Wool Material Chair. Exquisite design and material along with foothold surely will give you a good rest after work !'],
         ['product_type_id' => 3, 'name' => 'Office Backcracker', 'image' => 'photos\chair2.jpg', 'stock' => 6, 'price' => 400, 'description' => 'Synthetic Material Chair ideal for office usage'],
         ['product_type_id' => 3, 'name' => 'Wooden Chair', 'image' => 'photos\chair3.jpg', 'stock' => 2, 'price' => 300, 'description' => 'Wooden Chair ensure stability and balance'],
         ['product_type_id' => 3, 'name' => 'Geek Chair', 'image' => 'photos\chair4.jpg', 'stock' => 3, 'price' => 800, 'description' => 'In Built Speaker will give a whole new gaming experiences.'],
         ['product_type_id' => 3, 'name' => 'A Chair', 'image' => 'photos\chair5.jpg', 'stock' => 5, 'price' => 150, 'description' => 'Cheap but functional, this one chair is.'],
         ['product_type_id' => 4, 'name' => 'A Table', 'image' => 'photos\table1.jpg', 'stock' => 1, 'price' => 800, 'description' => 'Iron-based table. Simple design, Simple Usage, that is all.'],
         ['product_type_id' => 4, 'name' => 'Dine In', 'image' => 'photos\table2.jpg', 'stock' => 2, 'price' => 1000, 'description' => 'Large table to use, could accomodate around 8 person.'],
         ['product_type_id' => 4, 'name' => 'Table of Privacy', 'image' => 'photos\table3.jpg', 'stock' => 4, 'price' => 600, 'description' => 'Small table with around comfortable space for 2-person.'],
         ['product_type_id' => 4, 'name' => 'Unbreakable Teable', 'image' => 'photos\table4.jpg', 'stock' => 1, 'price' => 800, 'description' => 'Medium Sized table with in-built tea holder will ensure ease of use for afternoon tea.'],
         ['product_type_id' => 4, 'name' => 'Royal Teable', 'image' => 'photos\table5.jpg', 'stock' => 2, 'price' => 700, 'description' => 'Iron-based table. Simple design, Simple Usage, that is all.'],
         ['product_type_id' => 5, 'name' => 'Sofa 4 Chill', 'image' => 'photos\sofa1.jpg', 'stock' => 5, 'price' => 1800, 'description' => 'Three Seater Sofa to chill.'],
         ['product_type_id' => 5, 'name' => 'PlaySofa', 'image' => 'photos\sofa2.jpg', 'stock' => 4, 'price' => 2000, 'description' => 'Three Seater sofa with built-in speaker will give ease of playing games and immerse user on experiencing it'],
         ['product_type_id' => 5, 'name' => 'Srikandi', 'image' => 'photos\sofa3.jpg', 'stock' => 5, 'price' => 1900, 'description' => 'Three seater sofa for user comfort, traditional design'],
         ['product_type_id' => 5, 'name' => 'Plus Ultra', 'image' => 'photos\sofa4.jpg', 'stock' => 3, 'price' => 2500, 'description' => 'Huge four seater sofa, ensuring multiple functionality'],
         ['product_type_id' => 5, 'name' => 'Counterpain', 'image' => 'photos\sofa5.jpg', 'stock' => 3, 'price' => 2700, 'description' => 'Heater inside the sofa will be able to give relaxation after work, and lower pain.'],
         ['product_type_id' => 6, 'name' => 'Clark Kent', 'image' => 'photos\wardrobe1.jpg', 'stock' => 5, 'price' => 1000, 'description' => 'Simple yet expansive storage to use'],
         ['product_type_id' => 6, 'name' => 'Bruce Wayne', 'image' => 'photos\wardrobe2.jpg', 'stock' => 1, 'price' => 1200, 'description' => 'Multiple Storage Choice and Combination for all the user needs'],
         ['product_type_id' => 6, 'name' => 'Ranger', 'image' => 'photos\wardrobe3.jpg', 'stock' => 2, 'price' => 700, 'description' => 'Small yet usable wardrobe'],
         ['product_type_id' => 6, 'name' => 'Wizerd', 'image' => 'photos\wardrobe4.jpg', 'stock' => 7, 'price' => 750, 'description' => 'Medium-Sized wardrobe with multiple hidden storage'],
         ['product_type_id' => 6, 'name' => 'Coding', 'image' => 'photos\wardrobe5.jpg', 'stock' => 2, 'price' => 300, 'description' => 'Small wardrobe, cheap and it is what it is.'],
         ['product_type_id' => 7, 'name' => 'Avengers Curtain', 'image' => 'photos\curtain1.jpg', 'stock' => 2, 'price' => 500, 'description' => 'Colourful curtain to use for kids room'],
         ['product_type_id' => 7, 'name' => 'Royal Curtain', 'image' => 'photos\curtain2.jpg', 'stock' => 3, 'price' => 900, 'description' => 'High Quality Material along with medieval classic design'],
         ['product_type_id' => 7, 'name' => 'Bunis', 'image' => 'photos\curtain3.jpg', 'stock' => 1, 'price' => 700, 'description' => 'Orange coloured curtain with a little bit of blue.'],
         ['product_type_id' => 7, 'name' => 'Golden Experience', 'image' => 'photos\curtain4.jpg', 'stock' => 4, 'price' => 1000, 'description' => 'Gold coloured curtain for a bit of bling'],
         ['product_type_id' => 7, 'name' => 'Phenom Curtain', 'image' => 'photos\curtain5.jpg', 'stock' => 1, 'price' => 600, 'description' => 'Dark Coloured curtain to give those extra bit of calm.'],
        ]);
    }
}
