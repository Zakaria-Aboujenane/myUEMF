@extends('layouts.header')

@section('content')
    <div class="flex flex-col justify-between mt-14 ">
        <label class="ml-72 mt-10 text-2xl  font-sans font-bold text-cyan-900">&#160 &#160 ADD new POST </label>
        <div class=" ml-72 h-76 mt-3">
            <div class="center-div flex flex-col  borderaddpost ">
                <div class="flex flex-row bg-slate-200 rounded-t-3xl py-5">



                </div>
                <div class="flex flex-col">
                    <form  action="/save_post" method="post">
                        @csrf
                        <textarea class="font-medium text-black pl-4 border-transparent" rows="10" cols="40"
                                  placeholder=" Hi what's up Smile ?" type="title" name="title"></textarea>

                        <select name="type" id="receiver_id">

                            <option value="announcement">announcement</option>
                            <option value="event">event</option>
                            <option value="food">food</option>
                            <option value="e-commerce">e-commerce</option>


                        </select>
                        <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
                        <input type="submit" value="share">
                    </form>
                    <div class="flex flex-row  bg-slate-100 rounded-b-3xl justify-evenly items-center">
                        <div class="flex flex-row  justify-between mr-60">
                            <div class="flex flex-row ">
                                <a href="/addphoto"><button>
                                        <script src="https://cd.lordicon.com/xdjxvujz.js"></script>
                                        <lord-icon src="https://cdn.lordicon.com/fgkmrslx.json" trigger="click"
                                                   colors="primary:#0a2e5c,secondary:#0a5c49"
                                                   style="width:50px;height:70px">
                                        </lord-icon>
                                    </button>
                                </a>
                            </div>
                            <div class="flex flex-row ml-3 mt-3">

                                <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/tdxypxgp.json" trigger="click"
                                           colors="primary:#0a2e5c,secondary:#0a4e5c" style="width: 50px;height: 50px;">
                                </lord-icon>


                            </div>
                            <div class="flex flex-row ml-3 mt-3">
                                <a href="/poll"><button>
                                        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                        <lord-icon src="https://cdn.lordicon.com/gqdnbnwt.json" trigger="click"
                                                   colors="primary:#0a2e5c,secondary:#0a4e5c"
                                                   style="width: 50px;height:50px">
                                        </lord-icon>
                                    </button></a>
                            </div>
                            <div class="flex flex-row ml-3">
                                <button>
                                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/pithnlch.json" trigger="hover"
                                               colors="primary:#0a4e5c,secondary:#08a88a" style="width:50px;height:50px">
                                    </lord-icon>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="bg-transparent">
        <div class="fixed flex flex-col right-0 inset-y-2 mt-72 ">
            <button
                class="bordercolor1  h-20 w-32 font-mono  text-base mt-1 rounded-l-lg  hover:h-24 ">Annoncement</button>
            <button
                class=" bordercolor2 h-20 w-32 font-mono  text-base mt-1 rounded-l-lg    hover:h-24">Event</button>
            <button
                class="bordercolor3 h-20 w-32 font-mono  text-base mt-1 rounded-l-lg     hover:h-24">Food</button>
            <button
                class="bordercolor4 h-20 w-32 font-mono  text-base mt-1 rounded-l-lg    hover:h-24">E-commerce</button>
        </div>
    </div>


@endsection
