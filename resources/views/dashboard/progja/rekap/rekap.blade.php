<x-master title="prestasi">

  <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
    <div class="inner">
      <div class="app-card-body p-1 p-lg-0">
        <h4 class="mb-1 mt-3">Data Program Kerja</h4>
      </div>
    </div>

  </div>
  <div class="container mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
    @endif

    @if(session()->has('done'))
    <div class="alert alert-success">
      {{session('done')}}
    </div>
    @endif

    <div class="app-card shadow-sm ">
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Instruktur</th>
              <th scope="col">Jenis Eskul</th>
              <th scope="col">Periode Waktu</th>
              <th scope="col">Dokument</th>

              <th scope="col">Status</th>

            </tr>
          </thead>
          <tbody>
            <?php $no = 1 ?>
            @foreach ($users as $user )
            @foreach ($user['progja'] as $progja)
            <tr>
              <td>{{$no++}}</td>
              <td> {{ $user['name']}} </td>
              <td> {{ $user->category->name}} </td>

              <td>{{$progja['time']}}</td>

              <td>
                <a href="{{asset('document/'.$progja['document'])}}" download><button class="btn"
                    style="background: green; color:white" type="button">Download</button></a>
              </td>
              <td class="align-items-center justify-center">
                @if($progja['status'] == 1)
                <p style="color: green">Di Terima</p>

                @elseif($progja['status'] == 2)
                <p style="color: red">Di Ditolak</p>
                @else
                <div class="d-flex gap-2">
                  <form action="{{ route('dashboard.validasi', $progja->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary" style="color: white; background:rgb(24, 175, 24)">
                      Validasi </button>
                  </form>

                  <form action="{{ route('dashboard.tolak', $progja->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger" style="color: white"> Tolak </button>
                  </form>
                </div>

                @endif
              </td>
            </tr>
            @endforeach

            @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-master>