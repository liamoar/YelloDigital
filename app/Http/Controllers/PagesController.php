<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{

    protected $limit = 3;
    public function dashboard(){
      $posts = Post::with('userss')->orderBy('created_at','desc')->paginate($this->limit);

      return view('/Frontend.pages.dashboard',compact('posts'));
    }

    public function about(){
      $title= 'About us';
      return view('Frontend.pages.about')->with('About_title', $title);
    }

    public function service(){
      return view('Frontend.pages.service');

    }


}
