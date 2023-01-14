<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Library;
use Illuminate\Http\Request;

class GenderController extends Controller
{

    public function list()
    {
        $genders = Gender::all();
        return view('gender_list', compact('genders'));
    }

    public function show($id)
    {
        $gender = Gender::find($id);
        $libraries = Library::where('gender_id', $id)->with('artist')->get();
        return view('gender_show', ['libraries' => $libraries, 'gender' => $gender]);
    }

    public function create(Request $request)
    {
        if ($request->input('name') !== null) {
            $gender = new Gender;
            $gender->name = $request->input('name');
            $gender->save();
            return redirect('/gender');
        }

        return view('gender_form', ['path' => 'create']);
    }

    public function update(Request $request, $id = null)
    {
        if ($request->input('name') !== null) {
            $gender = Gender::find($request->input('id'));
            $gender->name = $request->input('name');
            $gender->save();
            return redirect('/gender');
        }
        $gender = Gender::find($id);
        return view('gender_form', ['path' => 'update', 'gender' => $gender]);
    }

    public function delete($id)
    {
        $gender = Gender::find($id);
        $gender->delete();
        return redirect('/gender');
    }

    public function destroy()
    {
        return redirect('/gender');
    }
}
