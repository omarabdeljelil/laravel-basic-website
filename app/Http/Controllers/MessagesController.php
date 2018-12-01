<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        $message->save();

        $successMessage = "Thanks " . ucwords($message->name) . ", your message is sent";
        return redirect('/')->with('success', $successMessage);
    }

    public function getMessages()
    {
        $messges = Message::all();

        return view('messages')->with('messages', $messges);
    }
}
