<x-master title="dashbaord">
<div class="container">
    {{-- @if(Auth::user()->role == "user")
    <h1 class="app-page-title">Student Dashboard</h1>
@elseif (Auth::user()->role == "admin")
    <h1 class="app-page-title">Admin Dashbaord</h1>
@endif --}}

<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration mt-5" role="alert">
    <div class="inner">
        <div class="app-card-body p-3 p-lg-4">
            <h4 class="mb-3">Hi {{Auth::user()->username}}!</h4>
            <div class="row gx-5 gy-3">
                <div class="col-12 col-lg-9">
                    <div>Selamat Datang!</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</x-master>