<x-master title="create">

    <div class="container ml-3">
        <div class="app-card rounded w-50 pl-4">
            <h5 class="py-2 rounded" style="padding-left:20px">Create Siswa Account</h5>
        </div>
        <div class="col-8 mb-5">

            <div class="app-card  justify-content-start py-2 px-4  mb-5">
                <form action="{{url('dashboard/student/store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nama</label>
                        <input type="text" name="name" class="form-control @error('title')
                            is-invalid
                        @enderror" id="title" value="{{old('name')}}" placeholder="Nama" autofocus>
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nis">Nis</label>
                        <input type="number" name="nis" class="form-control @error('nis')
                            is-invalid
                        @enderror" id="nis" value="{{old('name')}}" placeholder="Nis" >
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                   <div class="mt-3">
                    <select class="form-select" name="rayon">
                        <option disabled selected>--Rayon--</option>
                        @foreach ($rayons as $rayon )
                            
                        <option value="{{$rayon->name}}">{{$rayon->name}}</option>
                        @endforeach
                      </select>
                   </div>

                   <div class="mt-3">
                    <select class="form-select" name="rombel">
                        <option disabled selected>--Rombel--</option>
                        @foreach ($rombels as $rombel )     
                        <option value="{{$rombel->name}}">{{$rombel->name}}</option>
                        @endforeach
                      </select>
                   </div>

                 <div class="mt-3">
                    <select name="jk" class="form-select">
                        <option selected disabled>--JK--</option>
                        <option value="P">Perempuan</option>
                        <option value="L">Laki-laki</option>
                    </select>
                 </div>

                  
               </div>

                    <button type="submit" class="btn btn-primary mt-3" style="color: white">Create Prestasi</button>
                </form>
            </div>
        </div>
    </div>

    <script>
      

        function previewImage(){
            const image = document.getElementById('gambar');
            const imgPreview = document.getElementById('imgPreview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }

        }
    </script>
</x-master>