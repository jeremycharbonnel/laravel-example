<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p>{{ $job->salary }} per year.</p>
    <p>Hired by {{ $job->employer->name }}.</p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
    </p>
</x-layout>
