<?php

use Illuminate\Database\Seeder;

class UserAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user 1
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'admin@astrowebstudio.com',
            'password' => Hash::make('astroboy9'),
            'verified' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('user_details')->insert([
            'title' => 'Super Admin',
            'location' => 'Seoul, Korea & Indonesia',
            'education' => '',
            'description' => 'Astroweb Studio.',
            'experience' => 'Astroweb Studio.',
            'phone' => '',
            'birthday' => null,
            'birthday_string'=> '',
            'user_id' => 1,
            'display' => 0,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 1,
            'imageable_id' => 1, 
            'imageable_type' => 'App\User',
            'option' => 1,
            'info' => 'Profile Picture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
    }
}
