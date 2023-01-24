<x-master title="create">

    <div class="container ml-3">
        <div class="app-card rounded w-50 pl-4 mt-5">
            <h5 class="py-2 rounded" style="padding-left:20px">Select Eskul Siswa</h5>
        </div>
        <div class="col-8 mb-5">

            <div class="app-card  justify-content-start py-2 px-4  mb-5">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{url('dashboard/eksul-siswa/store')}}" method="POST">
                    @csrf
                    <div class="mt-3 mb-5">
                        <label for="">Nama Siswa</label>
                        <select class="form-select" id="name" name="name">
                            <option disabled selected>--Nama Siswa--</option>
                            @foreach ($names as $name )
                            <option value="{{$name->id}}">{{$name->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <h5>Pilih Eskul Siswa</h3>
                        <div class="form-group">
                            <label for="">Umum</label>
                            @foreach ($umum as $item )
                            @if(!$item->category_id == null)
                            <div class="form-check">
                                <input class="form-check-input" name="{{$item->category->name}}[]" type="checkbox"
                                    value="{{$item->id}}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$item->eskul_name}}
                                </label>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="">Produktif</label>
                            @foreach ($produktif as $item )
                            @if(!$item->category_id == null)
                            <div class="form-check">
                                <input class="form-check-input" name="{{$item->category->name}}[]" type="checkbox"
                                    value="{{$item->id}}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$item->eskul_name}}
                                </label>
                            </div>
                            @endif
                            @endforeach
                        </div>

                        
                        <label for="">Keputrian</label>
                        @foreach ($keputrian as $item )
                        @if(!$item->category_id == null)

                        <div class="form-check">
                            <input class="form-check-input" name="{{$item->category->name}}[]" type="checkbox"
                                value="{{$item->id}}" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$item->eskul_name}}
                            </label>
                        </div>
                        @endif
                        @endforeach

                        <div class="form-group">
                            <label for="">Seni</label>
                            @foreach ($seni as $item )
                            @if(!$item->category_id == null)
                            <div class="form-check">
                                <input class="form-check-input" name="{{$item->category->name}}[]" type="checkbox"
                                    value="{{$item->id}}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$item->eskul_name}}
                                </label>
                            </div>
                            @endif
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary" style="color: white">Submit</button>
        </div>

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
    <script>
        $(document).ready(function () {
            $("#name").select2({
                theme: 'bootstrap4',
            });
        });
    </script>
</x-master>