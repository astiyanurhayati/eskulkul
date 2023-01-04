<x-master title="Info Lomba">
    
    <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
        <div class="inner">
            <div class="app-card-body p-1 p-lg-0">
                <h4 class="mb-1 mt-3">Kelola Informasi Lomba</h4>  
            </div>
        </div>
        
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
     @endif
  <div class="container mt-5">
<a href="{{url('dashboard/info/create')}}">    <button class="btn btn-primary mb-2" style="color: white">+ Informasi</button></a>
    <div class="app-card shadow-sm">
        <div class="table-responsive">
            <table  class="table table-striped">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">link</th>
               <th scope="col">Kategori</th> 
               <th scope="col">Action</th>
             </tr>
           </thead>
           <tbody>
            @foreach ( $infoLomba as  $info)   
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$info->link}}</td>
              <td>{{$info->category->name}}</td> 
              <td class="d-flex gap-1">
              <a href="">  <button  class="btn btn-danger" style="color: white">edit</button></a> 
               
              <a href=""> <button class="btn" style="background: orange; color:white">
              Detail</button></a> 
              
              <form action="" method="POST">
                @csrf
                @method('delete')
                <button  class="btn btn-primary" type="submit" style="color: white" >delete</button>
             </form>
           
            @endforeach
             
           </tbody>
         </table>
       </div>
    </div>
  </div>
</x-master>