<x-layout>
    <x-slot:heading>
        Edit Job: {{ $task->title }}
    </x-slot:heading>

    <form method="POST" action="/task/{{ $task->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label>{{ __('Title')}}</x-form-label>
                        <div class="mt-2">
                            <x-form-input value="{{ $task->title }}" required></x-form-input>

                            @error('title')
                                <p class="mt-2 text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-label>{{ __('Salary')}}</x-form-label>
                        <x-form-input value="{{ $task->salary }}" required></x-form-input>
                        <div class="mt-2">

                            @error('salary')
                                <p class="mt-2 text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <x-btn-danger type='submit'>{{ __('Delete')}}</x-btn-danger>
            </div>

            <div class="flex items-center gap-x-6">
                <x-btn-warning href="/task/{{ $task->id }}">{{ __('Cancel')}}</x-btn-warning>

                <div>
                    <x-btn-info type="submit">{{ __('Update')}}</x-btn-info>
                </div>
            </div>
        </div>
    </form>
    <form method="POST" action="/task/{{ $task->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>


</x-layout>
