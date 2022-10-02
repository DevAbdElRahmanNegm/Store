<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Contact::class,
            About::class,
            Users::class,
            Admins::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
