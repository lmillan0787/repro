<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Services\SongService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SongController extends Controller
{
    protected $songService;

    public function __construct(SongService $songService)
    {
        $this->songService = $songService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   //$id = $request->id;
        $artists = Artist::where('id',$request->id)->first();
        //dd($artists->artist_name);

        $listas = Song::where('artist_id',$request->id)->get();
        //dd($listas);
        return view('listas.index',compact('listas','artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;

        return view('listas.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosCancion = $request->except('_token');

         if ($request->hasFile('url')){

            $datosCancion['url'] = $request->file('url')->store('public/Canciones');

        }

        $url = Storage::url($datosCancion['url']);

        $cancion = Song::create([
            'artist_id' => $request->artist_id,
            'nombre_cancion' => $request->nombre_cancion,
            'url' => $url
        ]);
            $id = $request->artist_id;
        $artists = artist::where('id',$request->artist_id)->first();

        $listas = Song::where('artist_id',$id)->get();

            return redirect()->route('lista1',['id'=> $id]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $Song
     * @return \Illuminate\Http\Response
     */
    public function showByAlbum($albumId)
    {
        $songs = $this->songService->getSongsByAlbum($albumId);
        $type = 'Album';
        return view('song.index', compact('songs','type'));
    }

    public function showByArtist($artistId)
    {
        $songs = $this->songService->getSongsByArtist($artistId);
        $type = 'Artist';
        return view('song.index', compact('songs','type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $Song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $Song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $Song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $Song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $Song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $Song)
    {
        //
    }
}
