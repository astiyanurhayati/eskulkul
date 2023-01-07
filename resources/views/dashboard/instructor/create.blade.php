<x-master title="create">

    <div class="container ml-3">
        <div class="app-card rounded w-50 pl-4">
            <h5 class="py-2 rounded" style="padding-left:20px"> Create Instruktur Account </h5>
        </div>
        <div class="col-8 mb-5">

            <div class="app-card  justify-content-start py-2 px-4  mb-5">
                <form action="{{url('dashboard/instructor')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="name" type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group mt-3">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group mt-3">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" placeholder="Email">
                    </div>
                   
                   <div class="form-group mt-3">
                    <label>Nama Eskul</label>
                    <input name="eskul_name" type="text" class="form-control" placeholder="Nama Eskul">
                </div>
               <div class="mt-3">
                <select class="form-select" name="category_id">
                    <option disabled selected>--Kategori Eskul--</option>
                    @foreach ( $categories as $category )
                        
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                
                  </select>
               </div>
                   
                   <div class="form-group mt-3">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                    <button type="submit" class="btn btn-primary mt-3" style="color: white">Create akun </button>
                </form>
            </div>
        </div>
    </div>

    
</x-master>