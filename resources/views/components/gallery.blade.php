<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <section class="py-8 px-4">
                <div class="flex flex-wrap -mx-4 -mb-8">
                    @forelse ($list as $data)
                        <div class="md:w-1/4 px-4 mb-8">
                            <td class="px-4 py-3">@isset($data->album_name)
                                {{ Str::limit($data->album_name, 35) }}
                                <a href="{{ route('songs-album', $data->id) }}">
                                @else
                                {{ $data->artist_name }}
                                <a href="{{ route('albums.show', $data->id) }}">
                            @endisset
                                    <img class="rounded shadow-md w-40 h-40"
                                        src="@isset($data->album_cover_url ) {{$data->album_cover_url }} @else {{ $data->photo_url }} @endisset" alt="">
                                    </a>
                                    @isset($data->release_date)
                                        {{ Str::limit($data->release_date, 4) }}
                                    @endisset
                        </div>
                    @empty
                        <td class="px-4 py-3">No {{$text}} registered</td>
                    @endforelse
                </div>
            </section>
        </div>
    </div>
</div>
