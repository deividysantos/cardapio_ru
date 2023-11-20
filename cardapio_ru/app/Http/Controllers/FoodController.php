<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index()
    {
        $food = Food::all();
        return view ('food.index', compact('food'));
    }

    public function create()
    {
        return view ('food.create');
    }

    public function edit ($ID_FOOD)
    {
        $food = Food::find($ID_FOOD);
        return view('food.edit', compact ('food'));
    }

    public function update (Request $request, $ID_FOOD)
    {
        $food = Food::find($ID_FOOD);
        $food->update($request->all());
            return redirect()->route('food.index');
    }

    public function delete($ID_FOOD)
    {
        $food = Food::find($ID_FOOD);          
        return view('food.delete',compact('food'));
    }

    public function destroy($ID_FOOD)
    {
        $food = Food::find($ID_FOOD);     
        $food->delete($ID_FOOD);
        return redirect()->route('food.index');
    }
}
