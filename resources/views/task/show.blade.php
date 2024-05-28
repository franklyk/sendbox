<x-layout>
    <x-slot:heading>
        Task Page
    </x-slot:heading>
    {{-- {{dd($jobList->employer->user)}} --}}
    <div class="mb-6">
        <h2 class="font-bold text-lg">{{ $task->title }}</h2>
        <p>
            This job pays {{ $task->salary }} per year.
        </p>
    </div>
    <p>
        <x-button href="/task/{{ $task->id }}/edit">Edit task</x-button>
    </p>
    {{-- @can('edit-job', $jobList)
    @endcan --}}
</x-layout>
