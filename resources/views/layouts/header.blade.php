<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('js/app.js')}}"></script>
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="@yield('custom_css')" rel="stylesheet" />


</head>

<body class="bg-slate-200">
<div class="fixed top-0 w-full bg-slate-200 flex flex-row justify-between items-center h-20 w-ful">
    <div class="flex flex-row justify-start ml-4 mt-2 ">
        <img src="photo/uemflogo.png" class=" h-12 w-12">

        <div class="flex flex-row justify-start ">
            <i class=" colorgreen text-lg  font-bold ml-2 py-1"> my </i>
            <p class=" colorblue font-extrabold  text-3xl mr-8 py-2"> UEMF </p>
        </div>
    </div>


    <div class=" flex flex-row w-96 space-x-1 ">
        <input name="search" class="text-md font-normal w-full pl-4 text-sky-900 rounded-full placeholder-sky-900"
               placeholder="Search">
        <button>
            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
            <lord-icon src="https://cdn.lordicon.com/qehhcbpv.json" trigger="click" colors="primary:#0a4e5c"
                       style="width:32px;height:32px">
            </lord-icon>
        </button>
    </div>


    <a href="/profil"><button>
            <div class="flex flex-row justify-end">
                <img src="{{auth()->user()->url_photos}}"
                     class="h-16 w-16 rounded-full mt-1  ring-2 ring-offset-1 ring-transparent tranform scale-75" fill="none"
                     viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                </svg>
                <p value="usernameo" class=" colorblue text-md  font-bold ml-1 mr-8 mt-3">{{auth()->user()->username}} </p>
                <p class="colorblue font-mono ml-1 mr-8 "> {{auth()->user()->school}} </p>
            </div>
        </button></a>
</div>

<div class="flex flex-row">
    <div class="fixed">

        <div class=" flex flex-col  justify-start items-center  heightbar   w-44 mt-28 ">
            <a href="/home"><button class="px-4 border-l-4 border-slate-400 rounded-sm ">
                    <div class="flex flex-row justify-between items-center mt-2 w-28 mb-3 h-10">
                        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/igpbsrza.json" trigger="hover" colors="primary:#0a2e5c"
                                   style="width:40px;height:40px" class="ml-4">
                        </lord-icon>
                        <p class=" colortext mr-3 mt-2 font-extrabold "> Home </p>
                    </div>
                </button></a>


            <a href="/ufriends"><button class="px-4 border-transparent border-1 rounded-3xl  ">
                    <div class="flex flex-row justify-between items-center mt-3 ml-3 h-10 mb-2 ">
                        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/kkcllwsu.json" trigger="hover" colors="primary:#0a2e5c"
                                   style="width:40px;height:40px">
                        </lord-icon>
                        <p class=" colortext "> Ufriends </p>
                    </div>
                </button></a>


            <a href="/unotice"><button class="px-4 border-transparent border-0.5 rounded-3xl ">
                    <div class="flex flex-row justify-between items-center mt-2 w-28 h-10 mb-2">
                        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/ndydpcaq.json" trigger="hover" colors="primary:#0a2e5c"
                                   style="width: 44px;height:44px" class="ml-3">
                        </lord-icon>
                        <p class=" colortext  "> Unotice </p>
                    </div>
                </button></a>
            <a href="/ushare"><button class="px-4 border-transparent border-1 rounded-3xl ">
                    <div class="flex flex-row justify-between items-center mt-3 w-28 h-10 mb-2">
                        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/iswjnpyk.json" trigger="hover" colors="primary:#0a2e5c"
                                   style="width:40px;height:40px" class="ml-2">
                        </lord-icon>
                        <p class=" colortext "> Ushare </p>
                    </div>
                </button></a>
            <a href="/uchat"><button class="px-4 border-transparent border-1 rounded-3xl ">
                    <div class="flex flex-row justify-between items-center mt-3 w-28 h-10 mb-2 ">
                        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/uvextprq.json" trigger="hover" colors="primary:#0a2e5c"
                                   style="width:40px;height:40px" class="ml-3">
                        </lord-icon>
                        <p class="colortext mr-2 "> Uchat</p>
                    </div>
                </button>
            </a>
            <a href="https://www.youtube.com/watch?v=RxsofV02dN4"><button
                    class="px-4 border-transparent border-1 rounded-3xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-0 ">
                    <div class="flex flex-row justify-between items-center mt-3 ml-5 w-28 h-10 mb-2">
                        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/hfmdczge.json" trigger="hover" colors="primary:#0a2e5c"
                                   style="width:40px;height:38px">
                        </lord-icon>
                        <p class=" colortext   "> Ucampus </p>

                    </div>
                </button></a>


        </div>
    </div>
</div>

@yield('content')


</body>
</html>
