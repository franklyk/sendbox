@props(['type' => 'a'])

@if ($type == 'a')
    <a
        {{ $attributes->merge(['class' => 'relative inline-flex items-center bg-red-600 font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border border-red-600 transition ease-in-out duration-150 hover:text-white hover:bg-red-600']) }}>
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'relative inline-flex items-center bg-red-600 font-semibold px-3 py-2 rounded-md text-sm  text-white shadow-sm border border-red-600 transition ease-in-out duration-150 hover:text-red-600 hover:bg-white']) }}>
        {{ $slot }}
    </button>
@endif
