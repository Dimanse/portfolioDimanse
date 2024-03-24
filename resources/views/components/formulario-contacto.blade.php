<div class="mt-20">
    @if (session('mensaje'))
    <div class="md:w-7/12 shadow-xl mx-auto bg-green-500 mb-6 text-white font-bold uppercase rounded-lg text-center p-2">
        <p>{{session('mensaje')}}</p>

    </div>

    @endif
    <div class="md:w-7/12 shadow-xl mx-auto p-5 bg-white">
    <form action="{{ route('contacto.store') }}" method="POST"  novalidate>
        @csrf

        <div class="mb-5">
            <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                Nombre
            </label>
            <input
                id="name"
                name="name"
                type="text"
                placeholder="Tu Nombre"
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
            <label for="asunto" class="mb-2 block uppercase text-gray-500 font-bold">
                Asunto
            </label>
            <input
                id="asunto"
                name="asunto"
                type="text"
                placeholder="Escribe el asunto de tu mensaje"
                class="border p-3 w-full rounded-lg @error('asunto') border-red-500 @enderror"
                value="{{ old('asunto') }}"
            />
            @error('asunto')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="mensaje" class="mb-2 block uppercase text-gray-500 font-bold">
                Mensaje
            </label>
            <textarea
                            id="mensaje"
                            name="mensaje"
                            placeholder="Escribe tu mensaje"
                            class="border p-3 w-full rounded-lg @error('descripcion') border-red-500 @enderror"
                        >{{ old('mensaje') }}</textarea>
            @error('mensaje')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
            @enderror
        </div>

        <div class="mt-4">

            <input
            type="submit"
            value="Enviar mensaje"
            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
        />
        </div>
    </form>
    </div>
</div>
