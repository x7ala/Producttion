<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\ContactForm;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ContactUsController extends Controller
{

    public function index()
    {
        $forms = ContactForm::all();
        return view('frontend.iletisim', compact('forms'));
    }


}

