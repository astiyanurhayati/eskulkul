<x-master title="create">

    <div class="container ml-3 mt-5">
        <div class="app-card rounded w-50 pl-4">
            <h5 class="py-2 rounded" style="padding-left:20px"> Create Rayon </h5>
        </div>
        <div class="col-8 mb-5">

            <div class="app-card  justify-content-start py-2 px-4  mb-5">
                <form action="{{url('dashboard/rayon')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="name" type="text" class="form-control" placeholder="Nama">
                    </div>
                  
                    <button type="submit" class="btn btn-primary mt-3" style="color: white">Create Rayon </button>
                </form>
            </div>
        </div>
    </div>

    
</x-master>