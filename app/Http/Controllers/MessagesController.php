<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages.index',compact ('messages'));
       
    }
    public function create()
    {

        return view('messages.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|max:255',
            'subject' => 'bail|required|string|max:255',
            'message' => 'bail|required|string|max:255',
           
        ]);
        Message::create([
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->email,
            "message" => $request->email,
        ]);
      
        return redirect(route ("messages.index"));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect(route ("messages.index"));
    }
}
