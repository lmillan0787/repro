<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div>
            @auth
            @component('components.button-primary', ['route' => 'artists.create', 'text' => 'Nuevo Artista'])
            @endcomponent
            @endauth
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="py-8 px-4">
                    <div class="flex flex-wrap -mx-4 -mb-8">
                        @forelse ($artists as $artist)
                            <div class="md:w-1/4 px-4 mb-8">
                                <td class="px-4 py-3">{{ $artist->artista_name }}
                                    <a href="{{ route('lista1', $artist->id) }}"><img class="rounded shadow-md w-40 h-40"
                                            src="{{ $artist->photo_url }}" alt=""></a>
                            </div>
                            @empty
                            <td class="px-4 py-3">No artist registered</td>
                        @endforelse
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
