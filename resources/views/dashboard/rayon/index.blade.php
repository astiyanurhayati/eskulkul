<x-master title="prestasi">
    
    <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
        <div class="inner">
            <div class="app-card-body p-1 p-lg-0">
                <h4 class="mb-1 mt-3">Data Rayon</h4>  
            </div>
        </div>
        
      </div>
      <div class="container mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
   @endif
<a href="{{url('dashboard/rayon/create')}}"> 
     <button class="btn btn-primary mb-2" style="color: white">+ Rayon</button></a>
    <div class="app-card shadow-sm w-50">
        <div class="table-responsive">
            <table  class="table table-striped ">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">Nama</th>
             </tr>
           </thead>
           <tbody>
            @foreach ( $rayons as  $rayon)   
             <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$rayon->name}}</td>
              <td>
                <form action="{{route('dashboardrayon.destroy', $rayon->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Hapus</button>
                </form>
              </td>

            @endforeach
            </tr>
             
           </tbody>
         </table>
       </div>
    </div>
  </div>
</x-master>