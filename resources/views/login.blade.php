
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Login Page</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    {{-- <script defer src="assets/plugins/fontawesome/js/all.min.js"></script> --}}
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}">

</head> 

<body class="app app-login p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">	
					<div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{asset('assets/img/logoh.png')}}" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Log in</h2>
					@if(Session::get('notAllowed'))
					<div class="alert alert-danger">
						{{session('notAllowed')}}
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
					
			        <div class="auth-form-container text-start">
						<form class="auth-form login-form" action="{{route('login.auth')}}" method="POST">       
							@csrf  
							<div class="username mb-3">
								<label class="sr-only" for="username">Username</label>
								<input id="username" name="username" type="text" class="form-control username" placeholder="Username">
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" name="password" type="password" class="form-control signin-password" placeholder="Password">
								
							</div>
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
						</form>
						
						<div class="auth-option text-center pt-5">Belum Punya Akun? <a class="text-link" href="{{url('/form')}}" >Register Terlebih dahulu</a>.</div>
					</div>	

			    </div>
		    </div>
	    </div>
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Esktrakurikuler SMK Wikrama Bogor</h5>
					    <div>Login dan lihat Kelola Aktifitas Siswa </div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div>
    </div>


</body>
</html> 

