<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
     public function submit(Request $request)
    {/* VALIDATE THE EMAIL  */
        $data = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // SEND THE EMAIL
        Mail::to($data['email'])->send(new ContactMail($data));

        return redirect()->route('success')->with('success');
    }
}
