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
<a href="{{url('dashboard/student/create')}}">    <button class="btn btn-primary mb-2" style="color: white">+ Siswa</button></a>
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
              <th scope="col" class="text-center" style="min-width: 100px">Umum</th>
              <th scope="col" class="text-center" style="min-width: 100px">Produktif</th>
              <th scope="col" style="min-width: 100px">Keputrian</th>
              <th scope="col" class="text-center" style="min-width: 100px">Seni</th>
           
           </thead>
           <tbody>
            @foreach ( $masterStudent as  $student)   
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$student->name}}</td> 
              <td>{{$student->nis}}</td>
              <td>{{$student->rombel}}</td> 
              <td>{{$student->rayon}}</td> 
              <td>
                @foreach ( $student->users as $item )
                  @if($item->category_id == 2)
                  - {{$item->eskul_name}} <br>
                  @endif
                @endforeach
              </td>

              <td>
                @foreach ( $student->users as $item )
                  @if($item->category_id == 3)
                  - {{$item->eskul_name}}<br>
                  @endif
                @endforeach
              </td>
              <td>
                @foreach ( $student->users as $item )
                  @if($item->category_id == 1)
                  - {{$item->eskul_name}}<br>
                  @endif
                @endforeach
              </td>

              <td>
                @foreach ( $student->users as $item )
                  @if($item->category_id == 4)
                  - {{$item->eskul_name}}<br>
                  @endif
                @endforeach
              </td>

             


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

           
            @endforeach
             
           </tbody>
         </table>
       </div>
    </div>
  </div>
</x-master>