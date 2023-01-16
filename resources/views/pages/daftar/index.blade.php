@include('components.navbar')
<style>
    #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: rgb(0, 60, 255);
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 50%;
  scroll-behavior: smooth;
  width: 45px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<x-main>

    <div class="container pt-20 px-12 mb-20">
        <h1 class="font-bold text-xl text-center">Daftar Esktrakurikuler</h1>

        <section class="mt-5 lg:mx-[100px]">
            <div class="h2 font-bold underline decoration-sky-500">Ektrakurikuler Umum</div>
            
            
            @foreach ( $umum as $um )
            <a href="{{url('daftar', $um->slug)}}">
                <div class="content mt-5 md:w-[700px] lg:w-full bg-blue-400 py-5 px-10 text-white rounded shadow-md hover:bg-blue-500 transition">
                    <div class="umum flex items-center gap-4 ">
                        <i class="fas fa-basketball-ball"></i>
                        <p class="font-bold">{{$um->title}}</p>
                    </div>
                </div>
                
            </a>
            @endforeach
        </section>
        <section class="mt-10 lg:mx-[100px]">
            <div class="h2 font-bold underline decoration-green-500">Ektrakurikuler Produktif</div>

            @foreach ($produktif as $pro )
                
            <a href="{{url('daftar', $pro->slug)}}">
                <div class="content mt-5 md:w-[700px] lg:w-full bg-green-400 py-5 px-10 text-white rounded shadow-md hover:bg-green-500 transition">
                    <div class="umum flex items-center gap-4 ">
                        <i class="fas fa-basketball-ball"></i>
                        <p class="font-bold">{{$pro->title}}</p>
                    </div>
                </div>
                
            </a>
            @endforeach
        </section>

        <section class="mt-10 lg:mx-[100px]">
            <div class="h2 font-bold underline decoration-yellow-500">Ektrakurikuler Seni</div>
            @foreach ($seni as $sen )

            <a href="{{url('daftar', $sen->slug)}}">
                <div class="content mt-5 md:w-[700px] lg:w-full bg-yellow-300 py-5 px-10 text-white rounded shadow-md hover:bg-yellow-200 transition">
                    <div class="umum flex items-center gap-4 ">
                  
                  <p class="font-bold">{{$sen->title}}</p>
                    </div>
                </div>
               
            </a>
            @endforeach
        </section>

        <section class="mt-10 lg:mx-[100px]">
            <div class="h2 font-bold underline decoration-red-500">Keputrian</div>
            @foreach ($keputrian as $kepu )

            <a href="{{url('daftar', $kepu->slug)}}">
                <div class="content mt-5 md:w-[700px] lg:w-full bg-red-400 py-5 px-10 text-white rounded shadow-md hover:bg-red-300 transition">
                    <div class="umum flex items-center gap-4 ">
                  <i class="fas fa-basketball-ball"></i>
                  <p class="font-bold">{{$kepu->title}}</p>
                    </div>
                </div>
               
            </a>
            @endforeach
        </section>

    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"> <i class="fa fa-arrow-up" aria-hidden="true"></i> </button>
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>

       
</x-main>