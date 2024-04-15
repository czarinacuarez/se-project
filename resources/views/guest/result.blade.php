<x-guest-layout>
    <div class = "">
        <img class = "max-h-96 w-full bg-cover" src = "images/resultbg.png">
    </div>
    <div class = "p-5 max-w-7xl mx-auto">
        <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">RESULTS
        </h1>
        <p class = " text-base lg:text-lg lg:text-center text-center text-black lg:pe-10 italic  py-2">Here in this section includes the results of the Uweek activities.
        </p>
    </div>

    <div class = "bg-cover p-5 md:p-10" style="background-image: url('{{ asset('images/greenbackground.png') }}');">

        <div  class="max-w-4xl mx-auto shadow-lg p-5 my-5 bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">SPORTS</h1>
           
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class=" px-3 py-4">
                                SPORTS
                            </th>
                            <th scope="col" class=" px-3 py-4">
                                SCHOOL
                            </th>
                            <th scope="col" class="  px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sportsAwards as $sportsAwards)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-base font-bold">{{$sportsAwards->sports->sports_category}}</h1>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="{{ asset('storage/images/'. $sportsAwards->school->school_logo )}}" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base text-blue-800 font-semibold">{{$sportsAwards->school->school_name}}</div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-base font-bold">{{$sportsAwards->championship}}</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div  class="max-w-4xl mx-auto shadow-lg p-5 my-5 bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">CONTEST</h1>
           
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class=" px-3 py-4">
                                CONTEST
                            </th>
                            <th scope="col" class=" px-3 py-4">
                                PROGRAM
                            </th>
                            <th scope="col" class="  px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contestAwards as $contestAwards)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">

                                            <h1 class="text-base font-bold">{{$contestAwards->contest->contest_category}}</h1>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="{{ asset('storage/images/'. $contestAwards->program->school->school_logo )}}" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base text-blue-800 font-semibold">{{$contestAwards->program->program_name}}</div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-base font-bold">{{$contestAwards->championship}}</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div  class="max-w-4xl mx-auto shadow-lg p-5 my-5 bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">SCHOOL'S SCOREBOARD</h1>
            <p class = " text-sm lg:text-base lg:text-center text-center italic font-normal ">
                Updated as of {{ $latestUpdatedSchool->first()?->updated_at->format('F j, Y h:ia') ?? 'No update information available' }}

            </p>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class=" px-3 py-4">
                                SCHOOL
                            </th>
                            <th scope="col" class="  px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($schools as $school)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="{{ asset('storage/images/'. $school->school_logo )}}" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base text-blue-800 font-semibold">{{$school->school_name}}</div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-xl font-bold">{{$school->points}}</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div  class="max-w-4xl mx-auto shadow-lg p-5 my-5 bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">PROGRAM'S SCOREBOARD</h1>
            <p class="text-sm lg:text-base font-normal lg:text-center text-center italic">
                Updated as of {{ $latestUpdated->first()?->updated_at->format('F j, Y h:ia') ?? 'No update information available' }}
            </p>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class=" px-3 py-4">
                                SCHOOL
                            </th>
                            <th scope="col" class="  px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($programs as $program)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('storage/images/'. $program->school->school_logo )}}" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">{{$program->program_name}}</div>
                                </div>
                            </td>
                            <td class=" px-3 py-4">
                                <div class="flex flex-col items-left">
                                    <div class="">
                                        <h1 class="text-xl font-bold">{{$program->points}}</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    

    </div>
</x-guest-layout>
