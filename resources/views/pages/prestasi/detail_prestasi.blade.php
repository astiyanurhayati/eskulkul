<x-main >
    @include('components.navbar')
    <div class="container bg-slate-100">
        <div class="grid lg:flex py-20 mx-10 pt-20 items-center">
        
        <img src="{{asset('storage/'.$prestasi->gambar)}}" class="rounded" alt="" style="width: 400px;">

        <div class="container mt-20 ml-5 max-w-3xl col-span-2">
        <a class="" href="{{url('prestasis?category'.$prestasi->category->slug)}}"><p>Kategori: {{$prestasi->category->name}}</p> <small>{{$prestasi->created_at->diffForHumans()}}</small></a>
        <h1 class="font-bold text-2xl underline decoration-pink-500">{{$prestasi->title}}</h1>
        <p>{!!$prestasi->body!!}</p>
        <a href="/prestasis"><button class=" mt-10 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Kembali</button></a>
        </div>
    </div>
</div>
</x-main>