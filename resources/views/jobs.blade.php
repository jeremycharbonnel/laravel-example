<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job->id }}">
                <strong class="underline text-blue-400">{{ $job->title }}</strong>: {{ $job->salary }} per year.
            </a>
        </li>
    @endforeach
</x-layout>
