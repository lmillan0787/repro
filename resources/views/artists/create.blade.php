<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('artists.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nombre del artist</label>
                    <input type="text" name="artist_name" required>
                    <label for="">photo del artist</label>
                    <input type="file" name="photo_url" accept="image/*" id="file">
                    <div class="text-right" id="preview" style="width: 100px; height: 100px;">

                    </div>
                    @error('photo_url')
                    <span>Tipo de archivo no admitido</span>
                    @enderror
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
document.getElementById("file").onchange = function(e) {
	let reader = new FileReader();

  reader.onload = function(){
    let preview = document.getElementById('preview'),
    		image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };

  reader.readAsDataURL(e.target.files[0]);
}


</script>

