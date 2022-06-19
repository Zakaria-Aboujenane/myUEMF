<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\Traits\Date;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    //
    public function show_profile(){
        $user = auth()->user();
        $posts = $user->posts()->get();
        foreach ($posts as $p){
            echo $p->title;
        }
        return view('profile',['posts'=>$posts]);
    }
    public function show_All_users(){
        $users = \App\Models\User::all()->except(auth()->user()->id);
//        $users = array();

        return view('ufriends',['users'=>$users]);

    }

    public function show_chats(){
        $msgs = auth()->user()->received_messages()->get();
        $sendM =  auth()->user()->messages()->get();
        return view('uchat',['msgs'=>$msgs,'sendM'=>$sendM]);
    }

    public function save_message(Request $request){
        $formFields = $request->validate([
           'content'=>'required',
            'receiver_id'=>'required'
        ]);

        // Hash Password
        $formFields['sender_id'] = auth()->user()->id;
        $formFields['is_read'] = false;
        $mytime = Carbon::now();
        $str_time = date('Y-m-d',strtotime($mytime->toDateTimeString()))."";
        $formFields['sentAt'] = $str_time;

        // Create User
        $msg = \App\Models\Message::create($formFields);

        return redirect('/uchat')->with('message',' message bien ajoute ');

    }
}
