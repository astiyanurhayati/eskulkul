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
    <section class="d-flex justify-content-between px-5 mt-5">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <form action="{{route('dashboard.absensi.redirect')}}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal</span>
                            <input type="date" name="tanggal" class="form-control">
                        </div>
                        <select class="form-select" name="kelas">
                            <option disabled selected>Kelas</option>
                            <option value="X">10</option>
                            <option value="XI">11</option>
                            <option value="XII">12</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="color: white">Buat Absensi</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <button class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="background: rgb(176, 91, 18); color:white">+ Absen Siswa</button>

        <div class="max-w-50 col-5">
            <form action="{{route('dashboard.absensi.index')}}">
             <div class="input-group gap-3 ">
                 <input 
                   type="text" 
                   class="form-control" 
                   placeholder="Filter"
                   value="{{Request::get('name')}}"
                   name="name" placeholder="search">
                   
                 <div class="input-group-append ml-5">
                   <input 
                     type="submit" 
                     value="Filter" 
                     class="btn btn-primary" style="color:white">
                 </div>
             </div>
            </form>
         </div>
    </section>
    <div class="container mt-3">
    
        <div class="app-card shadow-sm">
            <div class="table-responsive">
                <form action="{{url('dashboard/absensi/store')}}" method="POST">
                    @csrf
                    <table class="table table-striped">
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

                            @foreach ($masterStudent as $item )
                            @foreach ($item->students as $show )
                                
                            
                            <tr>
                                <td>{{$loop->iteration}}</td>   
                                <td>{{$show->name}}</td>
                                <td>{{$show->nis}}</td>
                                <td>{{$show->rombel}}</td>
                                <td>{{$show->rayon}}</td>
                                <td>{{$show->jk}}</td>
                                
                            </tr>
                            @endforeach
                            @endforeach
                     
                            {{-- <td class="d-flex gap-1">
                                <a href="{{route('dashboard.student.edit', $student->slug)}}"> <button
                                        class="btn btn-danger" style="color: white">edit</button></a>

                                <a href="{{url('student', $student->slug)}}"> <button class="btn"
                                        style="background: orange; color:white">
                                        Detail</button></a>

                                <form action="" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary" type="submit" style="color: white">delete</button>
                                </form>
                                --}}
                            </td>



                        </tbody>
                    </table>
                 
                </form>
            </div>
        </div>
      
    </div>
</x-master>