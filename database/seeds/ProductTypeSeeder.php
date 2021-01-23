<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            ['name' => 'Bed', 'image' => 'photos\digitalbed.jpg'],
            ['name' => 'Desk', 'image' => 'photos\desktype.jpg'],
            ['name' => 'Chair', 'image' => 'photos\chairtype.jpg'],
            ['name' => 'Table', 'image' => 'photos\tabletype.jpg'],
            ['name' => 'Sofa', 'image' => 'photos\sofatype.jpg'],
            ['name' => 'Wardrobe', 'image' => 'photos\wardrobetype.jpg'],
            ['name' => 'Curtain', 'image' => 'photos\curtaintype.jpg'],
        ]);
    }
}
