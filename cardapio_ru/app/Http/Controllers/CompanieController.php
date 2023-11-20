<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanieController extends Controller
{
    public function create()
    {
        return view ('companie.create');
    }

    public function edit ($ID_COMPANIE)
    {
        $companie =  Companie::find($ID_COMPANIE);
        return view ('companie.edit', compact ('companie'));
    }

    public function update (Request $request, $ID_COMPANIE)
    {
        $companie = Companie::find($ID_COMPANIE);
        $companie->update($request->all());
        return redirect()->route('companie.index');
    }

    public function delete($ID_COMPANIE)
    {
        $companie = Companie::find($ID_COMPANIE);          
        return view('companie.delete',compact('companie'));
    }

    public function destroy($ID_COMPANIE){
        $companie = Companie::find($ID_COMPANIE);     
        $companie->delete($ID_COMPANIE);
        return redirect()->route('companie.index');
    }
}
