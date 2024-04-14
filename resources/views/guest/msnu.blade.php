<x-guest-layout>
    <div class = "">
        <img class = "max-h-96 w-full bg-cover" src = "images/msnucover.png">
    </div>
    <div class = "p-5 max-w-7xl mx-auto">
        <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">MR AND MS NU
        </h1>

        <section class="container mx-auto p-10 md:py-12 px-0 md:p-8 md:px-0">
            <section
                class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 items-start ">
               
               
                @foreach($participants as $participant)
    <a data-modal-target="modal-participant-{{ $participant->id }}" data-modal-toggle="modal-participant-{{ $participant->id }}"
        class="pb-3 bg-white shadow-lg text-center rounded-b-lg transform duration-500 hover:-translate-y-2 cursor-pointer">
        <img class="rounded-t-lg" src="{{ asset('storage/profiles/'. $participant->profile )}}" alt="">
        <h1 class="text-xl font-bold mt-2">{{ $participant->name }}</h1>
        <p class="mb-2">{{  $participant->program->program_name}}</p>
    </a>
    
    <!-- Modal -->
    <div id="modal-participant-{{ $participant->id }}" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{ $participant->name }} - {{ $participant->program->school->school_initials }}
                    </h3>
    
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modal-participant-{{ $participant->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-6 space-y-2">
                    <img class = " my-2 rounded-lg" src="{{ asset('storage/profiles/'. $participant->profile )}}" alt="">
                    <h1 class = "text-lg font-bold">Name</h1>
                    <div class = "rounded-lg p-2 border-gray-200 border border-2">
                        <p class="text-base leading-relaxed text-black text-gray-500 dark:text-gray-400">
                            {{  $participant->name}}
                        </p>
                    </div>
                    <h1 class = "text-lg font-bold">Section</h1>
                    <div class = "rounded-lg p-2 border-gray-200 border border-2">
                        <p class="text-base leading-relaxed text-black text-gray-500 dark:text-gray-400">
                            {{  $participant->section}}
                        </p>
                    </div>
                    <h1 class = "text-lg font-bold">Program & School</h1>
                    <div class = "rounded-lg p-2 border-gray-200 border border-2 flex gap-2 items-center">
                        <img class = "w-8 h-8" src = "{{ asset('storage/images/'. $participant->program->school->school_logo )}}">
                        <p class="text-base leading-relaxed text-black text-gray-500 dark:text-gray-400">
                            {{  $participant->program->program_name}} - {{ $participant->program->school->school_name }}
                        </p>
                    </div>
                    
                    <!-- Add other data from $participants here -->
                </div>
            </div>
        </div>
    </div>
@endforeach

        
            </section>
        </section>
    </div>

    <div class = "bg-yellow-400 p-5 ">
        <div class = "p-5 max-w-7xl mx-auto">
            <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">RESULTS
            </h1>
        </div>
        <div  class="max-w-4xl mx-auto shadow-lg p-5 my-5 bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">PLACEMENT</h1>
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class=" px-3 py-4">
                                NAME
                            </th>
                            <th scope="col" class=" px-3 py-4">
                                pROGRAM
                            </th>
                            <th scope="col" class="  px-3 py-4">
                                PLACEMENT
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($placements as $award)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('storage/profiles/'. $award->contestant->profile)}}" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">{{$award->contestant->name }}</div>
                                </div>
                            </td>
                            <td class="py-4 px-3">
                                <div class="flex flex-col items-left">
                                    <div class="">
                                        <h1 class="text-xl font-bold">{{  $award->contestant->program->program_initials }}</h1>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-3">
                                <div class="flex flex-col items-left">
                                    <div class="">
                                        <h1 class="text-xl font-bold">
                                            @if ($award->placement == 0)
                                                Ms. NU Fairview
                                            @elseif ($award->placement == 1)
                                                Mr. NU Fairview
                                            @elseif ($award->placement == 2)
                                                Ms. NU Fairview - 1st Runner Up
                                            @elseif ($award->placement == 3)
                                                Mr. NU Fairview - 1st Runner Up
                                            @elseif ($award->placement == 4)
                                                Ms. NU Fairview - 2nd Runner Up
                                            @elseif ($award->placement == 5)
                                                Mr. NU Fairview - 2nd Runner Up
                                            @endif
                                        </h1>
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
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">SPECIAL AWARDS</h1>
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class=" px-3 py-4">
                                name
                            </th>
                            <th scope="col" class=" px-3 py-4">
                                program
                            </th>
                            <th scope="col" class="  px-3 py-4">
                                SPECIAL AWARDS
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($awards as $award)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('storage/profiles/'. $award->contestant->profile)}}" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">{{ $award->contestant->name  }}</div>
                                </div>
                            </td>
                            <td class="py-4 px-3">
                                <div class="flex flex-col items-left">
                                    <div class="">
                                        <h1 class="text-xl font-bold">{{$award->contestant->program->program_initials }}</h1>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-3">
                                <div class="flex flex-col items-left">
                                    <div class="">
                                        <h1 class="text-xl font-bold">{{ $award->special_awards }}</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                        
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
   
</x-guest-layout>
