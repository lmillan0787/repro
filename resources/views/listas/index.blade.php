<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
       <a href="{{route('lista1/create',$artists->id)}}"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nueva Cancion</button>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></a>
            <img src="{{$artists->photo_url}}" alt="" width="100px" height="100px" class="w-40 h-40">
            <h4 class="text-xl"> {{$artists->artist_name}}</h4>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <p class="text-lg text-center font-bold m-5">Listado de Canciones</p>
<table class="rounded-t-lg m-5 w-md mx-auto bg-gray-800 text-gray-200">

  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">Nombre Canción</th>
    <th class="px-4 py-3">Reproductor</th>
    <th class="px-4 py-3">Descarga</th>
     </tr>
     @foreach ($listas as $lista)
  <tr class="bg-gray-700 border-b border-gray-600">

    <td class="px-4 py-3">{{$lista->nombre_cancion}}</td>
    <td class="px-4 py-3"> <audio src="{{$lista->url}}" controls></audio></td>
    <td class="px-4 py-3"><a href="{{$lista->url}}" download="{{$lista->nombre_cancion}}"><img src="{{asset('img/boton-descarga.png')}}" alt="" class="h-10 w-10"></a></td>


  </tr>
  @endforeach

</table>



















            </div>
        </div>
    </div>
</x-app-layout>
