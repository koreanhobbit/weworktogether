<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
        	'name' => 'Tourist Guide',
        	'short_desc' => 'Need a guide? Fluent in local?',
        	'description'=> 'We provide tourist guides from students of your fellow countrymen or tourist guides that fluent with your language.',
        	'icon'=> 'street-view',
        	'type'=> 0,
            'highlight' => 1,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);

        DB::table('services')->insert([
        	'name' => 'Education Guide',
        	'short_desc' => 'Study Abroad? Learning Foreign Language?',
        	'description'=> 'We provide assistance and information for those who wish to continue their education and learn new foreign language in the destination country.',
        	'icon'=> 'book',
        	'type'=> 0,
            'highlight' => 1,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);

		DB::table('services')->insert([
        	'name' => 'Medical Guide',
        	'short_desc' => 'Medical Checkup? Medical Consultation, Surgery?',
        	'description'=> 'We provide assistance and information for those who wish to make medical visits to the destination country.',
        	'icon'=> 'heartbeat',
        	'type'=> 0,
            'highlight' => 1,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);

        DB::table('services')->insert([
        	'name' => 'Translation services',
        	'short_desc' => 'Translation job?',
        	'description'=> 'We provide document or others translation services using our translator.',
        	'icon'=> 'book',
        	'type'=> 0,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);

        DB::table('services')->insert([
        	'name' => 'Airport Pickup',
        	'short_desc' => 'Dont know the way? Airport Pickup?',
        	'description'=> 'We provide airport pick up and guide services to your hotel.',
        	'icon'=> 'plane',
        	'type'=> 0,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);

        DB::table('services')->insert([
        	'name' => 'Car Rental',
        	'short_desc' => 'Need a car/bus? Need a driver?',
        	'description'=> 'We provide bus and car rental with driver for you who need vehicles during your visit.',
        	'icon'=> 'bus',
        	'type'=> 0,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);

        DB::table('services')->insert([
        	'name' => 'Souvenir/Gift',
        	'short_desc' => 'Buying gifts? Busy schedule?',
        	'description'=> 'We provide souvenirs and gifts for you which can be ordered easily and delivered directly to your hotel front door!',
        	'icon'=> 'gift',
        	'type'=> 0,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);

        DB::table('services')->insert([
        	'name' => 'Simcard/Internet Service',
        	'short_desc' => 'Need a simcard? Internet Connection?',
        	'description'=> 'We provide simcard and internet service connection in your destination country.',
        	'icon'=> 'wifi',
        	'type'=> 0,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);     

		DB::table('services')->insert([
        	'name' => 'Business Connection',
        	'short_desc' => 'Open a business abroad? Find a distributor?',
        	'description'=> 'We provide consultancy and information services to open business in destination country. We also provide virtual office services for those of you who want to open a branch overseas.',
        	'icon'=> 'money',
        	'type'=> 1,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);

        DB::table('services')->insert([
        	'name' => 'Accomodation',
        	'short_desc' => 'Backpacker? Cheap hotel?',
        	'description'=> 'We provide services and cheap lodging information for you backpacker and adventurer.',
        	'icon'=> 'bed',
        	'type'=> 0,
        	'created_at'=> new DateTime(),
        	'updated_at'=> new DateTime()
        ]);  

         DB::table('services')->insert([
            'name' => 'Festival/Concert Tickets',
            'short_desc' => 'Concert/Festival/Amusement parks Tickets?',
            'description'=> 'We provide services and information to get tickets for music concerts, festivals and admission tickets in the destination country.',
            'icon'=> 'ticket',
            'type'=> 0,
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()
        ]);
    }
}
