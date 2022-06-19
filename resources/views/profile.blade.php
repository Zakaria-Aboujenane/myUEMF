@extends('layouts.header')
@section('custom_css')
    {{ asset('css/profil.css') }}
@endsection
@section('content')
    <div class="w-screen h-screen bg-slate-200 flex flex-row flex-wrap p-3">
        <div class="mx-auto w-2/3 my-auto ml-64">
            <!-- Profile Card -->
            <div class="mt-8 rounded-lg shadow-lg bg-gray-700 h-96 w-full flex flex-row flex-wrap p-3 antialiased"
                 style="
                background-image: url('photo/uemf.png');
                background-repeat: no-repat;
                background-size: cover;
                background-blend-mode: multiply;
              ">
                <div class="w-1/3 ">
                    <img class="img  w-40 h-56 rounded-b-full shadow-lg antialiased"
                         style="position:relative; top: 200px;  left: 30px;" src="{{auth()->user()->url_photos}}">
                </div>
                <div class="md:w-2/3 w-full px-3 flex flex-row flex-wrap">
                    <div class=" flex flex-col w-full text-right text-gray-700 font-semibold relative pt-3 md:pt-0">
                        <div class="mr-52 py-20 text-2xl text-white leading-tight">{{auth()->user()->username}}</div>
                        <div class="text-normal text-gray-300 hover:text-gray-400 cursor-pointer"><span
                                class="mr-96  border-b border-dashed border-gray-500 pb-1"
                                style="position:relative;bottom:60px; left:95px;">{{auth()->user()->posts()->count()}} publications </span></div>
                        <div class="text-normal text-gray-300 hover:text-gray-400 cursor-pointer mt-6"><span
                                class="mr-96  border-b border-dashed border-gray-500 pb-1"
                                style="position:relative;bottom: 75px; left:70px;">{{auth()->user()->friendship()->count()}} friends</span></div>

                        <button
                            class="margin  mt-8 ml-64  my-2 px-16 py-3 bg-slate-300 text-sm text-black font-semibold rounded-full border
                                 border-gray-300 hover:text-white hover:bg-slate-400 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:ring-offset-2">Edit
                            Profile
                        </button>
                    </div>
                    <div class=" mr-96 text-lg text-black hover:text-gray-400 cursor-pointer md:absolute pt-3 md:pt-0 bottom-0 right-0  "
                         style="right:80px; position:relative;top:30px;">
                        Student<b>-</b><b>{{auth()->user()->school}}</b>
                    </div>


                </div>
            </div>
            <!-- End Profile Card -->
        </div>
    </div>

    <div class="flex flex-col" >
        @foreach($posts as $post)
            @php
                $color="";
                if($post->type =="announcement"){
                    $color="rgb(210, 171, 153)";
                }else if($post->type="event"){
                    $color="rgb(210, 211, 197)";
                }else if($post->type=="Food"){
                    $color="rgb(130, 149, 162)";
                }else if($post->type=="e-commerce"){
                    $color="rgb(64, 97, 140)";
                }
            @endphp
            <div class=" border-1 border-white ml-80 mt-20" style="background: {{$color}}">
                <div class="flex flex-row bg-slate-100"  style="background: {{$color}}" ><button>
                        @php
                            $poste = \App\Models\Post::find($post->id);
                            $user = $poste->user()->first();
                        @endphp
                        <img src="{{$user->url_photos}}"
                             class="h-16 w-16 ml-20 rounded-full mt-1  ring-2 ring-offset-1 ring-transparent" />
                    </button>
                    <div class="flex flex-col mr-1 ">
                        <p class=" text-black text-lg font-normal ml-5 ">{{$user->username}} </p>

                        <p class="text-black text-lg font-mono ml-10 "> {{$post->createdAt}} </p>
                        <p class=" text-black text-lg font-normal ml-5 ">{{$post->title}} </p>
                    </div>
                </div>

                <div class=" ">
                    <img src="{{$post->content}}" class=" borderpost  max-h-96 max-w-6xl " />
                </div>
            </div>

    @endforeach

@endsection
