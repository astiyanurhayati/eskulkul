<x-master title="create">

    <div class="container ml-3">
        <div class="app-card rounded w-50 pl-4">
            <h5 class="py-2 rounded" style="padding-left:20px">Edit Informasi Lomba</h5>
        </div>
        <div class="col-8 mb-5">

            <div class="app-card  justify-content-start py-2 px-4  mb-5">
                <form action="{{route('dashboard.info.update', $infolomba->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="title">Link</label>
                        <input type="text" name="link" value="{{$infolomba->link}}" class="form-control @error('title')
                            is-invalid
                        @enderror" id="title" value="{{old('title')}}" placeholder="link info lomba " autofocus>
                        @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                   
                    <div class="mt-3">
                        <select class="form-select form-select @error('category_id')
                                is-invalid
                            @enderror" name="category_id">
                            <option selected disabled>Kategori Prestasi</option>
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control  @error('gambar')
                        is-invalid
                    @enderror" type="file" onchange="previewImage()" name="infoimg" id="infoimg" >
                    @error('gambar')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                    <img src="" id="imgPreview" style="max-width: 100px" class="img-fluid col-sm-5" alt="">
                    </div>

                    

                    <button type="submit" class="btn btn-primary mt-3" style="color: white">Update Informasi Lomba</button>
                </form>
            </div>
        </div>
    </div>

    <script>

        document.addEventListener('trix-file-accept', function(e){
            e.prefentDefault();
        });


        function previewImage(){
            const image = document.getElementById('infoimg');
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