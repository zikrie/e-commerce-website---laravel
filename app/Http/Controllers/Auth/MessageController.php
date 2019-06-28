<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [ 
            'name' => 'required',
            'email' => 'required'
        ]);

        //Creatw New Message
        $message = new Message;
        $message->name = $request ->input('name');
        $message->email = $request ->input('email');
        $message->message = $request ->input('message');
        //Save Message
        $message->save();

        //Redirect
        return redirect('/faq')->with('success', 'Message Sent');


    }
}
