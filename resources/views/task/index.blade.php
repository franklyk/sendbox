<x-layout>
    <x-slot:heading>
        Task Page
    </x-slot:heading>
{{-- 
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobList/{{ $job['id'] }}" class="block border border-gray-200 px-4 py-6 rounded-lg">
                @if ('employer')
                    {{ $job->employer->name }}
                @endif
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div> --}}

    </div>
</x-layout>
