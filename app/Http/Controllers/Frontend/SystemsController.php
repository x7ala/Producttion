<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Systems;

class SystemsController extends Controller
{

    public function index()
    {
        $systems = Systems::all();

        return view('frontend.sistemler', compact('systems'));
    }

    public function detail($link)
    {
        $system = Systems::where('link',$link)->first();

        return view('frontend.sistem', compact('system'));
    }


}
