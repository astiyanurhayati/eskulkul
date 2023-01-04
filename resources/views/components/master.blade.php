<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$title}}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}">

    {{-- triks form --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }
</style>
</head>

<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    role="img">
                                    <title>Menu</title>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="col mb-0">
                            <p class="mb-0">Hi ! {{Auth::user()->username}}</p>
                        </div>
                        <!--//app-search-box-->

                        <div class="app-utilities col-auto">



                            <div class="app-utility-item app-user-dropdown dropdown">

                                <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false">
                                    <img src="{{asset('assets/img/team-1-800x800.jpg')}}" alt="" width="100">
                                    {{-- @if(is_null(Auth::user()->image_profile))
                                    <img src="{{asset('assets/img/profile.png')}}" alt="" width="100">
                                    @else
                                    <img style="border-radius: 100%"
                                        src="{{asset('assets/img/'.Auth::user()->image_profile)}}" alt="" width="100">
                                    @endif --}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                    <li><a class="dropdown-item" href="">Account</a></li>
                                    <li><a class="dropdown-item" href="/">Go To Pages</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding">
                    <a class="app-logo" href=""><img class="logo-icon me-2" src="{{asset('assets/img/logoh.png')}}"
                            alt="logo"><span class="logo-text">PPDB Wikrama</span></a>

                </div>

                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled accordion" id="menu-accordion">

                        <li class="nav-item">

                            <a class="nav-link {{(request()->is('dashboard')) ? 'active' : '' }}"
                                href="{{url('/dashboard')}}">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                        <path fill-rule="evenodd"
                                            d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>

                        </li>
                        {{-- @if(Auth::user()->role == "user") --}}
                        <li class="nav-item">

                            <a class="nav-link {{(request()->is('pembayaran')) ? 'active' : '' }}"
                                href="{{url('dashboard/category')}}">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path fill-rule="evenodd"
                                            d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                                        <circle cx="3.5" cy="5.5" r=".5" />
                                        <circle cx="3.5" cy="8" r=".5" />
                                        <circle cx="3.5" cy="10.5" r=".5" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Kategori</span>
                            </a>

                        </li>
                        <li class="nav-item has-submenu">
                            <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                                data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
                                        <path
                                            d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Ekstrakurikuler</span>
                                <span class="submenu-arrow">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </span>
                                
                            </a>
                            <!--//nav-link-->
                            <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                                <ul class="submenu-list list-unstyled">
                                    <li class="submenu-item"><a class="submenu-link" href="{{url('dashboard/prestasi/')}}">Prestasi</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="{{url('dashboard/info')}}">Info Lomba</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="{{url('dashboard/daftar')}}">Daftar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item has-submenu">    
                            <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                                data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Master</span>
                                <span class="submenu-arrow">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </span>
                            </a>
                            <div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
                                <ul class="submenu-list list-unstyled">
                                    <li class="submenu-item"><a class="submenu-link" href="{{url('dashboard/master-student')}}">Master Student</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="{{url('dashboard/rayon')}}">Rayon</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="{{url('dashboard/instructor')}}">instruktur</a></li>
                                    
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="app-sidepanel-footer">
                    <nav class="app-nav app-nav-footer">
                        <ul class="app-menu footer-menu list-unstyled">
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <span class="nav-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Help</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>


    <div class="app-wrapper">

        {{$slot}}

    </div>



    <!-- Javascript -->
    <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>


    <!-- Page Specific JS -->
    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>