<x-master title="prestasi">
    
    <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
        <div class="inner">
            <div class="app-card-body p-1 p-lg-0">
                <h4 class="mb-1 mt-3">Data All Siswa</h4>  
            </div>
        </div>
        
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
     @endif
  <div class="container mt-5">

    <div class="app-card shadow-sm">
        <div class="table-responsive">
            <table  class="table table-striped">
           <thead>
            
             <tr>
               <th scope="col">#</th>
               <th scope="col">Nama</th>
               <th scope="col">NIS</th> 
               <th scope="col">Rombel</th>
               <th scope="col">Rayon</th>
               <th scope="col">JK</th>
            
           
           </thead>
           <tbody>
             @foreach ($masterStudent as $students )
             @foreach ($students->students as $item)             
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>
               {{$item->name}} <br>
              </td>
              <td>
                {{$item->nis}} <br>
               </td>
               <td>
                {{$item->rombel}} <br>
               </td>
               <td>
                {{$item->rayon}} <br>
               </td>
               <td>
                {{$item->jk}} <br>
               </td>
            </tr>
            @endforeach 
            @endforeach
            {{-- <td class="d-flex gap-1">
              <a href="{{route('dashboard.student.edit', $student->slug)}}">  <button  class="btn btn-danger" style="color: white">edit</button></a>
              
              <a href="{{url('student', $student->slug)}}"> <button class="btn" style="background: orange; color:white">
               Detail</button></a>
              
              <form action="" method="POST">
                @csrf
                @method('delete')
                <button  class="btn btn-primary" type="submit" style="color: white" >delete</button>
             </form> 
             --}}
            </td>

           
             
           </tbody>
         </table>
       </div>
    </div>
  </div>
</x-master>