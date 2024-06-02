@props(['type' => 'a'])

@if ($type == 'a')
    <a
        {{ $attributes->merge(['class' => 'relative inline-flex items-center bg-indigo-600 font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border border-indigo-600 transition ease-in-out duration-150 hover:text-indigo-600 hover:bg-white']) }}>
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'relative inline-flex items-center bg-indigo-600 font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border border-indigo-600 transition ease-in-out duration-150 hover:text-indigo-600 hover:bg-white']) }}>
        {{ $slot }}
    </button>
@endif
