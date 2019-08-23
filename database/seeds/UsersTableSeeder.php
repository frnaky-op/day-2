<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'demo1',
            'email' => 'demo1@worldskills.org',
            'slug' => 'demo1',
            'password' => bcrypt('demopass1'),
        ]);

        User::create([
            'name' => 'demo2',
            'email' => 'demo2@worldskills.org',
            'slug' => 'demo2',
            'password' => bcrypt('demopass2'),
        ]);
    }
}
