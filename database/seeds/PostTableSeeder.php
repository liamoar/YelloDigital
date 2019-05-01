<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Factory::create();

//       $random_Date = date("d.m.Y", $timestamp );

       $data = [];
       for($i= 1; $i<= 5; $i++){
         $image = "Post_Image_" . rand(1,5).".jpg";
         $timestamp = rand( strtotime("Feb 01 2019"), strtotime("Apr 20 2019"));
         $date = date("Y-m-d H:i:s", $timestamp);
         $data[] = [
           'user_id' => rand(1,3),
           'title' => $faker->sentence(rand(4,8)),
           'exerpt' =>$faker->text(rand(250,300)),
           'body'  =>$faker->paragraph(rand(20,40), true),
           'slug' =>$faker->slug(),
           'cover_image'=>rand(0,1) == 1 ? $image : NULL,
           'created_at'=>$date,
           'updated_at'=>$date,
         ];
       }
       \App\Post::truncate();
      foreach($data as $d){
        \App\Post::create($d);
      }


    }
}
