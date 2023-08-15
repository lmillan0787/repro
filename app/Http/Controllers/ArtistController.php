<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = $this->consultaArtistas();
        return view('artists.index',compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosArtista = $request->validate([
        //     'artist_name' => 'required|max:255',
        // ]);

        $datosArtista = $request->except('_token');

        $request->validate([

            'photo_url' => 'image'

        ]);




         if ($request->hasFile('photo_url')){

            $datosArtista['photo_url'] = $request->file('photo_url')->store('public/photosArtista');

        }

        $url = Storage::url($datosArtista['photo_url']);

        //dd($url);


        $artist = Artist::create([

            'artist_name' => $request->artist_name,
            'photo_url' => $url
        ]);

            $artists = $this->consultaArtistas();
        return view('artists.index',compact('artists'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        //
    }

    public function consultaArtistas(){
       $artists = Artist::all();

        return $artists;
    }
}
