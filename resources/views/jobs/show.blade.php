<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1 class="font-bold text-lg"><strong>{{$job['title']}}:</strong></h1>

    <h2>This job pays {{$job['sallery']}} usd per year</h2>
</x-layout>
