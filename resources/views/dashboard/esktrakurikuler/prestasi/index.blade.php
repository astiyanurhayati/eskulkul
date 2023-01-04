<x-master title="prestasi">
    
    <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
        <div class="inner">
            <div class="app-card-body p-1 p-lg-0">
                <h4 class="mb-1 mt-3">Kelola Prestasi Siswa</h4>  
            </div>
        </div>
        
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
     @endif
  <div class="container mt-5">
<a href="{{url('dashboard/prestasi/create')}}">    <button class="btn btn-primary mb-2" style="color: white">+ Prestasi</button></a>
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
            @foreach ( $prestasis as  $prestasi)   
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$prestasi->title}}</td>
              <td>{{$prestasi->category->name}}</td> 
              <td class="d-flex gap-1">
              <a href="{{route('dashboard.prestasi.edit', $prestasi->slug)}}">  <button  class="btn btn-danger" style="color: white">edit</button></a>
              
              <a href="{{url('prestasi/'.$prestasi->slug)}}"> <button class="btn" style="background: orange; color:white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
              </svg></button></a>
              
              <form action="{{url('dashboard/prestasi/delete/'.$prestasi->slug)}}" method="POST">
                @csrf
                @method('delete')
                <button  class="btn btn-primary" type="submit" style="color: white" >delete</button>
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