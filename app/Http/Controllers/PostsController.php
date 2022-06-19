<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Notification;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostsController extends Controller
{
    //

    public function getAll(){
        $posts = Post::all();
        return view('welcome',['posts'=>$posts]);
    }

    public function show_add_form(){
        return view('ushare');
    }


    public function save_post(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'type'=>'required'
        ]);


        $formFields['user_id'] = 1;

        $user = Post::edit($formFields);

    }

    public function likeit(Request $r){
            $like = new Like();
            $like->is_liked = 1;
            $like->post_id = $r->id_post;
            $like->user_id = $r->id_user;
            if($like->save()){

                $n = new Notification();
                $u = User::find($r->id_user);
                $n->descripton=" a aime votre photo !";
                $n->createdAt = Carbon::now();
                $n->post_id=$r->id_post;
                $n->user_id = Post::find($r->id_post)->user_id;
                $n->concerned_id = $r->id_user;
                $n->save();
                return \App\Models\Like::where('post_id',$r->post_id)->count();
            }
            return "-1";

    }
    public function dislikeit(Request $r){
            Like::where('user_id',$r->id_user)->where('post_id',$r->id_post)->delete();
        return \App\Models\Like::where('post_id',$r->post_id)->count();

    }
}
