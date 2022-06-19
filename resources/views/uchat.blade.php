@extends('layouts.header')
@section('content')

    <div class="flex flex-row ml-96 mt-24">
        <div>
            @foreach($msgs as $m)
            <button
                class=" max-w-sm h-28 bg-white rounded-xl shadow-lg ml-16 mb-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
                <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0" src="{{$m->user()->first()->url_photos}}">


                <div class="text-center space-y-2 sm:text-left">
                    <div class="space-y-0.5">

                        <script type="text/javascript">
                            function toggle(obj) {
                                var obj=document.getElementById(obj);
                                if (obj.style.display == "block") obj.style.display = "none";
                                else obj.style.display = "block";
                            }
                        </script>

                        <a href="javascript: void(0);" onClick="toggle('q{{$m->id}}')">
                            <p class="text-normal text-black font-semibold">
                                {{$m->created_at}}
                            </p>
                            <p class="text-lg text-black font-semibold">
                                {{$m->user()->first()->username}} vous a envoye un message
                            </p>
                        </a>
                        <div id="q{{$m->id}}" style="display:none;">
                            {{$m->content}}
                        </div>
                    </div>

                </div>

        </button>
            @endforeach

                @foreach($sendM as $m)
                    <button
                        class=" max-w-sm h-28 bg-white rounded-xl shadow-lg ml-16 mb-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
                        <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0" src="{{$m->user()->first()->url_photos}}">


                        <div class="text-center space-y-2 sm:text-left">
                            <div class="space-y-0.5">

                                <script type="text/javascript">
                                    function toggle(obj) {
                                        var obj=document.getElementById(obj);
                                        if (obj.style.display == "block") obj.style.display = "none";
                                        else obj.style.display = "block";
                                    }
                                </script>

                                <a href="javascript: void(0);" onClick="toggle('q{{$m->id}}')">
                                    <p class="text-normal text-black font-semibold">
                                        {{$m->created_at}}
                                    </p>
                                    <p class="text-lg text-black font-semibold">
                                       vous avez envoye ce message a  {{$m->receiver()->first()->username}}
                                    </p>
                                </a>
                                <div id="q{{$m->id}}" style="display:none;">
                                    {{$m->content}}
                                </div>
                            </div>

                        </div>

                    </button>
                @endforeach


    </div>
    <a href="javascript: void(0);" onClick="toggle('q6')">
        <button> send message</button>
    </a>

    <div id="q6" style="display:none;" id="wrapper">

        <div id="sms_div">
            <form method="post" action="/save_message">
                @csrf
                <label for="receiver_id">To:</label>
                <select name="receiver_id" id="receiver_id">
                    @foreach(auth()->user()->friendship as $f)
                    <option value="{{$f->id}}">{{$f->username}}</option>
                    @endforeach

                </select>
                <br><br>


            <textarea name="content" placeholder="Enter Message Text"></textarea>
            <br>
            <input type="submit" name="send_message" value="SEND MESSAGE">
            </form>
        </div>

    </div>

    </div>



@endsection
