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
                                <th scope="col"></th>

                                <th scope="col">Tanggal</th>
                                
                                <th scope="col">Nama</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Rombel</th>
                                <th scope="col">Rayon</th>
                                <th scope="col">JK</th>
                                <th scope="col">Keterangan</th>
                                <th></th>
                                <th>Action</th>



                        </thead>
                        <tbody>

                            @foreach ($students as $show )

                            <tr>
                                <form action="{{route('dashboard.absensi.store')}}" method="POST">
                                    @csrf
                                    
                                    <td>{{$loop->iteration}}</td>
                                    <td><input type="hidden" name="student_id" value="{{$show->student->id}}"></td>
                                    <td><input type="text" class="form-control" name="tanggal" readonly value="{{$request->tanggal}}"></td>
                                    <td><input type="text" class="form-control" name="name" readonly value="{{$show->student->name}}"></td>
                            
                                    <td><input type="text" class="form-control" readonly  value="{{$show->student->nis}}"></td>
                                    <td><input type="text" class="form-control" readonly  value="{{$show->student->rombel}}"></td>
                                    <td><input type="text" class="form-control" readonly  value="{{$show->student->rayon}}"></td>
                                    <td><input type="text" class="form-control" readonly  value="{{$show->student->jk}}"></td>
                                    <td class="max-w-50">
                                        <select name="keterangan" id="keterangan{{$show->id}}" class="form-select"
                                            onchange="shownote({{ $show->id }})">
                                            <option selected disabled>--option--</option>
                                            <option value="hadir">Hadir</option>
                                            <option value="sakit">Sakit</option>
                                            <option value="izin">Izin</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Keterangan" class="form-control" id="izindesk{{$show->id}}"
                                            style="display: none;">
                                    </td>
                                    <td>
                                        @if($show->keterangan == null)
                                        <button class="btn" style="background: green; color:white">Submit</button>
                                        @else
                                        <p>sudah ya</p>
                                        @endif
                                    </td>

                                </form>

                            </tr>

                            @endforeach



                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>

    <script>

        
        function shownote(id){
            var keterangan = document.getElementById(`keterangan${id}`).value;
            var izindesk = document.getElementById(`izindesk${id}`);

            if (keterangan == "izin") {
                izindesk.style.display = "";
            }else {
                izindesk.style.display = "none";
            }
        }

    </script>
</x-master>