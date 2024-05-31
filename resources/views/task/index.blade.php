<x-layout>
    <x-slot:heading>
        Task Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($tasks as $task)
            <a href="/task/{{ $task->id }}" class="block border border-gray-200 px-4 py-6 rounded-lg">
                @if ('employer')
                    <div class="font-bold text-blue-500 text-sm">
                        {{ $task->employer->name }}
                    </div>
                @endif

                <div>
                    <p>
                        <strong>ID: {{$task->id}}</strong>
                    </p>
                    <p>
                        <strong>{{ $task->title }}</strong>
                    </p>
                    <p>
                        Pays {{ $task->salary }} per year.
                    </p>
                </div>
            </a>
        @endforeach

        <div>
            {{ $tasks->links() }}
        </div>

    </div>
</x-layout>
