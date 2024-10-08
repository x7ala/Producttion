<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $newsArticles = News::all(); // Retrieve all news articles
        return view('frontend.haberler', compact('newsArticles')); // Pass them to the view
    }


    public function detail($link)
    {
        $article = News::where('link',$link)->first();

        return view('frontend.haberler-detayler', compact('article'));
    }

}
