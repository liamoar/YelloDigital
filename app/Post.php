<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // public function user()
    // {
    //   return $this->belongsTo('App\User');
    // }

    public function userss(){
      return $this->belongsTo('App\User','user_id','id');
    }

   //bade ma use hunxa imageurl vanera
    public function getImageUrlAttribute($value)
    {
      $imageurl = "";

      if(!is_null($this->cover_image)){
        $imagePath = public_path() ."/img/" .$this->cover_image;
        if(file_exists($imagePath)) $imageurl = asset("img/".$this->cover_image);
      }
      return $imageurl;
    }
}
