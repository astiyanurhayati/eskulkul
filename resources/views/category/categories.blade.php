
@include('components.navbar');
<x-main>
    <h1 class="text-3xl mt-20 mb-10 text-center font-bold "> Categories </h1>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4 lg:mx-20 mb-32">
        
    </div>
    <div class="ml-5">
    @foreach ($categories as $category )   
       <ul>
        <li>
            <a href="/categories/{{$category->slug}}"><h1 class="font-bold text-3xl">{{$category->name}}</h1></a>
        </li>
       </ul>
     @endforeach 
    </div>

</x-main>