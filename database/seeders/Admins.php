<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =[
                'name'=>'Mohamed147',
                'email'=>'Mohamedhesham695@gmail.com',
                'password'=>Hash::make('Mo1472020#'),
        ];
        \App\Models\Admin::create($array);
    }
}
