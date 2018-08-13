<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Post;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;



class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request,[
        'ime' => 'required',
        'prezime' => 'required',
        'email' => 'required|email',
        'poruka' => 'required',
      ]);

    // Create new message

    $poruka = new Message;
    $poruka->ime = $request->input('ime');
    $poruka->prezime = $request->input('prezime');
    $poruka->email = $request->input('email');
    $poruka->poruka = $request->input('poruka');


    //save message
    // Mail::to(config('mail.support.address'))->send(new ContactEmail($message));
 //    Mail::send('emails.register-activate', $data, function($message) {
 // $message->to(Input::get('email'), Input::get('username'))
 //  ->subject('Verify your email address');
 //   });



       Mail::to('obradovicde@gmail.com')->send(new ContactEmail($poruka));
       //return view('emails.contact');



    $poruka->save();


    //redirect


    return redirect('/contact')->with('success', 'Message Sent');

    }
}
