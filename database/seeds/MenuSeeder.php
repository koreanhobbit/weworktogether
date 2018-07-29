<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
        	'name' => 'testimony',
        	'show' => 0,
        	'themesetting_id' => 1,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
        ]);

        DB::table('menus')->insert([
        	'name' => 'partner',
        	'show' => 0,
        	'themesetting_id' => 1,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
        ]);

        DB::table('menus')->insert([
            'name' => 'team',
            'show' => 1,
            'themesetting_id' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
    }
}
