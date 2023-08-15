<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Services\AlbumService;
use App\Services\ArtistService;
use App\Services\MusicStyleService;

class DashboardController extends Controller
{

    protected $artistService;
    protected $albumService;
    protected $musicStyleService;

    public function __construct(ArtistService $artistService, AlbumService $albumService, MusicStyleService $musicStyleService)
    {
        $this->artistService = $artistService;
        $this->albumService = $albumService;
        $this->musicStyleService = $musicStyleService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = $this->artistService->getArtists();
        $albums = $this->albumService->getLatestAlbums();
        $styles = $this->musicStyleService->getLatestMusicStyles();
        //dd($albums);
       return view('dashboard', compact('artists', 'albums', 'styles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
