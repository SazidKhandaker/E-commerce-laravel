<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert(

       [
           'name'=>'Sazid Khandaker',
           'email'=>'sazidkh226@gmail.com',
           'password'=>Hash::make('1234')

       ],

       [
       'name'=>'Sazid Khan',
           'email'=>'sazid@gmail.com',
           'password'=>Hash::make('1234')

       ]);

    }
}
