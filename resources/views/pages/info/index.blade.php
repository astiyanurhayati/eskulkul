@include('components.navbar');
<style>
    :root {
        --bg: #B9A899;
        --text-color: #FFFFFF;
        --icons-color: #055267;
    }


    .card-body {
        --padding: 1.2rem;
        padding: var(--padding);
        background: hsl(0 0% 100% / .6);
        transform: translateY(40%);
        transition: transform 500ms ease;
    }

    .card:hover .card-body {
        transform: translateY(0);
    }

    .card {
        color: var(--black);
        background-size: cover;
        padding: 15rem 0 0;
        max-width: 30rem;
        border-radius: .5rem;
        overflow: hidden;

        transition: transform 500ms ease;
    }

    .card:hover .card:focus-within {
        transform: scale(1.05);
    }

    .card-title {
        margin: .2rem 0 1.5rem 0;
        position: relative;
    }

    .card:hover .card-title::after {
        transform: scaleX(1);
    }

    .button {
        cursor: pointer;
        display: inline-block;
        text-decoration: none;
        color: var(--black);
        background-color: var(--icons-color);
        padding: .2rem 1rem;
        border-radius: .25rem;
    }

    .button:hover,
    .button:focus {
        background-color: #48AFAF;
    }
</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

<x-main>

    <div class="container mt-10">
        <h1 class="text-3xl mt-20 mb-5 text-center font-bold ">Informasi Lomba</h1>

        <form action="/info-lomba" class="mt-99 mx-auto max-w-2xl mt-10 mb-10">
            @if(request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            <div class="flex">
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></button>
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            {{-- @foreach ($categories as $category) --}}

                            <a href=""> <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"></button></a>
                            {{-- @endforeach --}}
                        </li>

                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="text" name="search" id="search-dropdown"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Search keputrian, umum ..." value="{{request('search')}}">
                    <button type="submit"
                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>


















        
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4 lg:mx-20 mb-32">
        @foreach ($infoLombas as $info )
            
        <div class="max-w-sm rounded overflow-hidden shadow-lg cursor-pointer" data-bs-toggle="modal" data-bs-target="#{{$info->slug}}">
            <img class="w-full" src="{{asset('assets/img/lomba.jpeg')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <p class="text-gray-700 text-base">
                    Kategori: {{$info->category->name}}
                </p>
            </div>
        </div>

        
        <!-- Modal -->
            <div class="modal fade fixed top-10 left-0 hidden bottom-20 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                id="{{$info->slug}}" tabindex="-1" aria-labelledby="{{$info->slug}}Label" aria-hidden="true">
                <div class="modal-dialog relative w-auto pointer-events-none">
                    <div
                        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                        <div
                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="{{$info->slug}}Label">Ekstrakurikuler {{$info->category->name }}</h5>
                            <button type="button"
                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body relative p-4">
                            <img src="{{asset('assets/img/lomba.jpeg')}}" alt="">
                            <p class="mt-2">Info Lebih Legkap: <a href="{{$info->link}}">Click Disini</a> </p>
                        </div>
                        <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button" class="px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">Close</button>
           
                    </div>
                </div>
            </div>
         </div>
        @endforeach
    </div>
    
    

</x-main>