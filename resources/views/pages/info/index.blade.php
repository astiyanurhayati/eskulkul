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


        <div class="flex justify-around mb-10">
            <div></div>
            <div></div>
            <div>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Kategori Lomba <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        @foreach ($categories as $category )
                        <li>
                            <a href="{{route('info.category', $category->id)}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4 lg:mx-20 mb-32">
            @forelse ($infoLombas as $info )

            <div class="max-w-sm rounded overflow-hidden shadow-lg cursor-pointer" data-bs-toggle="modal"
                data-bs-target="#{{str_replace('.', '' , $info->infoimg) . $info->id}}">
                <img class="w-full" src="{{asset('info/'. $info->infoimg)}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <p class="text-gray-700 text-base">
                        Kategori: {{$info->category->name}}
                    </p>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade fixed top-10 left-0 hidden bottom-20 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                id="{{str_replace('.', '' , $info->infoimg) . $info->id}}" tabindex="-1"
                aria-labelledby="{{str_replace('.', '' , $info->infoimg) . $info->id}}Label" aria-hidden="true">
                <div class="modal-dialog relative w-auto pointer-events-none">
                    <div
                        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                        <div
                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                            <h5 class="text-xl font-medium leading-normal text-gray-800"
                                id="{{str_replace('.', '' , $info->infoimg) . $info->id}}Label">Ekstrakurikuler
                                {{$info->category->name }}</h5>
                            <button type="button"
                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body relative p-4">
                            <img src="{{asset('info/'.$info->infoimg)}}" alt="">
                            <p class="mt-2">Info Lebih Legkap: <a href="{{$info->link}}">Click Disini</a> </p>
                        </div>
                        <div
                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                            <button type="button"
                                class="px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            @empty
           <div class="mx-auto">
            <p>Tidak Ada Postigan</p>
           </div>
            @endforelse
        </div>



</x-main>