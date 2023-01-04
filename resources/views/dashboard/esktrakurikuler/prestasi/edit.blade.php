<x-master title="create">

    <div class="container ml-3">
        <div class="app-card rounded w-50 pl-4">
            <h5 class="py-2 rounded">Edit Prestasi baru</h5>
        </div>
        <div class="col-8 mb-5">

            <div class="app-card  justify-content-start py-2 px-4  mb-5">
                <form action="{{route('dashboard.prestasi.update',$prestasi->slug)}}" method="POST"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" 
                        id="title" value="{{old('title', $prestasi->title)}}" placeholder="Judul" autofocus>
                        @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        {{-- <label for="slug">Slug</label> --}}
                        <input type="hidden" name="slug" value="{{old('slug', $prestasi->slug)}}" class="form-control  @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" readonly>
                        @error('slug')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
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

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control  @error('gambar') is-invalid @enderror" type="file" name="gambar" id="gambar" onchange="previewImage()">
                        <input type="hidden" name="oldGambar" value="{{$prestasi->gambar}}">
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        
                        @if($prestasi->gambar)
                        <img src="{{asset('storage/'.$prestasi->gambar)}}" class="col-sm-5 mt-1" alt="">
                        @else
                        <img src="" id="imgPreview" class="img-fluid col-sm-5" alt="">
                        @endif

                    </div>
                    <div class="mt-3">
                        <label for="slug">Deskripsi</label>
                        <input id="x" value="{{old('body', $prestasi->body)}}" type="hidden" name="body">
                        <trix-editor input="x"></trix-editor>
                        @error('body')
                        <p style="color: red"> {{$message}} </p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3" style="color: white">Update Prestasi</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const title = document.getElementById('title');
        const slug = document.getElementById('slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/prestasi/checkSlug?title='+title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
            e.prefentDefault();
        });

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