@props(['jobs'])
<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="mt-4 space-y-6">

        @if ($jobs->isEmpty())
        <h3 class="text-white text-center  mt-32"> No Results Here</h3>
        <x-forms.divider/>
        @endif
        

        @foreach ($jobs as $job)
            <x-job-card-w :$job />
        @endforeach

    </div>
</x-layout>
