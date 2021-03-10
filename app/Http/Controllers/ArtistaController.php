<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = $this->consultaArtistas();
        //dd($artistas);
        return view('artistas.index',compact('artistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artistas.create');
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
        //     'nombre_artista' => 'required|max:255',
        // ]);

        $datosArtista = $request->except('_token');

        $request->validate([

            'foto_url' => 'image'

        ]);




         if ($request->hasFile('foto_url')){

            $datosArtista['foto_url'] = $request->file('foto_url')->store('public/fotosArtista');

        }

        $url = Storage::url($datosArtista['foto_url']);

        //dd($url);


        $artista = Artista::create([

            'nombre_artista' => $request->nombre_artista,
            'foto_url' => $url
        ]);

            $artistas = $this->consultaArtistas();
        return view('artistas.index',compact('artistas'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function show(Artista $artista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function edit(Artista $artista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artista $artista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artista $artista)
    {
        //
    }

    public function consultaArtistas(){
       $artistas = Artista::all();

        return $artistas;
    }
}
