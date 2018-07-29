<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //project 1
        DB::table('products')->insert([
        	'name' => 'Crayon Shinchan',
        	'slug' => 'crayon-shinchan',
        	'company' => 'Daewon Media',
        	'product_category_id' => '2',
        	'description' => '<h1>Ongoing Project for Licensing</h1>
<p><img src="http://wework.test/images/projects/Picture4.png" alt="" /></p>',
        	'summary' => '',
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 9,
            'imageable_id' => 1, 
            'imageable_type' => 'App\Product',
            'option' => 1,
            'info' => 'featured image',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        //project 2
        DB::table('products')->insert([
            'name' => 'Line Friends',
            'slug' => 'line-friends',
            'company' => 'Naver Corp.',
            'product_category_id' => '2',
            'description' => '<h1>Ongoing Projects for Licensing</h1>
<p><img src="http://wework.test/images/projects/Picture5.png" alt="" /></p>',
            'summary' => '',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 10,
            'imageable_id' => 2, 
            'imageable_type' => 'App\Product',
            'option' => 1,
            'info' => 'featured image',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        //project 3
        DB::table('products')->insert([
            'name' => 'We Bear Bears',
            'slug' => 'we-bear-bears',
            'company' => 'Cartoon Networks (YBM)',
            'product_category_id' => '2',
            'description' => '<h1>Ongoing Project for Licensing</h1>
<p><img src="http://wework.test/images/projects/Picture7.png" alt="" /></p>',
            'summary' => '',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 11,
            'imageable_id' => 3, 
            'imageable_type' => 'App\Product',
            'option' => 1,
            'info' => 'featured image',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        //project 4
        DB::table('products')->insert([
            'name' => 'Son Loves',
            'slug' => 'son-loves',
            'company' => 'Son Loves',
            'product_category_id' => '2',
            'description' => '<h1>The original brand for Food that we&rsquo;ve released from 2017.</h1>
<p><img src="http://wework.test/images/projects/Picture8.png" alt="" /></p>',
            'summary' => '',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 13,
            'imageable_id' => 4, 
            'imageable_type' => 'App\Product',
            'option' => 1,
            'info' => 'featured image',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        //project 5
        DB::table('products')->insert([
            'name' => 'U Beer',
            'slug' => 'u-beer',
            'company' => 'Boon Rawd Corp.',
            'product_category_id' => '3',
            'description' => '<h1>Project for Imported Beer (Korea)</h1>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://wework.test/images/projects/Picture9.png" alt="" width="300" height="300" /></p>
<p style="text-align: left;">1. Products Specification : U Beer</p>
<ul style="text-align: left;">
<li>24pk x 12oz. (355ml) / 6pk x 490ml (Can)</li>
<li>Alcohol : 5&deg;</li>
</ul>
<p style="text-align: left;">2. Manufacturer : Boon Rawd Corp.</p>
<p style="text-align: left;">3. Distributor : Singha Beer</p>
<p style="text-align: left;">4. The Launching networks : Emart / Emart Traders / Emart24</p>
<p style="text-align: left;">5. Expenses : Logistic Fee $0.5 &amp; Storage Fee $0.1 / 1pk (24ea)&nbsp;</p>
<p style="text-align: left;">6. Tax : Tafiff 8.5% Alcohole taxes 70%, Educational taxes 30%, VAT 10%&nbsp;</p>',
            'summary' => '1. Products Specification : U Beer 2. Manufacturer : Boon Rawd Corp. 3. Distributor : Singha Beer...',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        DB::table('imageables')->insert([
            'image_id' => 14,
            'imageable_id' => 5, 
            'imageable_type' => 'App\Product',
            'option' => 1,
            'info' => 'featured image',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
    }
}
