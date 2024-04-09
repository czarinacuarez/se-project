<x-guest-layout>
    <div class = "">
        <img class = "max-h-96 w-full bg-cover" src = "images/aboutcover.png">
    </div>

    <div class = "p-5 max-w-7xl mx-auto">
        <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">CONTESTS
        </h1>
        <p class = " text-base lg:text-lg lg:text-center text-center lg:pe-10  py-2">University Week stands out as
            the highly anticipated annual event, serving as a platform to exhibit diverse talents and skills of both
            students and faculty members through various sports and activities.
        </p>
        
    </div>

    <div class = "bg-green-600 p-5  mx-auto">
        <ul class="flex flex-wrap justify-center text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="me-2">
                <a href="#" id="all-link" class="inline-block px-4 py-3 text-black bg-yellow-400 rounded-lg active"
                    onclick="changeDesign('all')" aria-current="page">ALL</a>
            </li>
            <li class="me-2">
                <a href="#" id="bands-link"
                    class="inline-block px-4 py-3 text-white  rounded-lg hover:text-gray-900 hover:bg-gray-100"
                    onclick="changeDesign('bands')">BATTLE OF THE BANDS</a>
            </li>
            <li class="me-2">
                <a href="#" id="pet-link" onclick="changeDesign('pet')"
                    class="inline-block px-4 py-3 text-white  rounded-lg hover:text-gray-900 hover:bg-gray-100 ">PET FASHION SHOW</a>
            </li>
            <li class="me-2">
                <a href="#" id="brains-link" onclick="changeDesign('brains')"
                    class="inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100 ">BATTLE OF THE BRAINS</a>
            </li>
            <li class="me-2">
                <a href="#" id="dance-link" onclick="changeDesign('dance')"
                    class="inline-block px-4 text-white py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">DANCE CONTEST
                </a>
            </li>
            <li class="me-2">
                <a href="#" id="poster-link" onclick="changeDesign('poster')"
                    class="inline-block px-4 text-white py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">POSTER MAKING CONTEST
                </a>
            </li>
            <li class="me-2">
                <a href="#" id="peerlympics-link" onclick="changeDesign('peerlympics')"
                    class="inline-block px-4 text-white py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">PEERLYMPICS
                </a>
            </li>
            <li class="me-2">
                <a href="#" id="shelfie-link" onclick="changeDesign('shelfie')"
                    class="inline-block px-4 text-white py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">SHELFIE
                </a>
            </li>
            <li class="me-2">
                <a href="#" id="debate-link" onclick="changeDesign('debate')"
                    class="inline-block px-4 text-white py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">DEBATE
                </a>
            </li>
        </ul>
    </div>

    <div class = "bg-cover p-5 md:p-10 " style="background-image: url('{{ asset('images/greenbackground.png') }}');">
        
        <div id="bands" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">BATTLE OF THE BANDS</h1>
            <div class="overflow-x-auto">
                <table class="w-full text-sm mx-auto rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-left px-3 py-4">
                                MATCH
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                TEAM
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td class="px-3 py-4">
                                <div class="flex flex-col items-start">
                                    <div class="mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5 mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="pet" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">PET FASHION SHOW</h1>
            <div class="overflow-x-auto">
                <table class="w-full text-sm mx-auto rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-left px-3 py-4">
                                MATCH
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                TEAM
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td class="px-3 py-4">
                                <div class="flex flex-col items-start">
                                    <div class="mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5 mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="brains" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">BATTLE OF THE BRAINS</h1>
            <div class="overflow-x-auto">
                <table class="w-full text-sm mx-auto rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-left px-3 py-4">
                                MATCH
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                TEAM
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td class="px-3 py-4">
                                <div class="flex flex-col items-start">
                                    <div class="mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5 mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="dance" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">DANCE CONTEST</h1>
            <div class="overflow-x-auto">
                <table class="w-full text-sm mx-auto rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-left px-3 py-4">
                                MATCH
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                TEAM
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td class="px-3 py-4">
                                <div class="flex flex-col items-start">
                                    <div class="mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5 mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div id="poster" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">POSTER MAKING</h1>
            <div class="overflow-x-auto">
                <table class="w-full text-sm mx-auto rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-left px-3 py-4">
                                MATCH
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                TEAM
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td class="px-3 py-4">
                                <div class="flex flex-col items-start">
                                    <div class="mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5 mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="peerlympics" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">PEERLYMPICS</h1>
            <div class="overflow-x-auto">
                <table class="w-full text-sm mx-auto rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-left px-3 py-4">
                                MATCH
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                TEAM
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td class="px-3 py-4">
                                <div class="flex flex-col items-start">
                                    <div class="mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5 mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="shelfie" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">SHELFIE</h1>
            <div class="overflow-x-auto">
                <table class="w-full text-sm mx-auto rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-left px-3 py-4">
                                MATCH
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                TEAM
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td class="px-3 py-4">
                                <div class="flex flex-col items-start">
                                    <div class="mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5 mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div id="debate" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">DEBATE</h1>
            <div class="overflow-x-auto">
                <table class="w-full text-sm mx-auto rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-left px-3 py-4">
                                MATCH
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                TEAM
                            </th>
                            <th scope="col" class="text-left px-3 py-4">
                                SCORE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td class="px-3 py-4">
                                <div class="flex flex-col items-start">
                                    <div class="mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5 mb-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h1 class="text-xl font-bold">3</h1>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class = "bg-yellow-300">
        <div class = "p-5 max-w-7xl mx-auto ">
            <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">UPCOMING CONTEST MATCHES
            </h1>
            
        </div>
    </div>


    <script>function changeDesign(contest) {
        document.getElementById('all-link').classList = "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
        document.getElementById('bands-link').classList = "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
        document.getElementById('pet-link').classList = "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
        document.getElementById('brains-link').classList = "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
        document.getElementById('dance-link').classList = "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
        document.getElementById('poster-link').classList = "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
        document.getElementById('peerlympics-link').classList = "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
        document.getElementById('shelfie-link').classList = "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
        document.getElementById('debate-link').classList = "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";

        document.getElementById(`${contest}-link`).classList = "inline-block px-4 py-3 text-black bg-yellow-400 rounded-lg active";

        showcontest(contest);
    }

    function showcontest(contest) {
        var bands = document.getElementById("bands");
        var debate = document.getElementById("debate");
        var brains = document.getElementById("brains");

        var pet = document.getElementById("pet");
        var dance = document.getElementById("dance");
        var poster = document.getElementById("poster");
        var peerlympics = document.getElementById("peerlympics");
        var shelfie = document.getElementById("shelfie");
        var debate = document.getElementById("debate");


        if (contest.toLowerCase() === "all") {
            // Show all contests
            console.log("Hello, world!");

            bands.style.display = "block";
            debate.style.display = "block";
            brains.style.display = "block";
            pet.style.display = "block";
            dance.style.display = "block";
            poster.style.display = "block";
            peerlympics.style.display = "block";
            shelfie.style.display = "block";
            debate.style.display = "block";


        } else if (contest.toLowerCase() === "bands") {
            bands.style.display = "block";
            debate.style.display = "none";
            brains.style.display = "none";
            pet.style.display = "none";
            dance.style.display = "none";
            poster.style.display = "none";
            debate.style.display = "none";

            peerlympics.style.display = "none";
            shelfie.style.display = "none";
        }
        else if (contest.toLowerCase() === "brains") {
            bands.style.display = "none";
            brains.style.display = "block";
            debate.style.display = "block";
            pet.style.display = "none";
            dance.style.display = "none";
            poster.style.display = "none";
            debate.style.display = "none";

            peerlympics.style.display = "none";
            shelfie.style.display = "none";
        }
        else if (contest.toLowerCase() === "pet") {
            bands.style.display = "none";
            debate.style.display = "none";
            brains.style.display = "none";
            pet.style.display = "block";
            dance.style.display = "none";
            poster.style.display = "none";
            debate.style.display = "none";

            peerlympics.style.display = "none";
            shelfie.style.display = "none";
        }
        else if (contest.toLowerCase() === "dance") {
            bands.style.display = "none";
            debate.style.display = "none";
            brains.style.display = "none";
            pet.style.display = "none";
            dance.style.display = "block";
            poster.style.display = "none";
            debate.style.display = "none";

            peerlympics.style.display = "none";
            shelfie.style.display = "none";
        }
        else if (contest.toLowerCase() === "poster") {
            bands.style.display = "none";
            debate.style.display = "none";
            brains.style.display = "none";
            pet.style.display = "none";
            dance.style.display = "none";
            poster.style.display = "block";
            debate.style.display = "none";

            peerlympics.style.display = "none";
            shelfie.style.display = "none";
        }
        else if (contest.toLowerCase() === "peerlympics") {
            bands.style.display = "none";
            debate.style.display = "none";
            brains.style.display = "none";
            pet.style.display = "none";
            dance.style.display = "none";
            poster.style.display = "none";
            debate.style.display = "none";

            peerlympics.style.display = "block";
            shelfie.style.display = "none";
        }
        else if (contest.toLowerCase() === "shelfie") {
            bands.style.display = "none";
            debate.style.display = "none";
            brains.style.display = "none";
            pet.style.display = "none";
            dance.style.display = "none";
            poster.style.display = "none";
            debate.style.display = "none";

            peerlympics.style.display = "none";
            shelfie.style.display = "block";
        }
        else if (contest.toLowerCase() === "debate") {
            bands.style.display = "none";
            debate.style.display = "none";
            brains.style.display = "none";
            pet.style.display = "none";
            dance.style.display = "none";
            poster.style.display = "none";
            debate.style.display = "block";

            peerlympics.style.display = "none";
            shelfie.style.display = "none";
        }
    } 
    </script>

</x-guest-layout>
