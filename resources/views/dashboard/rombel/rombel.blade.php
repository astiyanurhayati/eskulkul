<x-master title="prestasi">
    
    <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
        <div class="inner">
            <div class="app-card-body p-1 p-lg-0">
                <h4 class="mb-1 mt-3">Data Rombel</h4>  
            </div>
        </div>
        
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
     @endif
  <div class="container mt-5">
<a href="{{url('dashboard/daftar/create')}}">    <button class="btn btn-primary mb-2" style="color: white">+ Rombel</button></a>
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
            @foreach ($rombels as $rombel )
               <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$rombel->name}}</td>
            @endforeach
            </tr>
             
           </tbody>
         </table>
       </div>
    </div>
  </div>
</x-master>