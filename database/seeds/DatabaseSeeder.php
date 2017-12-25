<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=> 'Acoustic guitar', 'alias'=> 'Acoustic-guitar'],
            ['name'=> 'Classic guitar', 'alias'=> 'Classic-guitar'],
            ['name'=> 'Electric guitar', 'alias'=> 'Electric-guitar'],
            ['name'=> 'Amplifier', 'alias'=> 'Amplifier'],
        ]);
    }
}
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=> 'GRASSROOTS LP Ebony', 'alias'=> 'GRASSROOTS-LP-Ebony', 'description'=> 'acdsxbc',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0-3.jpg', 'category_id'=> '3'],
            ['name'=> 'GRASSROOTS LP Honey Sunburst', 'alias'=> 'GRASSROOTS-LP-Honey-Sunburst', 'description'=> 'égdzh',	'price'=> '123456789', 'sale'=> '13000000',	'image'=> '0-2.jpg', 'category_id'=> '1'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0.png', 'category_id'=> '3'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0-2.jpg', 'category_id'=> '4'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0-2.jpg', 'category_id'=> '3'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0-2.jpg', 'category_id'=> '3'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0-2.jpg', 'category_id'=> '1'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0-2.jpg', 'category_id'=> '2'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '1510214908_amp_2.jpg', 'category_id'=> '4'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0-2.jpg', 'category_id'=> '1'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0-2.jpg', 'category_id'=> '1'],
            ['name'=> 'CORT AF510E-OP', 'alias'=> 'CORT-AF510E-OP', 'description'=> 'áhdf',	'price'=> '14000000', 'sale'=> '13000000',	'image'=> '0-2.jpg', 'category_id'=> '2'],

        ]);
    }
}
class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            ['name'=> '1.jpg'],
            ['name'=> '2.jpg'],
            ['name'=> '3.jpg'],
            ['name'=> '4.jpg']
        ]);
    }
}
class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            ['image'=> '1.jpg', 'product_id'=>'1'],
            ['image'=> '1.jpg', 'product_id'=>'1'],
            ['image'=> '1.jpg', 'product_id'=>'1'],
            ['image'=> '1.jpg', 'product_id'=>'1'],
        ]);
    }
}
