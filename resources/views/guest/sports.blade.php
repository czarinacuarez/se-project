<x-guest-layout>
    <div class = "">
        <img class = "max-h-96 w-full bg-cover" src = "images/sportsbg.png">
    </div>

    <div class = "p-5 max-w-7xl mx-auto">
        <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">SPORTS LATEST RESULT
        </h1>
        <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">This section consists of related information about this U-Week's Sports.
        </p>

    </div>

    <div class = "bg-green-600 p-5  mx-auto">
        <ul class="flex flex-wrap justify-center text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="me-2">
                <a href="#" id="all-link"
                    class="inline-block px-4 py-3 text-black bg-yellow-400 rounded-lg active"
                    onclick="changeDesign('all')" aria-current="page">ALL</a>
            </li>
            <li class="me-2">
                <a href="#" id="basketball-link"
                    class="inline-block px-4 py-3 text-white  rounded-lg hover:text-gray-900 hover:bg-gray-100"
                    onclick="changeDesign('basketball')">BASKETBALL</a>
            </li>
            <li class="me-2">
                <a href="#" id="bowling-link" onclick="changeDesign('bowling')"
                    class="inline-block px-4 py-3 text-white  rounded-lg hover:text-gray-900 hover:bg-gray-100 ">BOWLING</a>
            </li>
            <li class="me-2">
                <a href="#" id="volleyball-link" onclick="changeDesign('volleyball')"
                    class="inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100 ">VOLLEYBALL</a>
            </li>
            <li class="me-2">
                <a href="#" id="table_tennis-link" onclick="changeDesign('table_tennis')"
                    class="inline-block px-4 text-white py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">TABLE
                    TENNIS
                </a>
            </li>
            <li class="me-2">
                <a href="#" id="esports-link" onclick="changeDesign('esports')"
                    class="inline-block px-4 text-white py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">E SPORTS
                </a>
            </li>
            <li class="me-2">
                <a href="#" id="chess-link" onclick="changeDesign('chess')"
                    class="inline-block px-4 text-white py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">CHESS
                </a>
            </li>
            <li class="me-2">
                <a href="#" id="rubiks_cube-link" onclick="changeDesign('rubiks_cube')"
                    class="inline-block px-4 text-white py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">RUBIK's
                    CUBE
                </a>
            </li>
        </ul>

    </div>

    <div class = "bg-cover md:p-10 p-5 " style="background-image: url('{{ asset('images/greenbackground.png') }}');">
        <div id="men_basketball" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">MEN'S BASKETBALL</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
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

        <div id="women_basketball" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">WOMEN'S BASKETBALL</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
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


        <div id="men_volleyball" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">MEN'S VOLLEYBALL</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
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

        <div id="women_volleyball" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">WOMEN'S VOLLEYBALL</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td class="px-3 py-4">
                                <div class="flex flex-col items-start ">
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


        <div id="bowling" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">BOWLING</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-3 py-4">Bracket 1</td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                </div>
                            </td>
                            <td scope="row"
                                class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
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

        <div id="table_tennis" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">TABLE TENNIS</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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
        <div id="esports_valorant" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">ESPORTS: VALORANT</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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

        <div id="esports_cod" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">ESPORTS: CALL OF DUTY</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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

        <div id="esports_ml" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">ESPORTS: MOBILE LEGENDS</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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

     
        <div id="chess" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">CHESS</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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
        
        <div id="rubiks_cube" class="max-w-4xl shadow-lg p-5 my-5 mx-auto bg-white rounded-lg">
            <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">RUBIK'S CUBE</h1>
            <p class = " text-base lg:text-lg lg:text-center italic text-center lg:pe-10  py-2">Updated as of
            </p>
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
    <div class = "bg-white p-5">
        <div class = "p-5 max-w-7xl mx-auto ">
            <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">UPCOMING SPORTS
                MATCHES
            </h1>
        </div>

        
        <div class = "md:max-w-xl max-w-md mx-auto rounded-xl  my-6  grid grid-cols-4">
            <div class = " col-span-2 bg-blue-800  flex rounded-l-xl items-center justify-center ">
                <div class = "w-20 h-20 md:w-40 md:h-28">
                    <img class = "w-full h-full" src = "images/SBAlogo.png">
                </div>
                <h1 class = "text-center text-sm text-white">March 20, 2023 </h1>
                <div class = "w-20 h-20 md:w-40 md:h-28"> 
                    <img class = "w-full h-full" src = "images/SBAlogo.png">
                </div>                
            </div>
            <div class = " col-span-2 bg-white   border border-4 p-4 border-blue-800 rounded-r-xl flex items-center justify-center flex-col">
                <h1 class="text-blue-800 font-bold text-lg text-center">BATTLE OF THE BANDS</h1>
                <p class="text-blue-800 italic text-sm">March 08, 2023</p>

                <div class = "justify-center items-center flex"> 
                    <div class = "py-3 flex gap-1 text-blue-800 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                          </svg>
                          
                        <p class="text-blue-800 font-bold text-sm">National University Fairview</p>
                    </div>
                </div>
                
            </div>
        </div>


        <div class = "md:max-w-xl max-w-md mx-auto rounded-xl p-3  my-6 bg-blue-800 grid grid-cols-3">
            <div class = "col-span-1 flex items-center justify-center ">
                <img class = "w-28 h-28 md:w-40 md:h-40" src = "images/SBAlogo.png">
            </div>
            <div class = "col-span-2 flex  items-center justify-center flex-col">
                <h1 class="text-white font-bold text-lg">BATTLE OF THE BANDS</h1>
                <p class="text-white italic text-sm">March 08, 2023</p>

                <div class = "py-3 flex gap-1 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                      </svg>
                      
                    <p class="text-white font-bold text-base">National University Fairview</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeDesign(sport) {
            document.getElementById('all-link').classList =
                "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
            document.getElementById('basketball-link').classList =
                "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
            document.getElementById('bowling-link').classList =
                "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
            document.getElementById('volleyball-link').classList =
                "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
            document.getElementById('table_tennis-link').classList =
                "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
            document.getElementById('esports-link').classList =
                "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
            document.getElementById('chess-link').classList =
                "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";
            document.getElementById('rubiks_cube-link').classList =
                "inline-block px-4 py-3 text-white rounded-lg hover:text-gray-900 hover:bg-gray-100";

            document.getElementById(`${sport}-link`).classList =
                "inline-block px-4 py-3 text-black bg-yellow-400 rounded-lg active";

            showSport(sport);
        }

        function showSport(sport) {
            var men_basketball = document.getElementById("men_basketball");
            var women_basketball = document.getElementById("women_basketball");
            var men_volleyball = document.getElementById("men_volleyball");
            var women_volleyball = document.getElementById("women_volleyball");

            var bowling = document.getElementById("bowling");
            var table_tennis = document.getElementById("table_tennis");
            var esports_cod = document.getElementById("esports_cod");
            var esports_valorant = document.getElementById("esports_valorant");
            var esports_ml = document.getElementById("esports_ml");
            var chess = document.getElementById("chess");
            var rubiks_cube = document.getElementById("rubiks_cube");


            if (sport.toLowerCase() === "all") {
                // Show all sports
                console.log("Hello, world!");

                men_basketball.style.display = "block";
                women_basketball.style.display = "block";
                men_volleyball.style.display = "block";
                women_volleyball.style.display = "block";
                bowling.style.display = "block";
                table_tennis.style.display = "block";
                esports_valorant.style.display = "block";
                esports_cod.style.display = "block";
                esports_ml.style.display = "block";
                chess.style.display = "block";
                rubiks_cube.style.display = "block";


            } else if (sport.toLowerCase() === "basketball") {
                men_basketball.style.display = "block";
                women_basketball.style.display = "block";
                men_volleyball.style.display = "none";
                women_volleyball.style.display = "none";
                bowling.style.display = "none";
                table_tennis.style.display = "none";
                esports_valorant.style.display = "none";
                esports_cod.style.display = "none";
                esports_ml.style.display = "none";
                chess.style.display = "none";
                rubiks_cube.style.display = "none";
            } else if (sport.toLowerCase() === "volleyball") {
                men_basketball.style.display = "none";
                women_basketball.style.display = "none";
                women_volleyball.style.display = "block";
                men_volleyball.style.display = "block";
                bowling.style.display = "none";
                table_tennis.style.display = "none";
                esports_valorant.style.display = "none";
                esports_cod.style.display = "none";
                esports_ml.style.display = "none";
                chess.style.display = "none";
                rubiks_cube.style.display = "none";
            } else if (sport.toLowerCase() === "bowling") {
                men_basketball.style.display = "none";
                women_basketball.style.display = "none";
                men_volleyball.style.display = "none";
                women_volleyball.style.display = "none";
                bowling.style.display = "block";
                table_tennis.style.display = "none";
                esports_valorant.style.display = "none";
                esports_cod.style.display = "none";
                esports_ml.style.display = "none";
                chess.style.display = "none";
                rubiks_cube.style.display = "none";
            } else if (sport.toLowerCase() === "table_tennis") {
                men_basketball.style.display = "none";
                women_basketball.style.display = "none";
                men_volleyball.style.display = "none";
                women_volleyball.style.display = "none";
                bowling.style.display = "none";
                table_tennis.style.display = "block";
                esports_valorant.style.display = "none";
                esports_cod.style.display = "none";
                esports_ml.style.display = "none";
                chess.style.display = "none";
                rubiks_cube.style.display = "none";
            } else if (sport.toLowerCase() === "esports") {
                men_basketball.style.display = "none";
                women_basketball.style.display = "none";
                men_volleyball.style.display = "none";
                women_volleyball.style.display = "none";
                bowling.style.display = "none";
                table_tennis.style.display = "none";
                esports_valorant.style.display = "block";
                esports_cod.style.display = "block";
                esports_ml.style.display = "block";
                chess.style.display = "none";
                rubiks_cube.style.display = "none";
            } else if (sport.toLowerCase() === "chess") {
                men_basketball.style.display = "none";
                women_basketball.style.display = "none";
                men_volleyball.style.display = "none";
                women_volleyball.style.display = "none";
                bowling.style.display = "none";
                table_tennis.style.display = "none";
                esports_valorant.style.display = "none";
                esports_cod.style.display = "none";
                esports_ml.style.display = "none";
                chess.style.display = "block";
                rubiks_cube.style.display = "none";
            } else if (sport.toLowerCase() === "rubiks_cube") {
                men_basketball.style.display = "none";
                women_basketball.style.display = "none";
                men_volleyball.style.display = "none";
                women_volleyball.style.display = "none";
                bowling.style.display = "none";
                table_tennis.style.display = "none";
                esports_valorant.style.display = "none";
                esports_cod.style.display = "none";
                esports_ml.style.display = "none";
                chess.style.display = "none";
                rubiks_cube.style.display = "block";
            }
        }
    </script>

</x-guest-layout>
