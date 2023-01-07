<x-master title="prestasi">
    
    <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
        <div class="inner">
            <div class="app-card-body p-1 p-lg-0">
                <h4 class="mb-1 mt-3">Data Program Kerja</h4>  
            </div>
        </div>
        
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
     @endif
  <div class="container mt-5">
<a href="{{url('dashboard/progja/create')}}">    <button class="btn btn-primary mb-2" style="color: white">+ Program</button></a>
    <div class="app-card shadow-sm w-50">
        <div class="table-responsive">
            <table  class="table table-striped ">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">Waktu</th>
               <th scope="col">file</th>
      
               <th scope="col">Status</th>
               
             </tr>
           </thead>
           <tbody>
             @foreach ($progjas as $progja )
               <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$progja->time}}</td>
  
            <td>
              <a href="{{asset('document/'.$progja->document)}}" download><button class="btn" style="background: green; color:white" type="button">Download</button></a>
            </td>
            <td class="align-items-center justify-center">
             
            
            @if($progja->status == 0)
            <span style="background: rgb(255, 255, 193); color:coral; padding: 5px; border-radius: 10px">Pending</span>
            @elseif($progja->status == 1)
            <p>Diterima</p>  
            @else
            <p>Ditolak</p>
            @endif
            
            </td>
            @endforeach
            </tr>
             
           </tbody> 
         </table>
       </div>
    </div>
  </div>
</x-master>