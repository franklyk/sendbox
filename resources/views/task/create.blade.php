<x-layout>
    <x-slot:heading>
        Create Task
    </x-slot:heading>

    <form method="POST" action="/task">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful
                    what you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>

                        <x-form-label for="title">{{ __('Title') }}</x-form-label>
                        <x-form-input name="title" id="title" placeholder="CEO" required />

                        <div class="mt-2">
                            <x-form-error name="title" />
                        </div>

                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">{{ __('Salary') }}</x-form-label>

                        <x-form-input name="salary" id="salary" placeholder="$ 50.000,00 USD" required />
                        <div class="mt-2">
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>


            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/task" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>

        </div>
    </form>


</x-layout>
