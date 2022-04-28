<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('mailing.email');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'message' => 'required|string'
        ]);

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        Mail::to('davidzaw1111@gmail.com')->send(new WelcomeMail($name, $email, $message));
        return redirect()->route('thankyou', app()->getLocale());
    }
    public function thankyou()
    {
        return view('mailing.thankyou');
    }
}
