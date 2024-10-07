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


    public function store(Request $request)
    {

        try{
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:15',
            'email' => 'required|email',
            'msg' => 'required|string|max:500',
        ]);

        // Create a new contact and save it in the database
        ContactForm::create([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'msg' => $request->msg,
        ]);

        return redirect()->back()->with('success', 'Mesajınız gönderildi!');



    } catch (\Exception $e) {
        // Log the error
        Log::error('Contact form submission error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Mesajınız gönderilirken bir sorun oluştu.');
    }

    }
}

