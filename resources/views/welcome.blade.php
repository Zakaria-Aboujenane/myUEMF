@extends('layouts.header');

@section('content')

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

    </div>
    <div class="bg-transparent">
        <div class="fixed flex flex-col right-0 inset-y-2 mt-72 ">
            <button class="bordercolor1  h-20 w-32 font-mono  text-base mt-1 rounded-l-lg  hover:h-24 ">Annoncement</button>
            <button class=" bordercolor2 h-20 w-32 font-mono  text-base mt-1 rounded-l-lg    hover:h-24">Event</button>
            <button class="bordercolor3 h-20 w-32 font-mono  text-base mt-1 rounded-l-lg     hover:h-24">Food</button>
            <button class="bordercolor4 h-20 w-32 font-mono  text-base mt-1 rounded-l-lg    hover:h-24">E-commerce</button>
        </div>


    </div>
@endsection
