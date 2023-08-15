<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Services\AlbumService;
use App\Services\ArtistService;
use Illuminate\Http\Request;

class MusicStyleController extends Controller
{
    protected $artistService;
    protected $albumService;
    protected $songService;

    public function __construct(ArtistService $artistService, AlbumService $albumService)
    {
        $this->artistService = $artistService;
        $this->albumService = $albumService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($styleId)
    {
        $latestArtistByStyle = $this->artistService->latestArtistForStyle($styleId);
        $latestAlbumsByStyle = $this->albumService->getLatestAlbumsByStyle($styleId);

        return view('style.index', compact('latestArtistByStyle', 'latestAlbumsByStyle'));
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
