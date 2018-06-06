<?php

use Illuminate\Database\Seeder;

class ServicePoint extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_points')->insert([
        	'description' => 'Experience Guides',
        	'slug' => 'experienceguides',
        	'show' => '1',
        	'service_id' => '1',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Fluent in Local Languages',
        	'slug' => 'fluent',
        	'show' => '1',
        	'service_id' => '1',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Tourist Information',
        	'slug' => 'touristinformation',
        	'show' => '1',
        	'service_id' => '1',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Flexible Hours',
        	'slug' => 'flexiblehours',
        	'show' => '1',
        	'service_id' => '1',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Experience Guides',
        	'slug' => 'experienceguides2',
        	'show' => '1',
        	'service_id' => '2',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Fluent in Local Languages',
        	'slug' => 'fluent2',
        	'show' => '1',
        	'service_id' => '2',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Registration Information',
        	'slug' => 'registerinformation',
        	'show' => '1',
        	'service_id' => '2',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Registration Form',
        	'slug' => 'registrationform',
        	'show' => '1',
        	'service_id' => '2',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Information of Housing',
        	'slug' => 'housinginfo',
        	'show' => '1',
        	'service_id' => '2',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Scholarship Information',
        	'slug' => 'scholarshipinformation',
        	'show' => '1',
        	'service_id' => '2',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Experience Guides',
            'slug' => 'experienceguides3',
        	'show' => '1',
        	'service_id' => '3',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Fluent in Local Languages',
            'slug' => 'fluent3',
        	'show' => '1',
        	'service_id' => '3',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Assistency during treatments',
        	'slug' => 'assistencyduringtreatments',
        	'show' => '1',
        	'service_id' => '3',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Hospitals Information',
        	'slug' => 'hospitalsinformation',
        	'show' => '1',
        	'service_id' => '3',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Registration Forms',
        	'slug' => 'registrationforms',
        	'show' => '1',
        	'service_id' => '3',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Sworn Translators',
        	'slug' => 'sworntranslators',
        	'show' => '1',
        	'service_id' => '4',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Academic paper translation',
        	'slug' => 'academicpapertranslation',
        	'show' => '1',
        	'service_id' => '4',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Affordable Price',
        	'slug' => 'affordable',
        	'show' => '1',
        	'service_id' => '4',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Sent to Hotel',
        	'slug' => 'senttohotel',
        	'show' => '1',
        	'service_id' => '5',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Transportation Information',
        	'slug' => 'transportationinformation',
        	'show' => '1',
        	'service_id' => '5',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        DB::table('service_points')->insert([
        	'description' => 'Communication Facilities',
        	'slug' => 'communicationfacilities',
        	'show' => '1',
        	'service_id' => '5',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

    }
}
