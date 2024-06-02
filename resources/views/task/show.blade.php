<x-layout>
    <x-slot:heading>
        Task Page
    </x-slot:heading>

    <div class="mb-6">
        <h2 class="font-bold text-lg">{{ $task->title }}</h2>
        <p>
            This job pays {{ $task->salary }} per year.
        </p>
    </div>
    {{-- @can('edit-task', $task) utilizando Gate --}}
    {{-- Utilizando policy --}}
    @can('edit', $task)
        <p>
            <x-btn-warning href="/task/{{ $task->id }}/edit">Edit task</x-btn-warning>
        </p>
    @endcan
</x-layout>
