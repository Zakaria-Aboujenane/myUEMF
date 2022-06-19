<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class testing extends Controller
{
    //
    public function test(){
//        $m  = new Message();
//        $m->id=10;
//        $m->content="hii";
//        $m->is_read=false;
//        $m->sender_id=1;
//        $m->receiver_id=2;
//        $m->save();
//receiver w user d un message :
//        $m=Message::find(10);
////        $m = new Message();
//        $u =  $m->user()->first()->username;
//        var_dump($u);
//        echo

//        $u = User::find(2);
////        $u = new User();
//        $msg = $u->received_messages()->get();
//        foreach ($msg as $m){
//            echo $m->content;
//        }
//        var_dump($msg);

//        $user= new User();
        $user = User::find(2);
        $myfriends=$user->friendship()->get();
//        var_dump($myfriends);
        foreach ($myfriends as $f){
            echo $f->username;
        }

    }
}
