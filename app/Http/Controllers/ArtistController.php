<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    
    public function list() 
    {
        $artists = Artist::all();
        return view('artist_list', compact('artists'));
    }

    public function show($id) 
    {
        $artist = Artist::find($id);
        return view('artist_show', compact('artist'));
    }

    public function create(Request $request) 
    {
        if($request->input('name') !== null) {
            $artist = new Artist;
            $artist->name = $request->input('name');
            $artist->save();
            return redirect('/artist');
        }

        return view('artist_form', ['path' => 'create']);
    }

    public function update(Request $request, $id = null) 
    {
        if($request->input('name') !== null) {
            $artist = Artist::find($request->input('id'));
            $artist->name = $request->input('name');
            $artist->save();
            return redirect('/artist');
        }
        $artist = Artist::find($id);
        return view('artist_form', ['path' => 'update', 'artist' => $artist]);
    }

    public function delete($id) 
    {
        $artist = Artist::find($id);
        $artist->delete();
        return redirect('/artist');
    }

    public function destroy() 
    {
        return redirect('/artist');
    }
}
