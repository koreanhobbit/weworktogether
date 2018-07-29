<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WeWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user 2
        DB::table('users')->insert([
            'name' => 'Thanet Uttamavedin',
            'email' => 'thanet@gmail.com',
            'password' => Hash::make('password'),
            'verified' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 7,
            'user_id' => 2,
        ]);

        DB::table('user_details')->insert([
            'title' => 'Representative Partner (CEO)',
            'location' => 'Bangkok, Thailand',
            'education' => 'Master Degree from  Preston Univ. in US',
            'description' => 'All together, more than 12 years of dynamic and progressive experience in Management, Marketing, Event organizing, Brand building, CRM, PR., International Business, Trading, Real Estate, and Building Contraction. Marketing chief of various fields in different industries.',
            'experience' => 'Branding Marketing for Thai beer, Domestic & International Marketing for Various fields of Automobile, Tea, Electronics and Living goods.',
            'phone' => '',
            'birthday' => null,
            'birthday_string'=> '',
            'user_id' => 2,
            'display' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 2,
            'imageable_id' => 2, 
            'imageable_type' => 'App\User',
            'option' => 1,
            'info' => 'Profile Picture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);  

        //user 3
        DB::table('users')->insert([
            'name' => 'Chinnatat Woonsanongkij (Kong)',
            'email' => 'chinnatat@gmail.com',
            'password' => Hash::make('password'),
            'verified' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 7,
            'user_id' => 3,
        ]);

        DB::table('user_details')->insert([
            'title' => 'Board Partner',
            'location' => 'Thailand',
            'education' => 'Bachelor’s Degree from Assumption Univ. in Bangkok',
            'description' => 'Performed administrative and strategic duties in assistance to the Managing Director. Utilized advanced inside sales techniques to develop the    foreign market and enhance effective business relationships with foreign customers.',
            'experience' => 'Develop new projects & potential products as customer’s request.',
            'phone' => '',
            'birthday' => null,
            'birthday_string' => '',
            'user_id' => 3,
            'display' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 3,
            'imageable_id' => 3, 
            'imageable_type' => 'App\User',
            'option' => 1,
            'info' => 'Profile Picture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        //user 4
        DB::table('users')->insert([
            'name' => 'Patchaya Khiaophan (Patty)',
            'email' => 'patchaya@gmail.com',
            'password' => Hash::make('password'),
            'verified' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 7,
            'user_id' => 4,
        ]);

        DB::table('user_details')->insert([
            'title' => 'Local partner',
            'location' => 'Thailand',
            'education' => 'Master’s Degree from Assumption Univ. in Bangkok',
            'description' => 'Performed Inbound & Outbound to find customers and marketing plan to increase sale volume. Import raw materials and arrange to factories and cooperate with factories fulfilled  relationships with foreign customers.',
            'experience' => 'Developing and International Sales for Beverages & Snacks  Relationship with Public and Foreign companies.',
            'phone' => '',
            'birthday' => null,
            'birthday_string' => '',
            'user_id' => 4,
            'display' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 4,
            'imageable_id' => 4, 
            'imageable_type' => 'App\User',
            'option' => 1,
            'info' => 'Profile Picture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        //user 5
        DB::table('users')->insert([
            'name' => 'Jay Son',
            'email' => 'jay@gmail.com',
            'password' => Hash::make('password'),
            'verified' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 7,
            'user_id' => 5,
        ]);

        DB::table('user_details')->insert([
            'title' => 'Chief Partner / Board Member',
            'location' => 'Seoul, Korea',
            'education' => 'Master Degree from  Boston Univ. in US',
            'description' => 'Jay began his career more than 20 years ago and has since worked at diverse companies & various fields of marketing experiences. In 2017, his entrepreneurial spirit took over and he dreamed a Bangkok startup.  At WW2, He’s leading the almost 10 projects given him inspiration, and communicate with people who eager to find new networks. You can catch him waving with both hands when you get in his place of We Work Together. This is a sign of his excitement being demonstrated to its fullest. Just show your smile and work together!!',
            'experience' => 'Developing & Marketing New Brand for snacks, Beverages  International Trading for various fields of food and Living goods.',
            'phone' => '',
            'birthday' => null,
            'birthday_string' => '',
            'user_id' => 5,
            'display' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 5,
            'imageable_id' => 5, 
            'imageable_type' => 'App\User',
            'option' => 1,
            'info' => 'Profile Picture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        //user 6
        DB::table('users')->insert([
            'name' => 'Eric Hsieh',
            'email' => 'eric@gmail.com',
            'password' => Hash::make('password'),
            'verified' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 7,
            'user_id' => 6,
        ]);

        DB::table('user_details')->insert([
            'title' => 'Regional Partner',
            'location' => 'Shanghai, China & Ho chi minh City, Vietnam',
            'education' => '',
            'description' => 'Specially, He is Taiwanese who has a big family living in Southern area of Vietnam and they have a huge island for coconuts and factories for them. Eric, After graduation of university in California, got back to the new location for his business. After settling down his business,  he realize to develop new type of coconuts. Still developing with labs and join WW2 to extend his networks.',
            'experience' => 'Everything about Coconut business, Developing new brands   International Trading for raw materials.',
            'phone' => '',
            'birthday' => null,
            'birthday_string' => '',
            'user_id' => 6,
            'display' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 6,
            'imageable_id' => 6, 
            'imageable_type' => 'App\User',
            'option' => 1,
            'info' => 'Profile Picture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);


        //user 7
        DB::table('users')->insert([
            'name' => 'Kevin Lai',
            'email' => 'kevin@gmail.com',
            'password' => Hash::make('password'),
            'verified' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 7,
            'user_id' => 7,
        ]);

        DB::table('user_details')->insert([
            'title' => 'Local Partner',
            'location' => 'Vietnam & Taiwan',
            'education' => 'Bachelor Degree from Shih Chien University, Taiwan.',
            'description' => 'After graduation, he’s been worked in fashion items in Taiwan and Vietnam, and join us with various items for worldwide. Imported clothing from China to Vietnam, selling to Korean Clients. An interpreter for Korean and Taiwan company in Vietnam, work on a piecework basis. Whole sales of girls fashion clothing for short period in Korea.',
            'experience' => 'Develop new projects for Living goods & International trade for raw materials.',
            'phone' => '',
            'birthday' => null,
            'birthday_string' => '',
            'user_id' => 7,
            'display' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 7,
            'imageable_id' => 7, 
            'imageable_type' => 'App\User',
            'option' => 1,
            'info' => 'Profile Picture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        //user 8
        DB::table('users')->insert([
            'name' => 'Ferry Ferdinal',
            'email' => 'ferry@astrowebstudio.com',
            'password' => Hash::make('allahdalamdiriku1!'),
            'verified' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 7,
            'user_id' => 8,
        ]);

        DB::table('user_details')->insert([
            'title' => 'Local Partner',
            'location' => 'Seoul, Korea & Indonesia',
            'education' => 'Master in Economics Yonsei University Korea.',
            'description' => 'Ferry is a serial entrepreneurs. Started several startups in Korea and Indonesia. Now focusing in export and import from Korea and Southeast Asia Countries especially Indonesia.',
            'experience' => 'Working for more than 11 years in Ministry of Finance of Indonesia and have vast of connection startup and big companies in Indonesia and Korea.',
            'phone' => '',
            'birthday' => null,
            'birthday_string'=> '',
            'user_id' => 8,
            'display' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 8,
            'imageable_id' => 8, 
            'imageable_type' => 'App\User',
            'option' => 1,
            'info' => 'Profile Picture',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('sosmeds')->insert([
            'user_id' => 8,
            'social_media_type_id' => 1,
            'value' => 'ferry.ferdinal',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('sosmeds')->insert([
            'user_id' => 8,
            'social_media_type_id' => 2,
            'value' => 'ferryferdinal',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
    }
}
