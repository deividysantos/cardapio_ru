<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view ('user.create');
    }

    public function edit ($ID_USER)
    {
        $user = User::find($ID_USER);
        return view ('user.edit', compact ('user'));
    }
    
    public function update (Request $request, $ID_USER)
    {
        $user = User::find($ID_USER);
        $user->update($request->all());
        return redirect()->route('companie.index');
    }

    public function delete($ID_USER)
    {
        $user = User::find($ID_USER);          
        return view('companie.delete',compact('companie'));
    }

    public function destroy($ID_USER)
    {
        $user = User::find($ID_USER);     
        $user->delete($ID_USER);
        return redirect()->route('companie.index');
    }
}