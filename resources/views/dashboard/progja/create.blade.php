<x-master title="create">

    <div class="container ml-3">
        <div class="app-card rounded w-50 pl-4">
            <h5 class="py-2 rounded" style="padding-left:20px">Create Program Kerja Persemester </h5>
        </div>
        <div class="col-8 mb-5">

            <div class="app-card  justify-content-start py-2 px-4  mb-5">
                <form action="{{route('dashboardprogja.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                   
                   <div class="mt-3">
                    <select class="form-select" name="time">
                        <option disabled selected>--Waktu--</option>
                        <option value="semester 1">Semester 1</option>
                        <option value="semester 2">Semester 2</option>
                        <option value="semester 3">Semester 3</option>
                        <option value="semester 4">Semester 4</option>
                        <option value="semester 5">Semester 5</option>
                        <option value="semester 6">Semester 6</option>
                      </select>
                   </div>
                   <div class="mt-3">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">File</label>
                        <input class="form-control" type="file" name="document" id="formFile">
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