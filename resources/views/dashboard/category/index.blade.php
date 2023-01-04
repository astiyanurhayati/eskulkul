<x-master title="prestasi">
    
    <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
        <div class="inner">
            <div class="app-card-body p-1 p-lg-0">
                <h4 class="mb-1 mt-3">Kelola Prestasi Siswa</h4>  
            </div>
        </div>
        
    </div>
  <div class="container mr-5">
    <div class="app-card shadow-sm w-50 mx-4   mt-3">
        <div class="table-responsive">
            <table  class="table table-striped">
           <thead>
             <tr>
               <th scope="col">No</th>
               <th scope="col">Nama </th>
              
             </tr>
           </thead>
           <tbody>
            @foreach ($categories as  $category)   
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$category->name}}</td>
            
            </td>

            </tr>
            @endforeach
             
           </tbody>
         </table>
       </div>
    </div>
  </div>
</x-master>