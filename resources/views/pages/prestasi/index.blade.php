
@include('components.navbar');
<x-main>
    <h1 class="text-3xl mt-20 mb-5 text-center font-bold ">{{$title}}</h1>

        <form action="prestasis" class="mt-99 mx-auto max-w-2xl mt-10 mb-10">
            @if(request('category'))
                <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            <div class="flex">
                <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                    <li>
                        @foreach ($categories as $category)
                            
                       <a href="{{url('prestasis?category='.$category->slug)}}"> <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$category->name}}</button></a>
                        @endforeach
                    </li>

                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="text" name="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search keputrian, umum ..." value="{{request('search')}}" >
                    <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>


    @if($prestasis->count())
    <div class="flex text-center items-center">
    <div class=" max-w-lg align-items-center lg:mx-20 mb-10 bg-white text-center border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="{{asset('storage/'.$prestasis[0]->gambar)}}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
              <a href="{{url('prestasi/'.$prestasis[0]->slug)}}">  <h5 class="mb-2 text-xl font-bold tracking-tight underline underline-offset-8  text-sky-500 dark:text-white">{{$prestasis[0]->title}}</h5></a>
            </a>
          <a href="{{url('prestasis?category='.$prestasis[0]->category->slug)}}">  <p>Category: {{$prestasis[0]->category->name}}  <small>{{$prestasis[0]->created_at->diffForHumans()}}</small></p></a>
            <p class="mb-3 font-normal text-sm text-gray-700 dark:text-gray-400">{{$prestasis[0]->excerpt}}</p>
            <a href="{{url('prestasi/'.$prestasis[0]->slug)}}" class="inline-flex items-center px-2 py-1.5 text-sm font-medium text-center text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    <img src="{{asset('assets/img/prestasi.png')}}" class="lg:max-w-lg" alt="">
</div>
    
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4 lg:mx-20 mb-32">
        
        @foreach ($prestasis->skip(1) as $prestasi )       
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="{{asset('storage/'.$prestasi->gambar)}}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
              <a href="{{url('prestasi/'.$prestasi->slug)}}">  <h5 class="mb-2 text-pink-500 text-xl font-bold tracking-tight  dark:text-white">{{$prestasi->title}}</h5></a>
            </a>
          <a href="{{url('prestasis?category='.$prestasi->category->slug)}}">  <p>Category: {{$prestasi->category->name}} <small>{{$prestasi->created_at->diffForHumans()}}</small></p></a>
            <p class="mb-3 font-normal text-sm text-gray-700 dark:text-gray-400">{{$prestasi->excerpt}}</p>
            <a href="{{url('prestasi/'.$prestasi->slug)}}" class="inline-flex items-center px-2 py-1.5 text-sm font-medium text-center text-white bg-gradient-to-r from-sky-500 to-indigo-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    @endforeach 
    
    @else
    <p class="text-center">Tidak Ada postingan</p>
    @endif    
    </div>

<div class="mx-20">
    {{$prestasis->links('pagination::tailwind')}}</div>

</x-main>