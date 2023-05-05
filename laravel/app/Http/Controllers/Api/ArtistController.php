<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return response()->json([
            'success' => true,
            'data' => $artists,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        // ]);

        // $artist = Artist::create($request->all());

        // return response()->json($artist, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artist = Artist::find($id);
        if($artist == null){
            return response()->json([
                'success' => false,
                'message'    => 'Error artist not found'
            ], 404);
        }
        else{
            return response()->json([
                'success'  => true,
                'data' => $artist
            ], 200);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'name' => 'required',
        // ]);

        // $artist->update($request->all());

        // return response()->json($artist);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $artist->delete();

        // return response()->json(null, 204);
    }
}
