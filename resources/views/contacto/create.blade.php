@extends('layout.app')

@section('titulo')
    formulario de contacto
@endsection

@section('contenido')
    @if(auth()->user()->admin !== 1)
        <x-formulario-contacto  class="mt-32 bg-white"/>
    @endif
    <div class="mt-10">

        <h2 class="text-center text-xl text-sky-500 uppercase">Mensajes</h2>
        @if (auth()->user()->admin === 1)
            <div class="mt-5 ">
                @foreach ($correos as $correo )



                    <div class=" mt-5 bg-white border border-gray-200 shadow-xl md:w-7/12 mx-auto p-4 md:flex md:justify-between items-center ">
                        <div class="">
                            <p class=" flex items-center gap-3 text-gray-500 font-semibold">
                                Nombre:
                                <span class="font-normal text-lg text-gray-700"> {{$correo->name}}</span>
                            </p>

                        </div>


                        <div class="mt-3  md:mt-0">
                            <p class=" flex items-center gap-3 text-gray-500 font-semibold">
                                Asunto:
                                <span class="font-normal text-lg text-gray-700"> {{$correo->asunto}}</span>
                            </p>

                        </div>





                            <div class="mt-7 md:mt-0 flex md:justify-end">

                                    <a
                                        href="{{ route('contacto.show', $correo) }}"
                                        class="bg-red-500 hover:bg-red-700 text-white py-2 px-7  cursor-pointer rounded-lg font-semibold w-full text-center"> Ver mensaje
                                    </a>

                            </div>
                    </div>

                @endforeach
            </div>

        @else
            <div class=" mt-5 bg-white border border-gray-200 shadow-xl md:w-7/12 mx-auto p-4 ">
                <p class="text-center text-lg uppercase" >Total de mensajes recibidos: <span class="font-bold text-3xl text-gray-500">{{$correos->count()}}</span></p>
            </div>
        @endif
    </div>
@endsection
