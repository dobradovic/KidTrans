<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request,[
        'ime' => 'required',
        'prezime' => 'required',
        'email' => 'required',
        'poruka' => 'required',
      ]);

    // Create new message

    $message = new Message;
    $message->ime = $request->input('ime');
    $message->prezime = $request->input('prezime');
    $message->email = $request->input('email');
    $message->poruka = $request->input('poruka');

    //save message


    $message->save();

    //redirect

    
    return redirect('/contact')->with('success', 'Message Sent');

    }
}
