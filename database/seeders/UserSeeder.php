<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'fullname' => 'irvan nur',
            'username' => 'irvan',
            'phone' => '0878809999',
            'email' => 'irvannur@gmail.com',
            'gender' => 'Male',
            'age' => 19,
            'password' => Hash::make('12345')
        ]);
    }
}

// $table->string('fullname');
//             $table->string('username');
//             $table->string('phone');
//             $table->string('email');
//             $table->string('gender');
//             $table->integer('age');
//             $table->string('password');
