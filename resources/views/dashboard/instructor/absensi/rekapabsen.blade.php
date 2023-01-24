<x-master title="Rekap Absensi">
        <div class="app-card alert alert-dismissible shadow-sm mb-1 border-left-decoration mt-4 mx-5" role="alert">
            <div class="inner">
                <div class="app-card-body p-1 p-lg-0">
                    <h4 class="mb-1 mt-3">Data All Siswa</h4>
                </div>
            </div>
    
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
     
        <div class="container mt-3">
           <div class="d-flex align-items-start bd-highlight">
               <p class="flex-grow-1 bd-highlight">Tangal: 23 Januari 2033</p>
            <select class="form-select w-25 bd-highlight" aria-label="Default select example">
                <option selected>Kelas</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <div class="mb-3 w-25 bd-highlight ml-3">
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
           </div>
            <div class="app-card shadow-sm">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Rombel</th>
                            <th scope="col">Rayon</th>
                            <th scope="col">Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>asti</td>
                            <td>pplg xi-4</td>
                            <td>Cisarua 1</td>
                            <td>Hadir</td>
                          </tr>
                          
                        </tbody>
                      </table> 
                </div>
            </div>
          
        </div>
</x-master>