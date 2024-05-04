<x-guest-layout>
    <div class =  "md:bg-cover bg-cover md:h-screen  "
        style="background-image: url('{{ asset('images/homepage-bg.png') }}');">
        <div class = "flex items-center justify-center ">
            <img src="images/universityweek.png" class="md:h-large h-96 my-32 sm:my-20 md:my-12">
        </div>
    </div>
    <div class = "grid-cols-1 lg:grid-cols-2 grid md:p-6 py-10 lg:py-20 md:max-w-7xl mx-auto">
        <div class = "px-8">
            <h1 class = "text-3xl  sm:text-5xl  py-2 text-center md:text-left text-blue-800 font-extrabold ">NUFV
                UNIVERSITY WEEK 2024
            </h1>
            <p class = " text-base lg:text-lg lg:text-justify text-justify lg:pe-10  py-2">University Week stands out as
                the highly anticipated annual event, serving as a platform to exhibit diverse talents and skills of both
                students and faculty members through various sports and activities.


                <br><br>
                This year, the NU Fairview Student Executives, in collaboration with the Student Development and
                Activities Office, are prepared to elevate the stature of U-Week 2024 under the theme <b> ‘maNUfesting:
                Fated Victors.’ <b>

            </p>
            <div class="lg:py-8 py-4 mx-auto text-center md:text-left">
                <a href="{{  route('about')  }}"
                    class="bg-yellow-400 hover:bg-blue-800 text-blue-800 hover:text-white  text-lg text-2xl font-bold py-2 px-6 lg:py-4 lg:px-8 rounded-full">
                    Read More
                </a>
            </div>
        </div>

        <div class = "flex md:justify-end my-2 md:my-0 px-8 justify-center">
            <img class = "lg:max-w-md lg:h-92 max-w-xs h-60 w-full h-full object-cover rounded-xl hover:brightness-110 hover:opacity-90 cursor-pointer"
                src="images/uweekillustrate.png">
        </div>
    </div>

    <div class = "my-12 md:my-16">
        <div
            class = "mx-auto py-4 flex flex-col md:flex-row items-center justify-between md:max-w-7xl mx-auto px-5 md:px-10">
            <h1 class = "text-2xl sm:text-4xl lg:text-5xl py-2 text-center md:text-left text-blue-800 font-extrabold ">
                Participating Schools </h1>
            <a href="{{  route('result')  }}"
                class="bg-yellow-400 hover:bg-blue-800 text-blue-800 hover:text-white  text-center text-lg text-2xl font-bold py-2 px-6 lg:py-4 lg:px-8 rounded-full">
                View University Week Results
            </a>
        </div>
        <div class = "grid grid-cols-2 gap-2  md:gap-0 md:grid-cols-5 md:max-w-7xl px-4 mx-auto  md:px-10 py-4 my-5">
            <div class = "bg-blue-600 w-4/5 rounded-lg mx-auto p-2">
                <img src = "images/SASlogo.png">
            </div>
            <div class = "bg-gray-600 w-4/5  rounded-lg mx-auto p-2">
                <img src = "images/SBAlogo.png">
            </div>
            <div class = "bg-orange-400 w-4/5  rounded-lg mx-auto p-2">
                <img src = "images/SETlogo.png">
            </div>
            <div class = "bg-red-600 w-4/5  rounded-lg mx-auto p-2">
                <img src = "images/SOAlogo.png">
            </div>
            <div class = "bg-green-600 w-4/5  rounded-lg mx-auto p-2">
                <img src = "images/SHTMlogo.png">
            </div>
          

        </div>
    </div>
        <div class = "bg-cover p-5 md:p-10" style="background-image: url('{{ asset('images/greenbackground.png') }}');">
            <div  class="max-w-4xl mx-auto shadow-lg p-5 my-5 bg-white rounded-lg">
                <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">OVERALL SCHOOL AWARDEE</h1>
              
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class=" px-3 py-4">
                                    SCHOOL
                                </th>
                                <th scope="col" class="  px-3 py-4">
                                    PLACEMENT
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full bg-gray-600" src="images/SBAlogo.png" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-xs text-left md:hidden text-blue-800 font-semibold">School of Business and Accountancy
                                        </div>
                                        <div class="text-base md:block hidden text-blue-800 font-semibold">School of Business and Accountancy
                                        </div>
                                    </div>
                                </td>
                              
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-xl font-bold">Champion</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full bg-orange-400" src="images/SETlogo.png" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-xs text-left md:hidden text-blue-800 font-semibold">School of Engineering and Technology
                                        </div>
                                        <div class="text-base md:block hidden text-blue-800 font-semibold">School of Engineering and Technology
                                        </div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-base md:text-xl font-bold">1st Runner Up</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full bg-yellow-400" src="images/SBAlogo.png" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-xs text-left md:hidden text-blue-800 font-semibold">Senior High School
                                        </div>
                                        <div class="text-base md:block hidden text-blue-800 font-semibold">Senior High School
                                        </div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-base md:text-xl font-bold">2nd Runner Up</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div  class="max-w-4xl mx-auto shadow-lg p-5 my-5 bg-white rounded-lg">
                <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">OVERALL PROGRAM AWARDEE</h1>
             
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class=" px-3 py-4">
                                    PROGRAM
                                </th>
                                <th scope="col" class="  px-3 py-4">
                                    PLACEMENT
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full bg-orange-400" src="images/SETlogo.png" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-xs text-left md:hidden text-blue-800 font-semibold">Civil Engineering</div>
                                        <div class="text-base md:block hidden text-blue-800 font-semibold">Civil Engineering</div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-xl font-bold">Champion</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full bg-gray-600" src="images/SBAlogo.png" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-xs text-left md:hidden text-blue-800 font-semibold">Marketing Management</div>
                                        <div class="text-base md:block hidden text-blue-800 font-semibold">Marketing Management</div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-base md:text-xl font-bold">1st Runner Up</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full bg-gray-600" src="images/SBAlogo.png" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-xs text-left md:hidden text-blue-800 font-semibold">Accountancy</div>
                                        <div class="text-base md:block hidden text-blue-800 font-semibold">Accountancy</div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-base md:text-xl font-bold">2nd Runner Up</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class = "bg-green-600 p-5 md:p-8 py-7">
            <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-white font-extrabold ">UNIVERSITY WEEK SPORTS AND
                CONTEST </h1>
            <div class = " max-w-4xl mx-auto py-5 md:py-8">
                <div x-data="{}" x-init="$nextTick(() => {
                    let ul = $refs.logos;
                    ul.insertAdjacentHTML('afterend', ul.outerHTML);
                    ul.nextSibling.setAttribute('aria-hidden', 'true');
                })"
                    class="w-full inline-flex  flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                    <ul x-ref="logos"
                        class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\BASKETBALL.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Basketball</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\VOLLEYBALL.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Volleyball</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\BOWLING.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Bowling</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\CHESS.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Chess</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\TABLE TENNIS.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Table Tennis</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\BATTLE OF THE BANDS.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Battle of the Bands</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\BATTLE OF THE BRAINS.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Battle of the Brains</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\DANCE BATTLE.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Dance Battle</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\DEBATE.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Debate</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\ESPORTS COD.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Call of Duty</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\ESPORTS ML.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Mobile Legends</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\ESPORTS VALORANT.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Valorant</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\PEERLYMPICS.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Peerlympics</p>
                        </li>
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\PET FASHION SHOW.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Pet Fashion Show</p>
                        </li>
                      
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\POSTER MAKING.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Poster Making</p>
                        </li>
                      
                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\RUBIKS CUBE.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Rubiks Cube</p>
                        </li>

                        <li class = "flex flex-col items-center justify-center">
                            <img class = "w-16 h-16 mx-auto " src="images\sportscontestlogo\SHELFIE.svg" alt="Facebook" />
                            <p class = "text-white my-2 text-center">Shelfie</p>
                        </li>
                    </ul>
                </div>
            </div>
        {{-- </div>
        <div class = "p-5 max-w-7xl mx-auto">
            <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">UPCOMING SPORT MATCHES
            </h1>

            @foreach($recentMatches as $match)

            <?php
            $matchId = $match->id;
        
            $scoresCount = \App\Models\Scores::where('match_id', $matchId)->count();
            ?>

            
            @if ($scoresCount == 2)


            <div class = "md:max-w-xl max-w-md mx-auto rounded-xl  my-4    grid grid-cols-6">
                <div class = " col-span-3  flex rounded-l-xl items-center justify-center
                @if ($match->sports_id == 1 || $match->sports_id == 5)
                bg-blue-200
                @elseif ($match->sports_id == 2  || $match->sports_id == 6)
                bg-orange-200
                @elseif ($match->sports_id == 3  || $match->sports_id == 7)
                bg-emerald-200

                @elseif ($match->sports_id == 4  || $match->sports_id == 8)
                bg-rose-200

                @elseif ($match->sports_id == 5  || $match->sports_id == 9)
                bg-lime-200

                @else
                bg-sky-200

                @endif  ">
                        <?php $matchs = 0; ?>

                        @foreach ($match->scores as $index => $score)
                            <div class="w-20 h-20 md:w-28 md:h-28 py-4 px-2">
                                <img class="w-full h-full" src="{{ asset('storage/images/'. $score->school->school_logo ) }}">
                            </div>
                            <?php
                                if ($matchs == 0) {
                                    ?>
                                    <h1 class="text-center text-xs md:text-sm text-gray-600 ">{{ \Carbon\Carbon::parse($match->date)->format('F j, Y h:ia') }}</h1>
                                    <?php }
                                
                                $matchs += 1;
                            ?>
                        @endforeach
                   

                </div>
                <div class = " col-span-3  border border-4 p-4  rounded-r-xl flex items-center justify-center flex-col
                @if ($match->sports_id == 1  || $match->sports_id == 5)
                border-blue-200
                @elseif ($match->sports_id == 2  || $match->sports_id == 6)
                border-orange-200
                @elseif ($match->sports_id == 3  || $match->sports_id == 7)
                border-emerald-200

                @elseif ($match->sports_id == 4  || $match->sports_id == 8)
                border-rose-200

                @elseif ($match->sports_id == 5  || $match->sports_id == 9)
                border-lime-200

                @else
                border-sky-200

                @endif">
                    <h1 class=" font-bold  text-gray-600 text-lg text-center uppercase">{{$match->sports->sports_category}}</h1>
                    <p class="italic text-gray-600 text-sm">{{$match->match_name}}</p>

                    <div class = "justify-center items-center flex"> 
                        <div class = "py-3 flex gap-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                              </svg>
                              
                            <p class=" font-bold  text-gray-600 text-sm">{{$match->location}}</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            @elseif ($scoresCount !=0)
            <div class = "md:max-w-xl max-w-md mx-auto rounded-xl p-3 my-4 grid grid-cols-2
            @if ($match->sports_id == 1 || $match->sports_id == 5)
                bg-blue-600
                @elseif ($match->sports_id == 2  || $match->sports_id == 6)
                bg-orange-600
                @elseif ($match->sports_id == 3  || $match->sports_id == 7)
                bg-emerald-600

                @elseif ($match->sports_id == 4  || $match->sports_id == 8)
                bg-rose-600

                @elseif ($match->sports_id == 5  || $match->sports_id == 9)
                bg-lime-600

                @else
                bg-sky-600

                @endif">
                <div class = "col-span-1 flex items-center justify-center ">
                    <img class = "w-28 h-28 md:w-40 md:h-40" src = "
                    @if($match->sports_id == 1)
                    images\sportscontestlogo\BASKETBALL.svg                   
                    @elseif($match->sports_id == 2)
                    images\sportscontestlogo\BASKETBALL.svg
                    @elseif($match->sports_id == 3)
                    images\sportscontestlogo\BOWLING.svg
                    @elseif($match->sports_id == 4)
                    images\sportscontestlogo\VOLLEYBALL.svg
                    @elseif($match->sports_id == 5)
                    images\sportscontestlogo\VOLLEYBALL.svg
                    @elseif($match->sports_id == 6)
                    images\sportscontestlogo\TABLE TENNIS.svg
                    @elseif($match->sports_id == 7)
                    images\sportscontestlogo\ESPORTS COD.svg
                    @elseif($match->sports_id == 8)
                    images\sportscontestlogo\ESPORTS ML.svg
                    @elseif($match->sports_id == 9)
                    images\sportscontestlogo\ESPORTS COD.svg
                    @elseif($match->sports_id == 10)
                    images\sportscontestlogo\CHESS.svg                   
                     @elseif($match->sports_id == 11)
                    images\sportscontestlogo\RUBIKS CUBE.svg
                    @endif
                    ">
                </div>
                <div class = "col-span-1 flex items-start justify-center flex-col">
                    <h1 class="text-white font-bold text-lg uppercase">[{{ $match->match_name}}] {{$match->sports->sports_category}}</h1>
                    <p class="text-white italic text-sm">{{ \Carbon\Carbon::parse($match->date)->format('F j, Y h:ia') }}</p>

                    <div class = "py-3 flex gap-1 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                          </svg>
                          
                        <p class="text-white font-bold text-base">{{$match->location}}</p>
                    </div>
                </div>
            </div>

            @else

            @endif
            @endforeach

            <div class="lg:py-8 py-4 mx-auto text-center">
                <a href="{{  route('sports')  }}"
                    class="bg-yellow-400 hover:bg-blue-800 text-blue-800 hover:text-white  text-lg text-2xl font-bold py-2 px-6 lg:py-4 lg:px-8 rounded-full">
                    View More Sports Match
                </a>
            </div>
        </div>

        <div class = "p-5 ">
            <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800  font-extrabold ">UPCOMING CONTEST
                MATCHES
            </h1>

            @foreach($recentContestMatches as $match)

            <div class = "md:max-w-xl max-w-md mx-auto rounded-xl p-3 my-4 bg-green-600 grid grid-cols-2">
                <div class = "col-span-1 flex items-center justify-center ">
                    <img class = "w-28 h-28 md:w-40 md:h-40" src = "
                    @if($match->contest_id == 1)
                    images\sportscontestlogo\BATTLE OF THE BANDS.svg                   
                    @elseif($match->contest_id == 2)
                    images\sportscontestlogo\PET FASHION SHOW.svg                   
                     @elseif($match->contest_id == 3)
                    images\sportscontestlogo\BATTLE OF THE BRAINS.svg
                    @elseif($match->contest_id == 4)
                    images\sportscontestlogo\DANCE CONTEST.svg
                    @elseif($match->contest_id == 5)
                    images\sportscontestlogo\POSTER MAKING CONTEST.svg
                    @elseif($match->contest_id == 6)
                    images\sportscontestlogo\PEERLYMPICS.svg
                    @elseif($match->contest_id == 7)
                    images\sportscontestlogo\SHELFIE.svg
                    @elseif($match->contest_id == 8)
                    images\sportscontestlogo\DEBATE.svg

                    @endif
                    ">
                </div>
                <div class = "col-span-1 flex items-start justify-center flex-col">
                    <h1 class="text-white font-bold text-lg">[{{ $match->match_name}}] {{$match->contest->contest_category}}</h1>
                    <p class="text-white italic text-sm">{{ \Carbon\Carbon::parse($match->date)->format('F j, Y h:ia') }}</p>

                    <div class = "py-3 flex gap-1 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                          </svg>
                          
                          <p class="text-white font-bold text-base">{{$match->location}}</p>
                        </div>
                </div>
            </div>
            @endforeach
            <div class="lg:py-8 py-4 mx-auto text-center">
                <a href="{{  route('contest')  }}"
                    class="bg-yellow-400 hover:bg-blue-800 text-blue-800 hover:text-white  text-lg text-2xl font-bold py-2 px-6 lg:py-4 lg:px-8 rounded-full">
                    View More Contest Match
                </a>
            </div>
        </div>

        <div class = "p-5 ">
            <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800  font-extrabold ">UPCOMING EVENTS
            </h1>

            @foreach($events as $event)

            <div class = "md:max-w-xl max-w-md mx-auto rounded-xl p-3 my-4 bg-orange-100 grid grid-cols-2">
                <div class = "col-span-1 flex items-center justify-center ">
                    <img class = "w-28 h-28 md:w-40 md:h-40" src = "{{ asset('storage/images/'. $event->logo )}}">
                </div>
                <div class = "col-span-1 flex items-start justify-center flex-col">
                    <h1 class=" font-bold text-gray-600  text-lg">{{$event->name}}</h1>
                    <p class="text-gray-600  italic text-sm">{{ \Carbon\Carbon::parse($event->date)->format('F j, Y h:ia') }}</p>

                    <div class = "py-3 flex gap-1 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                          </svg>
                          
                          <p class="text-gray-600 font-bold text-base">{{$event->location}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div> --}}
</x-guest-layout>
