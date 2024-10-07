<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\AboutUs;

class AbtUsController extends Controller
{

    public function index()
    {
        $AbtUsPrg = AboutUs::first();
        return view('frontend.hakkimizda', compact('AbtUsPrg'));
    }

}
