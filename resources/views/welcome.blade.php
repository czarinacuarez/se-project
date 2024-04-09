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
                Activities Office, are prepared to elevate the stature of U-Week 2024 under the theme ‘maNUfesting:
                Fated Victors.’

            </p>
            <div class="lg:py-8 py-4 mx-auto text-center md:text-left">
                <a href=""
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
            <a href=""
                class="bg-yellow-400 hover:bg-blue-800 text-blue-800 hover:text-white  text-center text-lg text-2xl font-bold py-2 px-6 lg:py-4 lg:px-8 rounded-full">
                View Gallery
            </a>
        </div>
        <div class = "grid grid-cols-2 gap-5 md:gap-0 md:grid-cols-6 md:max-w-7xl  mx-auto  md:px-10 py-4 my-5">
            <div class = "bg-yellow-400 w-4/5 rounded-lg mx-auto p-2">
                <img src = "images/SBAlogo.png">
            </div>
            <div class = "bg-yellow-400 w-4/5  rounded-lg mx-auto p-2">
                <img src = "images/SBAlogo.png">
            </div>
            <div class = "bg-yellow-400 w-4/5  rounded-lg mx-auto p-2">
                <img src = "images/SBAlogo.png">
            </div>
            <div class = "bg-yellow-400 w-4/5  rounded-lg mx-auto p-2">
                <img src = "images/SBAlogo.png">
            </div>
            <div class = "bg-yellow-400 w-4/5  rounded-lg mx-auto p-2">
                <img src = "images/SBAlogo.png">
            </div>
            <div class = "bg-yellow-400 w-4/5  rounded-lg mx-auto p-2">
                <img src = "images/SBAlogo.png">
            </div>

        </div>
    </div>


        <div class = "bg-cover p-5 md:p-10" style="background-image: url('{{ asset('images/greenbackground.png') }}');">
            <div  class="max-w-4xl mx-auto shadow-lg p-5 my-5 bg-white rounded-lg">
                <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">SCHOOL'S SCOREBOARD</h1>
                <p class = " text-sm lg:text-base lg:text-center text-center italic ">University Week stands out as
                    the highly anticipated annual event.
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-xl font-bold">3</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base text-blue-800 font-semibold">ATENEO DE MANILA</div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-xl font-bold">3</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
            
            <div  class="max-w-4xl mx-auto shadow-lg p-5 my-5 bg-white rounded-lg">
                <h1 class="text-2xl sm:text-4xl py-2 text-center text-blue-800 font-extrabold">PROGRAM'S SCOREBOARD</h1>
                <p class = " text-sm lg:text-base lg:text-center text-center italic ">University Week stands out as
                    the highly anticipated annual event.
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base text-blue-800 font-semibold">BSIT</div>
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex flex-col items-left">
                                        <div class="">
                                            <h1 class="text-xl font-bold">3</h1>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center justify-start px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base text-blue-800 font-semibold">ATENEO DE MANILA</div>
                                    </div>
                                </td>
                                <td class=" px-3 py-4">
                                    <div class="flex flex-col items-left">
                                        <div class="">
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

        <div class = "bg-blue-800 p-5 md:p-8 py-7">
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
                        <li>
                            <img src="./facebook.svg" alt="Facebook" />
                        </li>
                        <li>
                            <img src="./disney.svg" alt="Disney" />
                        </li>
                        <li>
                            <img src="./airbnb.svg" alt="Airbnb" />
                        </li>
                        <li>
                            <img src="./apple.svg" alt="Apple" />
                        </li>
                        <li>
                            <img src="./spark.svg" alt="Spark" />
                        </li>
                        <li>
                            <img src="./samsung.svg" alt="Samsung" />
                        </li>
                        <li>
                            <img src="./quora.svg" alt="Quora" />
                        </li>
                        <li>
                            <img src="./sass.svg" alt="Sass" />
                        </li>
                    </ul>
                </div>
            </div>

        </div>



        <div class = "p-5 max-w-7xl mx-auto">
            <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">UPCOMING SPORT MATCHES
            </h1>
            <div class="lg:py-8 py-4 mx-auto text-center">
                <a href=""
                    class="bg-yellow-400 hover:bg-blue-800 text-blue-800 hover:text-white  text-lg text-2xl font-bold py-2 px-6 lg:py-4 lg:px-8 rounded-full">
                    View More Match
                </a>
            </div>
        </div>

        <div class = "p-5 ">
            <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800  font-extrabold ">UPCOMING CONTEST
                MATCHES
            </h1>
            <div class="lg:py-8 py-4 mx-auto text-center">
                <a href=""
                    class="bg-yellow-400 hover:bg-blue-800 text-blue-800 hover:text-white  text-lg text-2xl font-bold py-2 px-6 lg:py-4 lg:px-8 rounded-full">
                    View More Match
                </a>
            </div>
        </div>
</x-guest-layout>
