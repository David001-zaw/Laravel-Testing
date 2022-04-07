<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            /* 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:filter', 'max:255'],
            'message' => ['required', 'string'] */

            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        // You can also use $validation->passes() as a vice-visa
        if($validation->fails()) {
            // return response()->json(['code' => 400, 'response' => $validation->errors()->all()]);
            // return response()->json(['code' => 400, 'response' => $validation->errors()]);
            return response()->json(['code' => 400, 'response' => $validation->errors()->toArray()]);
        }

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $message = "
            Name: $name \n
            Email: $email \n
            Message: $message
        ";

        $receiver = "davidzaw1111@gmail.com";

        Mail::to($receiver)->send(new ContactMail($message, $name));

        return response()->json(['code' => 200, 'response' => "Thanks for contacting us, we'll be get back to you soon"]);

    }
}
