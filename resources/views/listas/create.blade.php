<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('listas.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="artista_id" value="{{$id}}" hidden>
                    <label for="">Nombre de la canción</label>
                    <input type="text" name="nombre_cancion" required>
                    <label for="">Seleccione Canción</label>
                    <input type="file" name="url" accept="audio/*" id="file">
                    <div class="text-right" id="preview" style="width: 100px; height: 100px;">

                    </div>
                    @error('url')
                    <span>Tipo de archivo no admitido</span>
                    @enderror
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
