<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div>
        <a href="{{route('artistas.create')}}"><button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo Artista</button></a>
    </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="py-8 px-4">
                    <div class="flex flex-wrap -mx-4 -mb-8">
                        @foreach ($artistas as $artista)
                      <div class="md:w-1/4 px-4 mb-8"><td class="px-4 py-3">{{$artista->nombre_artista}}
                        <a href="{{route('lista1',$artista->id)}}"><img class="rounded shadow-md w-40 h-40" src="{{$artista->foto_url}}" alt=""></a></div>
                      @endforeach

                    </div>
                  </section>



            </div>
        </div>
    </div>
</x-app-layout>

