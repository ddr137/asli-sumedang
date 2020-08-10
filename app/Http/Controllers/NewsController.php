<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class NewsController extends Controller
{
    public function index(Posts $posts) {
        $data = $posts->orderBy('created_at', 'desc')->get();
        return view('news', compact('data'));
    }

    public function isi_news($slug){
        $data = Posts::where('slug', $slug)->get();
        return view('news.isi_post', compact('data'));
    }
}
