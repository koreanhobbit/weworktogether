<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
        	'name' => 'noimg',
        	'location' => 'images/noimg.png',
        	'size' => 12,
        	'type' => 'image/png',
        	'user_id' => 1,
        	'created_at'=> new \DateTime(),
        	'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'noimg_thumbnail',
            'location' => 'images/noimg_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'noimg_thumbnail',
            'location' => 'images/noimg.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 2
        DB::table('images')->insert([
            'name' => 'Picture1',
            'location' => 'images/team/Picture1.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Picture1_thumbnail',
            'location' => 'images/team/Picture1_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 2,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Picture1_medium',
            'location' => 'images/team/Picture1_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 2,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 3
        DB::table('images')->insert([
            'name' => 'Picture2',
            'location' => 'images/team/Picture2.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Picture2_thumbnail',
            'location' => 'images/team/Picture2_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 3,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Picture2_medium',
            'location' => 'images/team/Picture2_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 3,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 4
        DB::table('images')->insert([
            'name' => 'Picture3',
            'location' => 'images/team/Picture3.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Picture3_thumbnail',
            'location' => 'images/team/Picture3_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 4,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Picture3_medium',
            'location' => 'images/team/Picture3_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 4,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 5
        DB::table('images')->insert([
            'name' => 'Picture4',
            'location' => 'images/team/Picture4.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Picture4_thumbnail',
            'location' => 'images/team/Picture4_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 5,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Picture4_medium',
            'location' => 'images/team/Picture4_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 5,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 6
        DB::table('images')->insert([
            'name' => 'Picture5',
            'location' => 'images/team/Picture5.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Picture5_thumbnail',
            'location' => 'images/team/Picture5_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 6,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Picture5_medium',
            'location' => 'images/team/Picture5_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 6,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);


        //image 7
        DB::table('images')->insert([
            'name' => 'Picture7',
            'location' => 'images/team/Picture7.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Picture7_thumbnail',
            'location' => 'images/team/Picture7_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 7,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Picture7_medium',
            'location' => 'images/team/Picture7_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 7,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 8
        DB::table('images')->insert([
            'name' => 'Picture6',
            'location' => 'images/team/Picture6.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Picture6_thumbnail',
            'location' => 'images/team/Picture6_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 8,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Picture6_medium',
            'location' => 'images/team/Picture6_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 8,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        
        //image 9
        // DB::table('images')->insert([
        //     'name' => 'Pictureproject1',
        //     'location' => 'images/projects/Picture1.png',
        //     'size' => 12,
        //     'type' => 'image/png',
        //     'user_id' => 1,
        //     'created_at'=> new \DateTime(),
        //     'updated_at'=> new \DateTime()
        // ]);

        // DB::table('thumbnails')->insert([
        //     'name' => 'Pictureproject1_thumbnail',
        //     'location' => 'images/projects/Picture1_thumbnail.png',
        //     'size' => 12,
        //     'type' => 'image/png',
        //     'image_id' => 9,
        //     'created_at'=> new \DateTime(),
        //     'updated_at'=> new \DateTime()
        // ]);

        // DB::table('mediums')->insert([
        //     'name' => 'Pictureproject1_medium',
        //     'location' => 'images/projects/picture1_medium.png',
        //     'size' => 12,
        //     'type' => 'image/png',
        //     'image_id' => 9,
        //     'created_at'=> new \DateTime(),
        //     'updated_at'=> new \DateTime()
        // ]);

        //image 9
        // DB::table('images')->insert([
        //     'name' => 'Pictureproject2',
        //     'location' => 'images/projects/Picture2.png',
        //     'size' => 12,
        //     'type' => 'image/png',
        //     'user_id' => 1,
        //     'created_at'=> new \DateTime(),
        //     'updated_at'=> new \DateTime()
        // ]);

        // DB::table('thumbnails')->insert([
        //     'name' => 'Pictureproject2_thumbnail',
        //     'location' => 'images/projects/Picture2_thumbnail.png',
        //     'size' => 12,
        //     'type' => 'image/png',
        //     'image_id' => 9,
        //     'created_at'=> new \DateTime(),
        //     'updated_at'=> new \DateTime()
        // ]);

        // DB::table('mediums')->insert([
        //     'name' => 'Pictureproject2_medium',
        //     'location' => 'images/projects/Picture2_medium.png',
        //     'size' => 12,
        //     'type' => 'image/png',
        //     'image_id' => 9,
        //     'created_at'=> new \DateTime(),
        //     'updated_at'=> new \DateTime()
        // ]);

        //image 10
        // DB::table('images')->insert([
        //     'name' => 'Pictureproject3',
        //     'location' => 'images/projects/Picture3.png',
        //     'size' => 12,
        //     'type' => 'image/png',
        //     'user_id' => 1,
        //     'created_at'=> new \DateTime(),
        //     'updated_at'=> new \DateTime()
        // ]);

        // DB::table('thumbnails')->insert([
        //     'name' => 'Pictureproject3_thumbnail',
        //     'location' => 'images/projects/Picture3_thumbnail.png',
        //     'size' => 12,
        //     'type' => 'image/png',
        //     'image_id' => 10,
        //     'created_at'=> new \DateTime(),
        //     'updated_at'=> new \DateTime()
        // ]);

        // DB::table('mediums')->insert([
        //     'name' => 'Pictureproject3_medium',
        //     'location' => 'images/projects/Picture3_medium.png',
        //     'size' => 12,
        //     'type' => 'image/png',
        //     'image_id' => 10,
        //     'created_at'=> new \DateTime(),
        //     'updated_at'=> new \DateTime()
        // ]);

        //image 9
        DB::table('images')->insert([
            'name' => 'Pictureproject4',
            'location' => 'images/projects/Picture4.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Pictureproject4_thumbnail',
            'location' => 'images/projects/Picture4_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 9,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Pictureproject4_medium',
            'location' => 'images/projects/Picture4_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 9,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);


        //image 10
        DB::table('images')->insert([
            'name' => 'Pictureproject5',
            'location' => 'images/projects/Picture5.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Pictureproject5_thumbnail',
            'location' => 'images/projects/Picture5_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 10,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Pictureproject5_medium',
            'location' => 'images/projects/Picture5_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 10,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 11
        DB::table('images')->insert([
            'name' => 'Pictureproject6',
            'location' => 'images/projects/Picture6.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Pictureproject6_thumbnail',
            'location' => 'images/projects/Picture6_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 11,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Pictureproject6_medium',
            'location' => 'images/projects/Picture6_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 11,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 12
        DB::table('images')->insert([
            'name' => 'Pictureproject7',
            'location' => 'images/projects/Picture7.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Pictureproject7_thumbnail',
            'location' => 'images/projects/Picture7_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 12,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Pictureproject7_medium',
            'location' => 'images/projects/Picture7_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 12,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 13
        DB::table('images')->insert([
            'name' => 'Pictureproject8',
            'location' => 'images/projects/Picture8.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Pictureproject8_thumbnail',
            'location' => 'images/projects/Picture8_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 13,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Pictureproject8_medium',
            'location' => 'images/projects/Picture8_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 13,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        //image 14
        DB::table('images')->insert([
            'name' => 'Pictureproject9',
            'location' => 'images/projects/Picture9.png',
            'size' => 12,
            'type' => 'image/png',
            'user_id' => 1,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('thumbnails')->insert([
            'name' => 'Pictureproject9_thumbnail',
            'location' => 'images/projects/Picture9_thumbnail.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 14,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);

        DB::table('mediums')->insert([
            'name' => 'Pictureproject9_medium',
            'location' => 'images/projects/Picture9_medium.png',
            'size' => 12,
            'type' => 'image/png',
            'image_id' => 14,
            'created_at'=> new \DateTime(),
            'updated_at'=> new \DateTime()
        ]);
    }
}
