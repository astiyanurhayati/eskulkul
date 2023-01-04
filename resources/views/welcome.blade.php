<x-main>

  <body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
      <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
          <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="">SMK WIKRAMA BOGOR</a><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button" onclick="toggleNavbar('example-collapse-navbar')">
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div class="lg:flex rounded flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar">
          <ul class="flex flex-col lg:flex-row list-none mr-auto">
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/landing"><i
                  class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>
                MyEskul</a>
            </li>
          </ul>
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="{{url('/')}}">HOME</a>
            </li>
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="/daftar">Daftar
              </a>
            </li>
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo">jadwal</a>
            </li>
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="{{url('info-lomba')}}">Info Lomba</a>
            </li>
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="{{url('prestasis')}}">Prestasi</a>
            </li>
            <li class="flex items-center">
              <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo">Galeri</a>
            </li>
            <li class="flex items-center">
              @if(Auth::check())
              <a href="{{url('/dashboard')}}">
                <button
                  class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                  type="button" style="transition: all 0.15s ease 0s;">
                  <i class="fa-solid fa-right-to-bracket"></i> Dahboard
                </button>
              </a>
              @else
              <a href="{{url('/login')}}">
                <button
                  class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                  type="button" style="transition: all 0.15s ease 0s;">
                  <i class="fa-solid fa-right-to-bracket"></i> Login
                </button>
              </a>
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("../assets/img/SILAT1.JPG");'>
          <span id="blackOverlay" class="w-full h-full absolute opacity-70 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                  Ekstrakurikuler
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                  SMK WIKRAMA BOGOR
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap  items-center">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold"> KEPUTRIAN</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Kegian Eksul ini di lakukan oleh peserta didik putri di hari jum'at
                  </p>
                </div>
              </div>
            </div>
            <div class=" flex-col flex lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">

              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                    <i class="fas fa-retweet"></i>
                  </div>
                  <h6 class="text-xl font-semibold">UMUM</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Salurkan bakatmu dengan mengikuti berbayai macam ekstrakurikuler
                  </p>
                </div>

              </div>

              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-yellow-400">
                    <i class="fa-solid fa-music"></i>
                  </div>
                  <h6 class="text-xl font-semibold">SENI</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Salurkan bakatmu dengan pelajari berbagai macam kegiatan seni Indonesia
                  </p>
                </div>

              </div>

            </div>


            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                    <i class="fas fa-fingerprint"></i>
                  </div>
                  <h6 class="text-xl font-semibold">PRODUKTIF</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Kegiatan Eskul ini di lakukan oleh peserta didik kelas 11 di hari kamis

                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </section>
      <section class="relative py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('assets/img/juara.JPG')}}" />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div
                  class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                  <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-3xl font-semibold">Tujuan</h3>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                  Adapun tujuan paling utama Program Ekstrakurikuler Wikrama adalah untuk membentuk kepribadian, seperti
                  diungkapkan Iin Mulyani, Kepala SMK Wikrama Bogor.
                </p>

              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-20 pb-48">
        <div class="container px-4 mx-auto">

          <div class=" items-center m-auto">
            <div class="w-ful  px-4">
              <div class="px-6">
                <img alt="..." src="{{asset('assets/img/buel.jpg')}}" class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;" />
                <div class="pt-6justify-center text-center">
                  <h5 class="text-xl font-bold">Elvia Roza, S.Pd. </h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Koordinator Ekstrakurikuler
                  </p>
                  <div class="bg-slate-100 p-10 rounded-sm lg:mx-[200px] mt-6">
                    <p>“ <i>Sebagian besar Ekstrakurikuler yang kita laksanakan sudah membuahkan prestasi di berbagai
                        tingkat, seperti Bola Voli, Pencak Silat, Basket dan yang lainnya. Artinya kami ingin bakat dan
                        minat anak bisa tersalurkan dengan baik</i> ”</p>
                  </div>

                </div>

              </div>

            </div>
          </div>

        </div>
      </section>


      <section class="pb-20 relative block bg-gray-900">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white">Contact</h2>

            </div>
          </div>

        </div>
      </section>
      <section class="relative block py-24 lg:pt-0 bg-gray-900">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                <div class="flex-auto p-5 lg:p-10">
                  <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                  <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                    Complete this form and we will get back to you in 24 hours.
                  </p>
                  <div class="relative w-full mb-3 mt-8">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full
                      Name</label><input type="text"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label><input
                      type="email"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Email" style="transition: all 0.15s ease 0s;" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="message">Message</label><textarea rows="4" cols="80"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Type a message..."></textarea>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                      type="button" style="transition: all 0.15s ease 0s;">
                      Send Message
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="relative bg-gray-300 pt-8 pb-6">
      <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
          version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl font-semibold flex gap-3 align-content-center"> <img
                src="{{asset('assets/img/logoh.png')}}" width="50px" alt=""> SMK Wikrama Bogor</h4>
            <h5 class="text-lg mt-0 mb-2 text-gray-700">
              Amal yang amaliah, Akhlak yang Ilmiah, Akhlakul karimah
            </h5>
            <div class="mt-6">
              <button
                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button">
                <i class="flex fab fa-twitter"></i></button><button
                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button">
                <i class="flex fab fa-facebook-square"></i></button><button
                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button">
                <i class="fa-brands fa-instagram"></i></button><button
                class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button">
                <i class="flex fab fa-github"></i>
              </button>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
              <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful Links</span>
                <ul class="list-unstyled">
                  <li>
                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://www.creative-tim.com/presentation">HOME</a>
                  </li>
                  <li>
                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="/daftar">Daftar</a>
                  </li>
                  <li>
                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://www.github.com/creativetimofficial">Jadwal</a>
                  </li>
                  <li>
                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://www.creative-tim.com/bootstrap-themes/free">Info Lomba</a>
                  </li>
                </ul>
              </div>
              <div class="w-full lg:w-4/12 px-4">

                <ul class="list-unstyled">


                  <li>
                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://creative-tim.com/privacy">Galeri</a>
                  </li>
                  <li>
                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://creative-tim.com/contact-us">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
              Copyright © <a href="">astiyan~</a>

            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script>
    function toggleNavbar(collapseID) {
          document.getElementById(collapseID).classList.toggle("hidden");
          document.getElementById(collapseID).classList.toggle("block");
        }
  </script>
</x-main>