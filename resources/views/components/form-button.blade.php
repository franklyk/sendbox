

<button {{ $attributes->merge(['class' => ' rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-200 border border-indigo-600 hover:text-black', 'type' => 'submit'])}}> {{ $slot }}</button>

