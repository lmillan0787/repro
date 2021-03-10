<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;
use App\Models\MusicaIndigena;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class MusicaIndigenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   //$id = $request->id;
        $artistas = Artista::where('id',$request->id)->first();
        //dd($artistas->nombre_artista);

        $listas = MusicaIndigena::where('artista_id',$request->id)->get();
        //dd($listas);
        return view('listas.index',compact('listas','artistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;

        //dd($id);

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
        //dd($request);
        $datosCancion = $request->except('_token');


         if ($request->hasFile('url')){

            $datosCancion['url'] = $request->file('url')->store('public/Canciones');

        }

        $url = Storage::url($datosCancion['url']);

        //dd($url);


        $cancion = MusicaIndigena::create([
            'artista_id' => $request->artista_id,
            'nombre_cancion' => $request->nombre_cancion,
            'url' => $url
        ]);
            $id = $request->artista_id;
        $artistas = Artista::where('id',$request->artista_id)->first();

        $listas = MusicaIndigena::where('artista_id',$id)->get();

            return redirect()->route('lista1',['id'=> $id]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MusicaIndigena  $musicaIndigena
     * @return \Illuminate\Http\Response
     */
    public function show(MusicaIndigena $musicaIndigena)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MusicaIndigena  $musicaIndigena
     * @return \Illuminate\Http\Response
     */
    public function edit(MusicaIndigena $musicaIndigena)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MusicaIndigena  $musicaIndigena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MusicaIndigena $musicaIndigena)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MusicaIndigena  $musicaIndigena
     * @return \Illuminate\Http\Response
     */
    public function destroy(MusicaIndigena $musicaIndigena)
    {
        //
    }
}
