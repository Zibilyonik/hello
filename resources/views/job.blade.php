<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1 class="font-bold text-2xl text-pink-500">{{ $job['title'] }}</h1>
    <p>This boi pays {{ $job['salary'] }}</p>
</x-layout>
