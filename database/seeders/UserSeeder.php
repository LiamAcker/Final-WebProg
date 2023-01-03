<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            # $table->id(); #member id
            # $table->string('username')->unique();
            # $table->string('email')->unique();
            # $table->string('password');
            # $table->string('phone number');
            # $table->string('address');
 
            [
                'username' => 'Member',
                'email' => 'member@gmail.com',
                'password' => 'password',
                'phone_number' => '083223',
                'address' => '12th Member St.',
                'type' => 'member'
            ],

            [
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'password',
                'phone_number' => '0232442',
                'address' => '12th Admin St.',
                'type' => 'admin'
            ]
         ]);
    }
}
