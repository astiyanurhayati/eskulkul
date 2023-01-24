<x-master title="Daftar Eskul">
    
    <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
        <div class="inner">
            <div class="app-card-body p-1 p-lg-0">
                <h4 class="mb-1 mt-3">Kelola Daftar Esktrakurikuler</h4>  
            </div>
        </div>
        
      </div>
      <div class="container mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
   @endif
<a href="{{url('dashboard/daftar/create')}}">    <button class="btn btn-primary mb-2" style="color: white">+ Daftar</button></a>
    <div class="app-card shadow-sm">
        <div class="table-responsive">
            <table  class="table table-striped">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">Judul</th>
               <th scope="col">Kategori</th> 
               <th scope="col">Action</th>
             </tr>
           </thead>
           <tbody>
            @foreach ( $daftars as  $daftar)   
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$daftar->title}}</td>
              <td>{{$daftar->category->name}}</td> 
              <td class="d-flex gap-1">
              <a href="{{route('dashboard.daftar.edit', $daftar->slug)}}">  <button  class="btn btn-danger" style="color: white">Edit</button></a>
              
              <a href="{{url('daftar', $daftar->slug)}}"> <button class="btn" style="background: orange; color:white">
               Detail</button></a>
              
              <form action="{{route('dashboard.daftar.delete', $daftar->slug)}}" method="POST">
                @csrf
                @method('delete')
                <button  class="btn btn-primary" type="submit" style="color: white" >Hapus</button>
             </form>
            
            </td>

            </tr>
            @endforeach
             
           </tbody>
         </table>
       </div>
    </div>
  </div>
</x-master>