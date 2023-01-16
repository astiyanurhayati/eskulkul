<x-master title="prestasi">

    <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
        <div class="inner">
            <div class="app-card-body p-1 p-lg-0">
                <h4 class="mb-1 mt-3">Absensi Siswa</h4>
                <p>Tanggal {{$request->tanggal}}</p>
                <p>Kelas {{$request->kelas}}</p>
            </div>
        </div>

    </div>
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
   
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
                                <th scope="col">Keterangan</th>
                           


                        </thead>
                        <tbody>

                        @foreach ($students as $show )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                <td>{{$show->student->name}}</td>
                                <td>{{$show->student->nis}}</td>
                                <td>{{$show->student->rombel}}</td>
                                <td>{{$show->student->rayon}}</td>
                                <td>{{$show->student->jk}}</td>
                                <td class="max-w-50">
                                    <select name="keterangan" id="keterangan" class="form-select" onchange="showKeterangan()" >
                                        <option  selected>--option--</option>
                                        <option value="hadir">Hadir</option>
                                        <option value="sakit">Sakit</option>
                                        <option value="izin">Izin</option>
                                      </select>
                                </td>
                              <td>
                                <textarea style="display: none" class="form-control" placeholder="Alasan Izin" id="ket" rows="3"></textarea>
                              </td>
                                    
                                </tr>
                         
                        @endforeach

                      
                        </tbody>
                    </table>
                    <button class="btn btn-primary" style="color:white"> Kirim </button>
                </form>
            </div>
        </div>
 
    </div>
</x-master>