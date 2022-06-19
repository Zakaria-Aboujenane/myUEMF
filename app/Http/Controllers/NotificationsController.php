<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    //

    public function getNotifications(){
        $notifs = Notification::where('user_id',auth()->user()->id)->get();
        return view('unotice',['notifs'=>$notifs]);
    }
}
