<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Styles') }}
        </h2>
    </x-slot>
    {{-- <h1 class="text-center"><b>Latest Styles</b></h1>
    @component('components.style-list', ['list' => $styles])
    @endcomponent --}}
    <h1 class="text-center"><b>Latest Artist For Style</b></h1>
    @component('components.gallery', ['list' => $latestArtistByStyle])
    @endcomponent
    <h1 class="text-center"><b>Latest Albums For Style</b></h1>
    @component('components.gallery', ['list' => $latestAlbumsByStyle])
    @endcomponent
</x-app-layout>
