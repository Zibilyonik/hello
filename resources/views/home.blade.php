<x-layout>
    <x-slot:heading>
        Home
    </x-slot:heading>
    <h1>Helloing Home</h1>
    @foreach ($jobs as $job)
        <li><strong>{{ $job['title'] }}</strong>, pays {{ $job['salary'] }}</li>
    @endforeach
</x-layout>
