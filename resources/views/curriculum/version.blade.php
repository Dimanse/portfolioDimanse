@extends('layout.app')

@section('titulo')
    versión pdf
@endsection

@section('contenido')
    <section class="bg-white px-10 pt-16 flex justify-between items-start mb-5 ">

            <div class=" border-e-2 border-sky-700 w-6/12">
                <h1 class="text-xl text-sky-700 ">Domingo Curbeira García</h1>
                <div class="mt-3 w-11/12">
                    <p class="text-sm text-gray-700 font-bold">Desarrollador Web fullStack junior</p>
                    <p class="text-xs xl:text-sm text-gray-700 font-light">Un desarrollador web apasionado por la resolución de problemas y la creación de soluciones eficaces para las empresas en línea. He desarrollado portales web para clientes y páginas de aterrizaje para distintos negocios. Me interesa la arquitectura de aplicaciones web</p>
                </div>

                <div class="mt-5 pb-5">
                    <h3 class="uppercase text-sky-700 font-bold">proyectos</h3>
                    <div class="mt-3">
                        <p class="font-sm text-sky-700">Página web para agencia inmobiliaria Real State</p>
                        <p class="text-xs text-gray-700">Utiliza HTML, CSS, Node.js y Sass</p>
                    </div>
                    <div class="mt-3">
                        <p class="font-sm text-sky-700">Aplicación cotizador de criptomonedas</p>
                        <p class="text-xs text-gray-700">Utiliza HTML, CSS y Javascript</p>
                    </div>

                    <div class="mt-3">
                        <p class="font-sm text-sky-700">Administrador médico</p>
                        <p class="text-xs text-gray-700">Utiliza HTML, CSS, PHP y Sass</p>
                    </div>

                    <div class="mt-3">
                        <p class="font-sm text-sky-700">Filtrador de búsqueda de autos</p>
                        <p class="text-xs text-gray-700">Utiliza HTML, CSS y Javascript</p>
                    </div>

                    <div class="mt-3">
                        <p class="font-sm text-sky-700">Agencia de ventas de casas de campo</p>
                        <p class="text-xs text-gray-700">Utiliza HTML, CSS y JavaScript</p>
                    </div>

                    <div class="mt-3">
                        <p class="font-sm text-sky-700">UpTask, Administrador de tareas</p>
                        <p class="text-xs text-gray-700">Utiliza HTML, CSS, PHP, Sass, MVC y Javascript</p>
                    </div>

                    <div class="mt-3">
                        <p class="font-sm text-sky-700">Administrador de pacientes de veterinaria</p>
                        <p class="text-xs text-gray-700">Utiliza HTML, CSS y Javascript</p>
                    </div>

                    <div class="mt-3">
                        <p class="font-sm text-sky-700">Página web de tienda de guitarras</p>
                        <p class="text-xs text-gray-700">Utiliza HTML, Bootstrap y Node.js</p>
                    </div>

                    <div class="mt-3">
                        <p class="font-sm text-sky-700">SnapShotPlus, clon de instagram</p>
                        <p class="text-xs text-gray-700">Utiliza Laravel, Blade, TailwindCSS y Javascript</p>
                    </div>

                    <div class="mt-3">
                        <p class="font-sm text-sky-700">DiabeticApp, Controlador de glucemías</p>
                        <p class="text-xs text-gray-700">Utiliza Laravel, Blade, TailwindCSS y Javascript</p>
                    </div>

                    <div class="mt-3 ">
                        <p class="font-sm text-sky-700">Buscador de recetas de cocina</p>
                        <p class="text-xs text-gray-700">Utiliza HTML, CSS y JavaScript </p>
                    </div>
                </div>

            </div>
            <div class="mt-2 w-6/12 ps-10">
                <div class="pt-10"></div>
                <div class=" -ms-12 bg-white py-1 flex">
                    <div class=" flex flex-col  me-4 text-sky-700">
                        <i class="fa-solid fa-envelope mb-2"></i>
                        <i class="fa-solid fa-phone mb-2"></i>
                        <i class="fa-brands fa-whatsapp mb-2"></i>
                        <i class="fa-solid fa-location-dot mb-2"></i>
                        <i class="fa-brands fa-github "></i>
                    </div>


                    <div class="flex flex-col">

                        <p class="text-xs text-sky-700 font-light mb-2"> domingocurbeira@gmail.com</p>
                        <p class="text-xs text-sky-700 font-light mb-2"> +506 6043 7179</p>
                        <p class="text-xs text-sky-700 font-light mb-2">+34639835391</p>
                        <p class="text-xs text-sky-700 font-light mb-2">Desamparados, San José, CR.</p>

                        <p class="text-xs text-sky-700 font-light ">https://github.com/Dimanse</p>

                    </div>
                </div>

                <div class="mt-5">
                    <h3 class="uppercase text-sky-700 font-bold">Habilidades</h3>


                    <div class="mt-3">
                        <p class="font-sm text-sky-700">Lenguajes de programación</p>
                        <p class="text-xs text-gray-700 font-semibold">HTML, CSS, JavaScript, PHP.</p>
                    </div>

                    <div class="mt-3">
                        <p class="font-sm text-sky-700">Frameworks:</p>
                        <p class="text-xs text-gray-700 font-semibold">Node.js, Laravrel, Bootstrap, TailwindCSS</p>
                    </div>
                </div>

                <div class="mt-5">
                    <h3 class="uppercase text-sky-700 font-bold">Educación</h3>
                    <div class="mt-3">
                        <p class="text-xs text-gray-700">Plataforma de aprendizaje en Linea <span class="font-semibold">Udemy</span></p>
                    </div>
                </div>

                <div class="mt-5">
                    <h3 class="uppercase text-sky-700 font-bold">Certificados</h3>
                    <div class="mt-2">
                        <p class="text-xs text-gray-700 font-semibold">JavaScript Moderno  <span class="font-light"> La guía Definitiva</span></p>
                    </div>
                    <div class="mt-2">
                        <p class="text-xs text-gray-700 font-semibold">Bootstrap 5 y SASS <span class="font-light">La Guía Práctica</span></p>
                    </div>
                    <div class="mt-2">
                        <p class="text-xs text-gray-700 font-semibold">CSS <span class="font-light">La Guía Completa</span></p>
                    </div>
                    <div class="mt-2">
                        <p class="text-xs text-gray-700 font-semibold">Desarrollo Web Completo <span class="font-light">con HTML5, CSS3, JS AJAX PHP Y MySQL</span></p>
                    </div>


                </div>

            </div>



    </section>
    <div class="print:hidden">
        <a href="./img/Curriculum.pdf" download="Curriculum.pdf" class="bg-sky-600 text-white uppercase px-10 py-2 rounded-lg ">Descargar PDF</a>
    </div>
@endsection



