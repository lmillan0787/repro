<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums') }}
        </h2>
    </x-slot>
    {{-- <h1 class="text-center"><b>Latest Styles</b></h1>
    @component('components.style-list', ['list' => $styles])
    @endcomponent --}}
    <h1 class="text-center"><b>Albums By Artist</b></h1>
    @component('components.gallery', ['list' => $albumsByArtist, 'text' => 'albums'])
    @endcomponent
</x-app-layout>
