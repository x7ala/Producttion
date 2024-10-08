<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\ContactForm;
use DB;

class ContactController extends Controller
{

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
         $contact = ContactForm::create([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'msg' => $request->msg,
        ]);

        // Send the email to the admin
        Mail::to('admin@example.com')->send(new ContactFormSubmitted($contact));

        return redirect()->back()->with('success', 'Mesajınız gönderildi!');



    } catch (\Exception $e) {
        // Log the error
        Log::error('Contact form submission error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Mesajınız gönderilirken bir sorun oluştu.');
    }

    }


}
