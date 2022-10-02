<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =[
            'email'=>'my_name@gmail.com',
            'number'=>'+000-1111-2222',
            'skype'=>'my_name',
            'facebook'=>'https://www.facebook.com/',
            'twitter'=>'https://twitter.com/',
            'gmail'=>'https://www.google.com/',

        ];
        \App\Models\Contact::create($array);
    }
}
