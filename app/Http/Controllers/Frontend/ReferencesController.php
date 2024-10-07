<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\References;

class ReferencesController extends Controller
{

    public function index()
    {
        $references = References::all();
        return view('frontend.referanslarimiz', compact('references'));
    }

}
