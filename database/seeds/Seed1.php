<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class Seed1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $temp = [['name'=>'Electromenager'], ['name'=>'Hicking']];
        Category::insert($temp);

        $temp = [['name'=>'Four','cat_id'=>1,'image'=>'images/electro1.jpeg'],
         ['name'=>'Micro onde','cat_id'=>1,'image'=>'images/electro2.jpeg'],
         ['name'=>'Machine à laver','cat_id'=>1,'image'=>'images/electro3.jpeg'],
         ['name'=>'Sac à dos','cat_id'=>2,'image'=>'images/hick1.jpeg'],
         ['name'=>'Tente','cat_id'=>2,'image'=>'images/hick2.jpeg'],
         ['name'=>'Montre','cat_id'=>2,'image'=>'images/hick3.jpeg']
        ];

        Product::insert($temp);
    }
}
