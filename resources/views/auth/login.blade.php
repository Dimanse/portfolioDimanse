@extends('layout.app')

@section('titulo')
    Login
@endsection

@section('contenido')
    <div class="mt-32">
        <h2 class="text-center font-bold text-xl uppercase text-sky-500">Inicia Sesión</h2>

        <div class="md:w-5/12 bg-white shadow-xl rounded border border-gray-200 mx-auto mt-16 p-5">


            <form action="{{ route('login') }}" method="POST"  novalidate>
                @csrf

                @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }} </p>
                @endif


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
                    <input type="checkbox" name="remember" id="">
                        <label class="text-gray-500 font-bold text-sm">
                            Mantener mi sesión abierta
                        </label>

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
                    <a href="{{ route('registro.index') }}" class="text-sm text-sky-500 hover:text-sky-800">Registro</a>
                </div>
            </form>

        </div>
    </div>
@endsection
