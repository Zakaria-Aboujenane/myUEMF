@extends('layouts.header')

@section('content')
    <div class="mt-16 ml-28">
        <a href="/ufriends"> <button
                class="mt-12 ml-64  my-2 px-16 py-3 text-sm font-semibold rounded-full border border-purple-200 text-white bg-gradient-to-r from-stone-500 to-blue-900 hover:border-transparent outline-none ring-2 ring-indigo-300 ring-offset-2">Friends</button>
        </a>
        <a href="/suggestions"><button
                class=" mt-12 ml-32 my-2 px-12 py-3 text-sm text-indigo-800 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-gradient-to-r from-stone-500 to-blue-900 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:ring-offset-2">Suggestions</button>
        </a>
        @foreach($users as $u)
        <div
            class="mt-6 ml-60 my-4 py-10 px-8 max-w-lg mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
            <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0" src="{{$u->url_photos}}"
                 alt="Woman's Face">
            <div class="text-center space-y-2 sm:text-left">
                <div class="space-y-0.5">
                    <p class="text-lg text-black font-semibold ">
                        {{$u->username}}
                    </p>
                    <p class="text-slate-500 font-medium">
                        Student-{{$u->school}}
                    </p>
                </div>
                <button
                    @php
                            $mu = auth()->user()->friendship->contains('id',$u->id);

                    @endphp
                        @if($mu == false)
                    class="px-4 py-1 text-sm text-indigo-800 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-indigo-800 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:ring-offset-2">Ajouter</button>
                @else
                    class="px-4 py-1 text-sm text-indigo-800 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-indigo-800 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:ring-offset-2">already</button>
                    @endif

            </div>
        </div>

        @endforeach
    </div>


@endsection
