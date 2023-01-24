<x-master title="Info Lomba">

  <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
    <div class="inner">
      <div class="app-card-body p-1 p-lg-0">
        <h4 class="mb-1 mt-3">Kelola Informasi Lomba</h4>
      </div>
    </div>

  </div>
  <div class="container mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
    @endif
    <a href="{{url('dashboard/info/create')}}"> <button class="btn btn-primary mb-2" style="color: white">+
        Informasi</button></a>
    <div class="app-card shadow-sm">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
           @forelse ( $infoLomba as $info)
            <!-- Modal -->
            <div class="modal fade" id="{{str_replace('.', '' , $info->infoimg) . $info->id}}" tabindex="-1" aria-labelledby="{{str_replace('.', '' , $info->infoimg) . $info->id}}Label"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="{{str_replace('.', '' , $info->infoimg) . $info->id}}Label">{{$info->category->name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                   <img src="{{asset('info/'.$info->infoimg)}}" alt="">
                   <p class="mt-5">link: <a href="{{$info->link}}">{{$info->link}}</a></p>
                  </div>
              
                </div>
              </div>
            </div>
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$info->category->name}}</td>
              <td class="d-flex gap-1">
                <a href="{{route('dashboard.edit', $info->id)}}"> <button class="btn btn-danger" style="color: white">Edit</button></a>
                <a href="#"> <button data-bs-toggle="modal" data-bs-target="#{{str_replace('.', '' , $info->infoimg) . $info->id}}" class="btn btn-danger"
                    style="color: white; background-color:orange">Detail</button></a>



                <form action="{{route('dashboard.info.delete', $info->id)}}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-primary" type="submit" style="color: white">Hapus</button>
                </form>

                @empty
                <tr>
                  <td class="text-center" colspan="6">
                      Empty
                  </td>
              </tr>
              @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-master>