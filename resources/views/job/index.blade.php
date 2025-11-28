<x-layout>
    @foreach($jobs as $index => $job)
        <x-card class="mb-0">
            <p>{{ $job->title }}</p>
        </x-card>
    @endforeach
</x-layout>