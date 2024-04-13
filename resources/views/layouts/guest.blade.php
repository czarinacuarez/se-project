<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('images/uweeklogo.png') }}">
        <title>NUFV University Week</title>
        <link rel="stylesheet" href="/css/styles.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
  
    <body class = "antialiased">
        <nav class="bg-blue-800  fixed w-full z-20 top-0 start-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/u-week-navbar.svg" class="md:h-10 h-8 w-full" alt="">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
              @if (Route::has('login'))
              @auth
              <a href = "{{ url('/dashboard') }}" class=" bg-yellow-400 text-blue-800  hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-extrabold rounded-lg text-sm px-4 py-2 text-center  ">Login</a>
              @else
              <a href = "{{  route('login')  }}" class=" bg-yellow-400 text-blue-800  hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-extrabold rounded-lg text-sm px-4 py-2 text-center  ">Login</a>

              @endauth
              @endif
              <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-yellow-400 hover:text-black focus:outline-none focus:ring-2 focus:ring-gray-200  " aria-controls="navbar-sticky" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                  </svg>
              </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
              <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-blue-800   ">
                <li>
                  <a href="{{  route('welcome')  }}" class="block py-2 px-3 rounded md:hover:text-yellow-300 hover:bg-yellow-400 md:hover:bg-transparent  md:text-white md:p-0
                  @if (Route::is('welcome'))
                  md:text-yellow-300
                    @endif  md:text-white                 
                    " aria-current="page">Home</a>
                </li>
                <li>
                  <a href="{{  route('about')  }}" class="block py-2 px-3 text-gray-900 rounded  hover:text-black md:hover:text-yellow-300  hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-white md:p-0
                  @if (Route::is('about'))
                  md:text-yellow-300
                    @endif  md:text-white 
                     ">Event Overview</a>
                </li>
             
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 md:hover:text-yellow-300 hover:bg-yellow-400 md:hover:bg-transparent hover:text-black  md:text-white md:border-0 md:hover:text-white md:p-0 md:w-auto     ">Sports & Contests <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-blue-800 divide-y divide-gray-100 rounded-lg shadow w-44  ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                          <li>
                            <a href="{{  route('sports')  }}" class="block px-4 py-2 text-white hover:bg-yellow-400 hover:text-black ">Sports</a>
                          </li>
                          <li>
                            <a href="{{  route('contest')  }}" class="block px-4 py-2 text-white hover:bg-yellow-400 hover:text-black ">Contest</a>
                          </li>
                          <li>
                            <a href="{{  route('gallery')  }}" class="block px-4 py-2  text-white hover:bg-yellow-400 hover:text-black ">Participants Gallery</a>
                          </li>
                          <li>
                            <a href="{{  route('msnu')  }}" class="block px-4 py-2  text-white hover:bg-yellow-400 hover:text-black ">Mr. and Ms. NU</a>
                          </li>
                        </ul>
                        <div class="py-1">
                          <a href="{{  route('result')  }}" class="block px-4 py-2 text-sm text-white text-gray-700 hover:bg-yellow-400 md:hover:bg-yellow-400 hover:bg-yellow-400 hover:text-black  ">Results</a>
                        </div>
                </li>
               
              </ul>
            </div>
            </div>
          </nav>
        @if (Route::is('welcome'))
        <div class="relative mt-18  sm:justify-center sm:items-center min-h-screen md:mt-3 bg-dots-darker bg-center bg-white dark:bg-dots-lighter  selection:bg-red-500 selection:text-white">
            {{ $slot }}
        </div>
        @elseif (Route::is('login'))
        <div class = "mt-28 max-w-3xl m-auto py-40 px-5 background">
          {{ $slot }}
         </div>
         @elseif (Route::is('about'))
         <div class="relative mt-18  sm:justify-center sm:items-center min-h-screen md:mt-3 bg-dots-darker bg-center bg-white dark:bg-dots-lighter  selection:bg-red-500 selection:text-white">
          {{ $slot }}
        </div>
        @elseif   (Route::is('result'))
        <div class="relative mt-16 :justify-center sm:items-center min-h-screen md:mt-3 bg-dots-darker bg-center bg-white dark:bg-dots-lighter  selection:bg-red-500 selection:text-white">
          {{ $slot }}
        </div>
        @else
        <div class="relative mt-16 :justify-center sm:items-center min-h-screen md:mt-3 bg-dots-darker bg-center bg-gray-50 dark:bg-dots-lighter  selection:bg-red-500 selection:text-white">
          {{ $slot }}
        </div>
    @endif
    
    @include('footer.main_footer')

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>
