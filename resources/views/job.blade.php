<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p>{{ $job->salary }} per year.</p>
    <p>Hired by {{ $job->employer->name }}.</p>
</x-layout>
