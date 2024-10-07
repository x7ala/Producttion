<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\Systems;

class Yonet extends Controller
{
    public function homepage()
    {

        $services = Services::limit(4)->get();
        $systems = Systems::limit(value: 4)->get();

        return view('frontend.index', compact('services','systems'));


    }


    public function sanatcilar()
    {
        return view("frontend.sanatcilar");
    }

}
