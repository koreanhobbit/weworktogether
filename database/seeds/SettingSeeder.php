<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
        	'name' => 'We Work Together',
        	'tagline' => 'NETWORKS FOR BUSINESS PARTNERS IN EVERYWHERE',
            'branch1' => 'BANGKOK OFFICE',
            'branch2' => 'SEOUL OFFICE',
        	'address1' => '499/57 The Centro Ladkrabang Road Ladkrabang District, Bangkok, Thailand 10520 TEL: +66 63 215 0348',
            'address2' => 'Spaces Gran Seoul 7th floor Tower1 Gran Seoul building 33 Jongro, Jongro-gu, Seoul, Korea 01359 TEL: +82 2594 5717',
            'phone' => '+82 2594 5717',
            'email1' => 'tcoolj@gmail.com',
            'email2' => 'jaythe911@gmail.com',
            'about' => 'We are looking for partners who are willing to make valuable Work Together. Wework2’s always keen on the long term goals for having specialists in worldwide.',
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
        ]);
    }
}

    