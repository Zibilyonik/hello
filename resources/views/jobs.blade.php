<x-layout>
    <x-slot:heading>
        Job Listies
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id']}}" class="text-blue-400 hover:underline">
                <li><strong>{{ $job['title'] }}</strong>, pays {{ $job['salary'] }}</li>
            </a>
        @endforeach
    </ul>
</x-layout>
