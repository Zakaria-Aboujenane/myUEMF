<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MessagesController extends Controller
{
    //

    public function getReceivedMessages($id_user){
        $u = User::find($id_user);
        $msg = $u->received_messages()->get();
        return $msg;
    }

    public function getMessages($id_user){
        $u = User::find($id_user);
        $msg = $u->messages()->get();
        return $msg;
    }

    public function envoyerMessage(Request $request){
        $sender_id = auth()->user()->id;
        $receiver_id = $request->receiver_id;
        $formFields = $request->validate([
            'receiver_id'=>'required',
            'content'=>'required'
        ]);
        $formFields['sender_id']=$sender_id;
        $msg = Message::create($formFields);
    }

    public function showAddMessageForm(){
        $user= new User();
        $friends = $user->friendship()->get();


    }
}
