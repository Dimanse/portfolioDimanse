<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Curriculum - @yield('titulo')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="{{asset('js/app.js')}}" defer></script>
        {{-- @livewireStyles --}}
    </head>
    <body class="font-serif bg-sky-50 ">
       <header class="border-b-2 border-gray-300 p-5 bg-white print:hidden">

            <div class="md:flex md:justify-between md:items-center  md:px-20 ">
                <div class="barra_mobile w-full flex justify-around md:justify-between items-center md:ps-10">
                    <div>
                        <a href="{{ route('curriculum.index') }}" class="text-2xl text-gray-500 hover:text-gray-600 cursor-pointer">Domingo <span class="font-extrabold text-gray-600 hover:text-gray-800"> Curbeira</span></a>
                    </div>

                    <div class="menu">
                        <img src="/img/menu copy.svg" alt="imagen menu" class="mobile-menu" id="mobile-menu">
                    </div>

                </div>

                    <section class="ventana ocultar bg-sky-50" id="ventana_modal">
                        <div class="w-full ">
                            <h2 class="text-4xl uppercase text-sky-700 font-extrabold text-center my-5">Menú</h2>




                                <nav class=" gap-4 font-bold font-serif text-lg text-gray-800 ">
                                    <div class="hover:border-y-4 hover:border-sky-500  flex justify-center mt-5">
                                        <a href="#home" class="enlace text-center">Home</a>
                                    </div>
                                    <div class="hover:border-y-4 hover:border-sky-500 flex justify-center">
                                        <a class="enlace" href="#acerca">Acerca</a>
                                    </div>
                                    <div class="hover:border-y-4 hover:border-sky-500 flex justify-center">
                                        <a class="enlace" href="#proyectos">Proyectos</a>
                                    </div>
                                    <div class="hover:border-y-4 hover:border-sky-500 flex justify-center">
                                        <a class="enlace" href="#habilidades">Habilidades</a>
                                    </div>
                                    <div class="hover:border-y-4 hover:border-sky-500 flex justify-center">
                                        <a class="enlace" href="#contacto">Contacto</a>
                                    </div>
                                </nav>

                                @if(auth()->user() === null)

                                <div class="mt-5 md:mt-0">
                                    <a href="{{ route('login') }}" class="uppercase text-sm bg-sky-700 px-3 py-2 w-64 mx-auto text-white hover:bg-sky-800 rounded-lg font-bold cursor-pointer flex justify-center items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                                        </svg>

                                        Login
                                    </a>
                                </div>





                        @else

                            <div class="mt-5 md:mt-0">
                                <p class="uppercase text-lg text-center text-sky-700  font-bold ">
                                    <i class="fa-regular fa-user"></i>
                                    {{auth()->user()->name}}
                                </p>
                            </div>



                        @endif




                            <div class="opciones mt-5">

                                <button type="button" class="cerrar-modal uppercase text-sm bg-red-500 px-3 py-2 w-64 mx-auto text-white hover:bg-red-600 rounded-lg font-bold cursor-pointer flex justify-center items-center gap-1">Cerrar</button>
                            </div>
                        </div>
                    </section>



                <div class="barra flex justify-around space-x-10 items-center md:pe-10">

                    <nav class="flex justify-around items-center gap-4 font-bold font-serif text-lg text-gray-800">
                        <div class="hover:border-y-4 hover:border-sky-500 ">
                            <a href="#home" class="enlace">Home</a>
                        </div>
                        <div class="hover:border-y-4 hover:border-sky-500 ">
                            <a class="enlace" href="#acerca">Acerca</a>
                        </div>
                        <div class="hover:border-y-4 hover:border-sky-500 ">
                            <a class="enlace" href="#proyectos">Proyectos</a>
                        </div>
                        <div class="hover:border-y-4 hover:border-sky-500 ">
                            <a class="enlace" href="#habilidades">Habilidades</a>
                        </div>
                        <div class="hover:border-y-4 hover:border-sky-500 ">
                            <a class="enlace" href="#contacto">Contacto</a>
                        </div>
                    </nav>

                    @if(auth()->user() === null)


                    <div class="mt-5 md:mt-0">
                        <a href="{{ route('login') }}" class="uppercase text-sm bg-sky-700 px-3 py-2 text-white hover:bg-sky-800 rounded-lg font-bold cursor-pointer flex justify-center items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                            </svg>

                            Login
                        </a>
                    </div>





                     @else

                        <div class="mt-5 md:mt-0 ">
                            <p class="uppercase text-lg text-center text-sky-700  font-bold flex items-center gap-1">
                                <i class="fa-regular fa-user "></i>
                                {{auth()->user()->name}}
                            </p>
                        </div>


                    @endif

                </div>



            </div>

       </header>

       <main class="container w-11/12 mx-auto main">
            @yield('contenido')
       </main>

       <div class="mt-32 print:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0ea5e9" fill-opacity="1" d="M0,256L26.7,224C53.3,192,107,128,160,138.7C213.3,149,267,235,320,245.3C373.3,256,427,192,480,154.7C533.3,117,587,107,640,96C693.3,85,747,75,800,64C853.3,53,907,43,960,80C1013.3,117,1067,203,1120,213.3C1173.3,224,1227,160,1280,112C1333.3,64,1387,32,1413,16L1440,0L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
            </svg>
       </div>
       <footer class="-mt-3 text-xl text-white text-center py-32 bg-sky-500 print:hidden">
         <p class="w-10/12 mx-auto ">Creado por: <span class="font-bold" >Domingo Curbeira García</span> - Todos los derechos reservados &copy; - {{ now()->year }}</p>
    </footer>


        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>

</html>
