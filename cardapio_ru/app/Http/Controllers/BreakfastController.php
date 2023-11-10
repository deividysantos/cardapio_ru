<?php

namespace App\Http\Controllers;
use App\Models\Breakfast;


use Illuminate\Http\Request;

class BreakfastController extends Controller
{
    public function index()
    {
        $breakfast = Breakfast::all();
            return view ('breakfast.index', compact (breakfast));
    }

    public function create()
    {
        return view ('breakfast.create');
    }

    public function edit ($ID_BREAKFAST)
    {
        $breakfast =  Breakfast::find($ID_BREAKFAST);
             return view ('breakfast.edit', compact ('breakfast'));
    }

    public function update (Request $request, $ID_BREAKFAST)
    {
        $breakfast = Breakfast::find($ID_BREAKFAST);
        $breakfast->update($request->all());
            return redirect()->route('breakfast.index');
    }

    public function delete($ID_BREAKFAST)
    {
        $breakfast = Breakfast::find($ID_BREAKFAST);          
        return view('breakfast.delete',compact('breakfast'));
    }

    public function destroy($ID_BREAKFAST)
    {
        $breakfast = Breakfast::find($ID_BREAKFAST);     
        $breakfast->delete($ID_BREAKFAST);
        return redirect()->route('breakfast.index');
    }
}

