<x-layout>
    <x-slot:heading>
        Job Listies
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a>
                <li><strong>{{ $job['title'] }}</strong>, pays {{ $job['salary'] }}</li>
            </a>
        @endforeach
    </ul>
</x-layout>
