<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>{{ $job['salary'] }} per year.</p>
</x-layout>
