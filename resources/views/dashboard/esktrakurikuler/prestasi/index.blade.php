<x-master title="prestasi">

  <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
    <div class="inner">
      <div class="app-card-body p-1 p-lg-0">
        <h4 class="mb-1 mt-3">Kelola Prestasi Siswa</h4>
      </div>
    </div>

  </div>
  <div class="container mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
    @endif
    <a href="{{url('dashboard/prestasi/create')}}"> <button class="btn btn-primary mb-2" style="color: white">+
        Prestasi</button></a>
    <div class="app-card shadow-sm">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $prestasis as $prestasi)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$prestasi->title}}</td>
              <td>{{$prestasi->category->name}}</td>
              <td class="d-flex gap-1">
                <a href="{{route('dashboard.prestasi.edit', $prestasi->slug)}}"> <button class="btn btn-danger"
                    style="color: white">Edit</button></a>

                <a href="{{url('prestasi/'.$prestasi->slug)}}"> <button class="btn"
                    style="background: orange; color:white">Detail</button></a>

                <form action="{{url('dashboard/prestasi/delete/'.$prestasi->slug)}}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-primary" type="submit" style="color: white">Hapus</button>
                </form>

              </td>

            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-master>