<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Gender;
use App\Models\Library;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibraryController extends Controller
{
    
    public function list() 
    {
        
        $libraries = Library::all();
        $libraries->artist();print_r($libraries);die;
        return view('library_list', compact('libraries'));
    }

    public function show($id) 
    {
        $library = Library::find($id);
        return view('library_show', compact('library'));
    }

    public function create(Request $request) 
    {
        if($request->input('title') !== null) {
            $library = new Library;
            $library->title = $request->input('title');
            $library->artist_id = $request->input('artist');
            $library->gender_id = $request->input('gender');
            $library->save();
            return redirect('/library');
        }
        $artists = Artist::all();
        $genders = Gender::all();
        return view('library_form', ['path' => 'create', 'artists' => $artists, 'genders' => $genders]);
    }

    public function update(Request $request, $id = null) 
    {
        if($request->input('title') !== null) {
            $library = Library::find($request->input('id'));
            $library->name = $request->input('title');
            $library->save();
            return redirect('/library');
        }
        $library = Library::find($id);
        return view('library_form', ['path' => 'update', 'library' => $library]);
    }

    public function delete($id) 
    {
        $library = Library::find($id);
        $library->delete();
        return redirect('/library');
    }

    public function destroy() 
    {
        return redirect('/library');
    }
}
