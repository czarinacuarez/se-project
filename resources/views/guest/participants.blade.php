<x-guest-layout>
    <div class = "">
        <img class = "max-h-96 w-full bg-cover" src = "images/aboutcover.png">
    </div>

    <div class = "p-5 max-w-7xl mx-auto">
        <h1 class = "text-3xl  sm:text-4xl  py-2 text-center  text-blue-800 font-extrabold ">PARTICIPANT'S GALLERY
        </h1>

        <div
        class=" flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 items-center justify-center p-4 lg:px-4 lg:py-6">
        <div class="w-full md:w-1/2">
            <form role="search" class="flex items-center">
                <label for="user-pet-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                        </svg>
                    </div>
                    <input type="text" id="user-pet-search" placeholder="Search participants" name="search"
                        requiblue=8"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-800 focus:border-blue-800 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            </form>
        </div>

        <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-500 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-800 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-1.5 -ml-1 "
                    viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                        clip-rule="evenodd" />
                </svg>
                Filter options
                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
            </button>
        </div>
        <div id="filterDropdown" class="z-50 hidden py-1 px-3 bg-white rounded-lg shadow w-60 dark:bg-gray-700 right-0">
            <div class="flex items-center justify-between pt-2">
                <h6 class="text-sm font-medium text-black dark:text-white">Filters</h6>
            </div>
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-black dark:text-white"
                data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="category-heading">
                    <button type="button"
                        class="flex items-center justify-between w-full py-2 px-1.5 text-sm font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700"
                        data-accordion-target="#category-body" aria-expanded="true" aria-controls="category-body">
                        <span>Pet Type</span>
                        <svg aria-hidden="true" data-accordion-icon="" class="w-5 h-5 rotate-180 shrink-0"
                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>

                <div id="category-body" class="hidden" aria-labelledby="category-heading">
                    <div class="py-2 font-light border-b border-gray-200 dark:border-gray-600">
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <input id="filter_dog" type="checkbox" value="Dog"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="filter_dog"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Dog</label>
                            </li>
                            <li class="flex items-center">
                                <input id="filter_cat" type="checkbox" value="Cat"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="filter_cat"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Cat</label>
                            </li>
                        </ul>
                    </div>
                </div>

                <h2 id="gender-heading">
                    <button type="button"
                        class="flex items-center justify-between w-full py-2 px-1.5 text-sm font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700"
                        data-accordion-target="#gender-body" aria-expanded="true" aria-controls="gender-body">
                        <span>Pet Gender</span>
                        <svg aria-hidden="true" data-accordion-icon="" class="w-5 h-5 rotate-180 shrink-0"
                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>

                <div id="gender-body" class="hidden" aria-labelledby="gender-heading">
                    <div class="py-2 font-light border-b border-gray-200 dark:border-gray-600">
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <input id="filter_male" type="checkbox" value="Male"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="filter_male"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Male</label>
                            </li>
                            <li class="flex items-center">
                                <input id="filter_female" type="checkbox" value="Female"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="filter_female"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Female</label>
                            </li>
                        </ul>
                    </div>
                </div>

                <h2 id="vacStatus-heading">
                    <button type="button"
                        class="flex items-center justify-between w-full py-2 px-1.5 text-sm font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700"
                        data-accordion-target="#vacStatus-body" aria-expanded="true" aria-controls="vacStatus-body">
                        <span>Age</span>
                        <svg aria-hidden="true" data-accordion-icon="" class="w-5 h-5 rotate-180 shrink-0"
                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>

                <div id="vacStatus-body" class="hidden" aria-labelledby="vacStatus-heading">
                    <div class="py-2 font-light border-b border-gray-200 dark:border-gray-600">
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <input id="filter_Fully_Vaccinated" type="checkbox" value="Fully Vaccinated"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="filter_Fully_Vaccinated"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Fully
                                    Vaccinated</label>
                            </li>
                            <li class="flex items-center">
                                <input id="filter_Not_Vaccinated" type="checkbox" value="Not Vaccinated"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="filter_Not_Vaccinated"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Not
                                    Vaccinated</label>
                            </li>
                        </ul>
                    </div>
                </div>

                <h2 id="size-heading">
                    <button type="button"
                        class="flex items-center justify-between w-full py-2 px-1.5 text-sm font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700"
                        data-accordion-target="#size-body" aria-expanded="true" aria-controls="size-body">
                        <span>Pet Size</span>
                        <svg aria-hidden="true" data-accordion-icon="" class="w-5 h-5 rotate-180 shrink-0"
                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>

                <div id="size-body" class="hidden" aria-labelledby="size-heading">
                    <div class="py-2 font-light border-b border-gray-200 dark:border-gray-600">
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <input id="filter_small" type="checkbox" value="Small"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="filter_small"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Small</label>
                            </li>
                            <li class="flex items-center">
                                <input id="filter_medium" type="checkbox" value="Medium"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="filter_medium"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Medium</label>
                            </li>
                            <li class="flex items-center">
                                <input id="filter_large" type="checkbox" value="Large"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="filter_large"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Large</label>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
        <section class="container mx-auto p-10 md:py-12 px-0 md:p-8 md:px-0">
            <section
                class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 items-start ">
                <a class="pb-3 bg-purple-50 text-center transform duration-500 hover:-translate-y-2 cursor-pointer">
                    <img class = "w" src="images/pics.png" alt="">

                    <h1 class="text-xl font-bold mt-2">Karl Isaac Francisco</h1>
                    <p class="mb-2">Bachelor of Science in Information Technology</p>
                </a>

            </section>
        </section>
    </div>

 
</x-guest-layout>
