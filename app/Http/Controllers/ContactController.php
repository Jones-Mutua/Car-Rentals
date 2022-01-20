<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact() {
        $message=   Contact::all();
        return view("contact", compact("contact"));
    }

    public function index()
    {
        return view("contact");
    }

    public function contactus(Request $request){

        $data = new Contact;

        $data->username = $request->username;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->subject = $request->subject;



    $data->save;
    return redirect()->back()->with('message', 'Message Successful Sent');


    }



}


