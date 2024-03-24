@extends('layout.app')

@section('titulo')
    {{ $correo->name}}
@endsection

@section('contenido')

        <div class="mt-10">

            <h2 class="text-center text-xl text-sky-500 uppercase">Mensaje enviado por {{ $correo->name}}</h2>

            <div class="mt-5 ">




                <div class=" mt-5 bg-white border border-gray-300 shadow-xl md:w-7/12 mx-auto p-6 rounded-xl">
                    <div class="">
                        <p class=" flex items-center gap-3 text-gray-500  font-semibold">
                            Nombre:
                            <span class="font-normal  text-gray-700"> {{$correo->name}}</span>
                        </p>

                    </div>

                    <div class="mt-3">
                        <p class=" flex items-center gap-3 text-gray-500  font-semibold">
                            E-mail:
                            <span class="font-normal  text-gray-700"> {{$correo->email}}</span>
                        </p>

                    </div>


                    <div class="mt-3 ">
                        <p class=" flex items-center gap-3 text-gray-500  font-semibold">
                            Asunto:
                            <span class="font-normal  text-gray-700"> {{$correo->asunto}}</span>
                        </p>

                    </div>

                    <div class="mt-3 ">
                        <p class=" flex gap-3 text-gray-500  font-semibold">
                            Mensaje:
                            <span class="font-normal  text-gray-700"> {{$correo->mensaje}}</span>
                        </p>

                    </div>

                    <div class="mt-3 ">
                        <p class=" flex items-center gap-3 text-gray-500  font-semibold">
                            Mensaje enviado:
                            <span class="font-normal  text-gray-700"> {{$correo->created_at->diffForHumans()}}</span>
                        </p>

                    </div>





                    <div class="mt-7 flex flex-col-reverse md:flex-row md:justify-between md:items-center">

                        <a href="{{ route('contacto.store') }}" class="bg-indigo-500 hover:bg-indigo-700 py-2 px-7 text-white font-semibold rounded-lg cursor-pointer w-full text-center  md:w-min">Volver</a>

                        <form method="POST" action=" {{ route('contacto.destroy', $correo) }} ">
                            @method('DELETE')   {{-- Se le conoce como method spoofing  el navegador solo reconoce get y post el método spoofing te permite agregar delete, put, putch... --}}
                            @csrf
                            <input
                                type="submit"
                                value="Eliminar mensaje"
                                class="bg-red-500 hover:bg-red-700 py-2 px-7 text-white font-semibold rounded-lg cursor-pointer w-full text-center mb-5 md:mb-0">
                        </form>

                    </div>


                </div>


            </div>
        </div>

@endsection
