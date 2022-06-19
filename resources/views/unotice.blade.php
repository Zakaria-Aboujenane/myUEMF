@extends('layouts.header')
@section('content')
    <div class="notification flex flex-col" style="position:fixed;left:200px;top:100px;">

        <img src="photo/notification.png" class="h-8 w-8 mr-3 mt-32"
             style="position: relative;right:220px;bottom: 117px;">
        <h1 class="text-2xl font-bold " style="position: relative;right:130px;bottom: 147px;">Notifications</h1>
@foreach($notifs as $n)
    @php
    $u = \App\Models\User::find($n->concerned_id);
    @endphp
        <div class="flex flex-row bordernotifi  " style="position: relative;bottom:125px;">
            <img class=" h-12 w-12 rounded-full mr-2" style="position: relative;left:10px;"
                 src="{{ $u->url_photos}}">
            <button class=" text-lg  font-bold ml-2 mr-2">{{ $u->username}}</button>
            <button class=" text-normal  fontweight">{{$n->descripton}}</button>
        </div>
        @endforeach

    </div>

@endsection
