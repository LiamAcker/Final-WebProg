<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

          #  $table->id();
          #  $table->string('image'); #gambar file
          #  $table->string('product name'); #gambar file
          ##  $table->string('description');
           # $table->float('price');
           # $table->integer('year');
 
             'image' => 'something.jpg',
             'product name' => 'Common Shirt',
             'description' => 'This is a common shirt',
             'price' => 19.12,
             'year' => 2020
         ]);
    }
}
