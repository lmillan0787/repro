
    <ul>
        @forelse($list as $song)
        <li><a href="#">{{ $song->song_name }} - {{ $song->artist->artist_name }}</a></li>
        @empty
        <li>No songs registered</li>
        @endforelse
    </ul>

