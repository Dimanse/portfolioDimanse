@extends('layout.app')

@section('titulo')
    Actualiza tu password
@endsection

@section('contenido')
<div class="mt-32">
    <h2 class="text-center font-bold text-xl uppercase text-sky-500">Inicia Sesión</h2>

    <div class="md:w-5/12 bg-white shadow-xl rounded border border-gray-200 mx-auto mt-16 p-5">


        <form action="{{ route('actualizar.store') }}" method="POST"  novalidate>
            @csrf

            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }} </p>
            @endif


            <div class="mb-5">
                <label for="new_password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input
                id="new_password"
                name="new_password"
                type="password"
                placeholder="Escribe tu nuevo password"
                class="border p-3 w-full rounded-lg @error('new_password') border-red-500 @enderror"
                />
                @error('new_password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="confirm_password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Confirmar password
                </label>
                <input
                id="confirm_password"
                name="confirm_password"
                type="password"
                placeholder="Confirma tu nuevo password"
                class="border p-3 w-full rounded-lg @error('confirm_password') border-red-500 @enderror"
                />
                @error('confirm_password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>





            <div class="mt-4">

                <input
                type="submit"
                value="Guardar Cambios"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
            />
            </div>

            <div class="mt-5 flex justify-evenly items-center">
                <a href="{{ route('login') }}" class="text-sm text-sky-500 hover:text-sky-800">Iniciar Sesión</a>
                <a href="{{ route('registro.index') }}" class="text-sm text-sky-500 hover:text-sky-800">Registro</a>
            </div>
        </form>

    </div>
</div>
@endsection
