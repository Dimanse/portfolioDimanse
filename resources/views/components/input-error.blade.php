@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-md text-red-600 border-l-4 border-red-600 bg-red-200 px-5 py-1 text-center font-bold space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
