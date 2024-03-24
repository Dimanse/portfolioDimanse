@extends('layout.app')

@section('titulo')
    Registro
@endsection

@section('contenido')
<div class="mt-32">
    <h2 class="text-center font-bold text-xl uppercase text-sky-500">Registro</h2>

    <div class="md:w-5/12 bg-white shadow-xl rounded border border-gray-200 mx-auto mt-16 p-5">


        <form action="{{ route('registro.store') }}" method="POST"  novalidate>
            @csrf

            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }} </p>
            @endif


            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input
                id="name"
                name="name"
                type="text"
                placeholder="Escribe tu nombre"
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                value="{{ old('name') }}"
                />
                @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input
                id="email"
                name="email"
                type="email"
                placeholder="Escribe tu email de contacto"
                class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                value="{{ old('email') }}"
                />
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password:
                </label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Escribe tu password"
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                />

                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Confirma tu password:
                </label>
                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Repite aquí tu password"
                    class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500 @enderror"
                />

                @error('password_confirmation')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>





            <div class="mt-4">

                <input
                type="submit"
                value="Iniciar Sesión"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
            />
            </div>
            <div class="mt-5 flex justify-evenly items-center">
                <a href="{{ route('actualizar.index') }}" class="text-sm text-sky-500 hover:text-sky-800">Cambiar password</a>
                <a href="{{ route('login') }}" class="text-sm text-sky-500 hover:text-sky-800">Inicia Sesión</a>
            </div>

        </form>

    </div>
</div>
@endsection
