<x-layout>
    <x-slot:heading>
        Log in
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-1">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="email">{{ __('E-mail') }}</x-form-label>

                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" :value="old('email')" required />
                            @error('email')
                                <p class="mt-2 text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">{{ __('Password') }}</x-form-label>

                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" required />
                            @error('password')
                                <p class="mt-2 text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </x-form-field>

                </div>

            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-btn-warning href="/">Cancel</x-btn-warning>
            <x-btn-info type="submit">Log in</x-btn-info>

        </div>
    </form>


</x-layout>
