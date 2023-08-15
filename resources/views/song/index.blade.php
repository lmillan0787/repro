<x-app-layout>
    <x-slot name="header">
        {{-- @dd($type) --}}
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Songs') }}
        </h2>
    </x-slot>
    <h1 class="text-center"><b>Songs By {{$type}}</b></h1>
    <div class="row grid grid-cols-3 grid content-center">
        <div class="col">
            @component('components.song', ['list' => $songs, 'text' => 'songs'])
            @endcomponent
        </div>
    </div>
</x-app-layout>
