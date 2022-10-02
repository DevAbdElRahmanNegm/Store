<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class About extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =[
           'date'=>'29TH JULY, 2021',
            'country'=>'Egypt',
            'expert'=>'MARKETING',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eligendi saepe, beatae esse delectus autem placeat perferendis. Doloremque sint sit mollitia laboriosam voluptas, impedit, voluptatum, eos fugit magni recusandae laborum?',
            'image'=>'affiliate-family.png',
        ];
        \App\Models\About::create($array);
    }
}
