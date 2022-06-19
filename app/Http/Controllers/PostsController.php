<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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

        $user = Post::create($formFields);

    }
}
