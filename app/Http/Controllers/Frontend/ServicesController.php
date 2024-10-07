<?php


namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Services;

class ServicesController extends Controller
{

    public function index()
    {
        $services = Services::all(); // Retrieve all news articles
        return view('frontend.hizmetlerimiz', compact('services'));
    }

    public function detail($link)
    {
        $service = Services::where('link',$link)->first();

        return view('frontend.hizmet', compact('service'));
    }


}
