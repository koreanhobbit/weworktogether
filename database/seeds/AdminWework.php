<?php

use Illuminate\Database\Seeder;

class AdminWework extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin wework
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@weworktogether.com',
            'password' => Hash::make('wework9'),
            'verified' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 9,
        ]);

        DB::table('user_details')->insert([
            'title' => 'Admin',
            'location' => 'Seoul, Korea',
            'education' => '',
            'description' => 'Wework Together.',
            'experience' => 'Wework Together.',
            'phone' => '',
            'birthday' => null,
            'birthday_string'=> '',
            'user_id' => 9,
            'display' => 0,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 1,
            'imageable_id' => 9, 
            'imageable_type' => 'App\User',
            'option' => 1,
            'info' => 'Profile Picture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
    }
}
