@extends('layout.app')

@section('titulo')
    Curriculum Domingo Curbeira García
@endsection

@section('contenido')
    <div class="bg-white p-10 mt-10">
        <section class="flex flex-col-reverse md:flex-row md:justify-between md:items-center gap-4 section" id="home">
            <div >
                <h1 class="text-4xl leading-normal font-bold mb-5">
                    Hola,
                    <br>
                    Soy <span class="text-sky-400">Domingo</span>
                    <br>
                    FullStack Developer
                </h1>
                <a href="{{ route('curriculum.version') }}" target="_blank" class="bg-sky-600 hover:bg-sky-800 rounded-lg text-white px-5 py-2 font-bold text-lg uppercase mb-5">Ver Curriculum</a>
                <div class="mt-8 flex items-center gap-2 justify-around w-2/6">
                    <a href="https://www.linkedin.com/in/domingo-curbeira-592b7b11b/" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-linkedin-in fa-2xl"></i></a>

                    <a href="https://github.com/Dimanse" class="hover:text-sky-500" target="_blank"><i class="fa-brands fa-github fa-2xl"></i></a>
                </div>
            </div>
            <div>
                <img src="/img/bg_6.png" alt="imagen Domingo" class="w-80">
            </div>

        </section>

        <section class="mt-32 section" id="acerca" value="acerca">
            <h2 class="text-center text-2xl text-sky-600 font-semibold ">Acerca de mi</h2>
            <div class="mt-10 md:flex md:justify-center md:items-center gap-5">
                <div class="md:w-3/12 mb-5 md:mb-0 md:me-5" data-aos="fade-right">
                    <img src="/img/1.png" alt="imagen sobre mi">
                </div>

                <div data-aos="fade-left" class="md:w-8/12 border-2 border-gray-200 shadow-lg p-4">
                    <p class="text-xl text-center">
                        Disfruto mucho del mundo de la programación tanto aprendiendo como desarrollando nuevas apliciones.
                        Trato de estar en pleno aprendizaje de los nuevos frameworks y librerias.
                    </p>

                    <p class="text-xl text-center">Estoy habituado a gestionar y coordinar equipos por mi pasado como jefe de cocina.</p>

                        <p class="text-xl text-center">Puedo aportar  mi experiencia y habilidades en planificación, organización de personas y recursos, negociación de compras, gestión de stocks y control de calidad, habilidades que he desarrollado todos estos años.</p>



                </div>
            </div>
        </section>

        <section class="mt-32 section" id="proyectos">
            <h2 class="text-center text-2xl text-sky-600 font-semibold ">Proyectos

            </h2>
            <div class="mt-32 md:flex md:justify-around md:items-center gap-5">
                <div class="md:w-3/12 border-2 border-gray-300 shadow rounded-lg" data-aos="flip-right">
                    <img src="img/realState.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold">Página inmobiliaria</h3>
                    <div class="flex justify-evenly items-center gap-4 my-10">
                        <a href="https://realstatedimanse.netlify.app" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/agencia_inmobiliaria" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>
                <div class="md:w-3/12 mt-10 md:mt-0 border-2 border-gray-300 shadow  rounded-lg" data-aos="zoom-in">
                    <img src="img/criptomonedas.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold">Cotizador de Criptomonedas</h3>
                    <div class="flex justify-evenly items-center gap-4 my-10">
                        <a href="https://dimansesimuladorcriptomonedas.netlify.app" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/cotizadorCripto" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>

                <div class="md:w-3/12 mt-10 md:mt-0 border-2 border-gray-300 shadow  rounded-lg" data-aos="flip-left">
                    <img src="img/controlapp.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold">Control App, Administrador médico</h3>
                    <div class="flex justify-evenly items-center gap-4 my-10">
                        <a href="https://controlapp.domcloud.dev/login" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/ControlApp-dimanse" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>

            </div>

            <div class="mt-10 md:flex md:justify-around md:items-center gap-5">
                <div class="md:w-3/12 border-2 border-gray-300 shadow rounded-lg" data-aos="zoom-in-right">
                    <img src="img/autos.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold px-1">filtrador de busqueda de autos</h3>
                    <div class="flex justify-evenly items-center gap-4 my-10">
                        <a href="https://dimansebuscadorautos.netlify.app" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/BuscadorAutosDimanse" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>
                <div class="md:w-3/12 mt-10 md:mt-0 border-2 border-gray-300 shadow rounded-lg " data-aos="zoom-out">
                    <img src="img/arquitectura.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold">Agencia de ventas de casas de campo</h3>
                    <div class="flex justify-evenly  items-center gap-4 my-10">
                        <a href="https://casadecampo-dimanse.netlify.app/" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/Agencia-de-ventas-de-casas-de-campo" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>

                </div>

                <div class="md:w-3/12 mt-10 md:mt-0 border-2 border-gray-300 shadow  rounded-lg" data-aos="zoom-in-left">
                    <img src="img/uptask.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold">UpTask, administrador de tareas</h3>
                    <div class="flex justify-evenly items-center gap-4 my-10">
                        <a href="https://uptask-dimanse.domcloud.dev/" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/UpTask_mvc" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>

            </div>

            <div class="mt-10 md:flex md:justify-around md:items-center gap-5">
                <div class="md:w-3/12 border-2 border-gray-300 shadow rounded-lg" data-aos="fade-right">
                    <img src="img/citas.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold px-1">Administrador Pacientes de veterinaria</h3>
                    <div class="flex justify-evenly items-center gap-4 my-10">
                        <a href="https://dimansesimuladorcitas.netlify.app/" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/Administrador-pacientes-veterinaria" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>
                <div class="md:w-3/12 mt-10 md:mt-0 border-2 border-gray-300 shadow rounded-lg" data-aos="zoom-in">
                    <img src="img/guitarra.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold">Página web de tienda de guitarras</h3>
                    <div class="flex justify-evenly  items-center gap-4 my-10">
                        <a href="https://dimansesimuladortiendaguitarras.netlify.app" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/tienda-virtual-de-guitarras" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>

                <div class="md:w-3/12 mt-10 md:mt-0 border-2 border-gray-300 shadow  rounded-lg" data-aos="fade-left">
                    <img src="img/snapshotplus.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold">SnapShotPlus, clon de instagram</h3>
                    <div class="flex justify-evenly items-center gap-4 my-10">
                        <a href="https://snapshotplus-dimanse.domcloud.dev/login" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/SnapShot_Plus" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>

            </div>

            <div class="mt-10 md:flex md:justify-around md:items-center gap-5">
                <div class="md:w-3/12 border-2 border-gray-300 shadow rounded-lg" data-aos="flip-left">
                    <img src="img/diabeticapp.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold px-1">DiabeticApp</h3></h3>
                    <div class="flex justify-evenly items-center gap-4 my-10">
                        <a href="https://diabeticapp.domcloud.dev/" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/DiabeticApp" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>
                <div class="md:w-3/12 mt-10 md:mt-0 border-2 border-gray-300 shadow rounded-lg" data-aos="flip-right">
                    <img src="img/recetas.png" alt="imagen proyecto">
                    <h3 class="text-lg text-center mt-10 font-semibold">Buscador de recetas de cocina</h3>
                    <div class="flex justify-evenly  items-center gap-4 my-10">
                        <a href="https://dimansesimuladorrecetas.netlify.app/" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-chrome fa-2xl"></i></a>
                        <a href="https://github.com/Dimanse/simulador-de-buscador-de-recetas" target="_blank" class="hover:text-sky-500"><i class="fa-brands fa-github fa-2xl"></i></i></a>
                    </div>
                </div>

            </div>
        </section>

        <section class="mt-32 section" data-aos="zoom-in" id="habilidades">
            <h2 class="text-center text-2xl text-sky-600 font-semibold ">Habilidades

            </h2>



            <div class="mt-10">
                <div class="flex items-center justify-evenly gap-5" >
                    <div class="w-2/12 md:w-1/12 flex flex-col itmes-center justify-center" >
                        <img src="img/html.png" alt="imagen html">
                    </div>

                    <div class="w-2/12 md:w-1/12 flex flex-col itmes-center justify-center" >
                        <img src="img/css.png" alt="imagen html">

                    </div>

                    <div class="w-2/12 md:w-1/12 flex flex-col itmes-center justify-center" >
                        <img src="img/javascript.png" alt="imagen html">
                    </div>

                    <div class="w-2/12 md:w-1/12 flex flex-col itmes-center justify-center" >
                        <img src="img/php.png" alt="imagen html">
                    </div>

                    <div class="w-2/12 md:w-1/12 flex flex-col itmes-center justify-center" >
                        <img src="img/sql.png" alt="imagen html" >
                    </div>
                </div>
            </div>



            <div class="mt-10" >
                <div class="flex items-center justify-evenly gap-5">
                    <div class="w-2/12 md:w-1/12 flex flex-col itmes-center justify-center" ">
                        <img src="img/bootstrap.png" alt="imagen html">
                    </div>

                    <div class="w-2/12 md:w-1/12 flex flex-col itmes-center justify-center" >
                        <img src="img/netlify.jpeg" alt="imagen html">
                    </div>

                    <div class="w-2/12 md:w-1/12 flex flex-col itmes-center justify-center">
                        <img src="img/laravel.png" alt="imagen html">
                    </div>

                    <div class="w-12 md:w-1/12 flex flex-col itmes-center justify-center mx-auto md:m-0" >
                        <img src="img/tailwind-css.png" alt="imagen html" class="h-20 mx-auto">

                    </div>
                </div>
            </div>





        </section>

        <section class="mt-32 section" id="contacto">
            <h2 class="text-center text-2xl text-sky-600 font-semibold ">Contacta conmigo

            </h2>
            <div class="mt-10">

                <div class="md:w-7/12 shadow-xl mx-auto p-5 border border-gray-200" data-aos="flip-up">
                    <h5 class="text-center text-lg font-semibold">Ponte en contacto conmigo con alguno de los siguientes métodos</h5>


                        <div class="flex justify-center items-center gap-5 mt-5">
                            <i class="fa-solid fa-envelope fa-lg"></i>
                            <p>domingocurbeira@gmail.com</p>
                        </div>

                        <div class="flex justify-center items-center gap-5 mt-5">
                            <i class="fa-brands fa-whatsapp fa-lg"></i>
                            <p>Tel: +34 639 835 391</p>

                        </div>
                        <div class="flex justify-center items-center gap-5 mt-5">
                            <i class="fa-solid fa-location-dot fa-lg"></i>
                            <p>Desamparados, San Jose, Costa Rica</p>

                        </div>
                        <div class="flex justify-center items-center gap-5 mt-5">

                                <i class="fa-solid fa-pencil fa-lg"></i>
                                <p><a href="{{ route('contacto.create') }}" class="hover:text-sky-500">O rellena el formulario de contacto que encontraras en este enlace</a></p>


                        </div>
                        <h5 class="text-center text-lg mt-5 font-semibold">Te contestaré a la mayor brevedad posible</h5>
                </div>

            </div>
        </section>
    </div>
@endsection
