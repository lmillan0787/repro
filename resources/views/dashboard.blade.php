<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Top') }}
        </h2>
    </x-slot>
    <h1 class="text-center"><b>Latest Styles</b></h1>
    @component('components.style-list', ['list' => $styles])
    @endcomponent
    <h1 class="text-center"><b>Latest Artist</b></h1>
    @component('components.gallery', ['list' => $artists])
    @endcomponent
    <h1 class="text-center"><b>Latest Albums</b></h1>
    @component('components.gallery', ['list' => $albums])
    @endcomponent
</x-app-layout>
