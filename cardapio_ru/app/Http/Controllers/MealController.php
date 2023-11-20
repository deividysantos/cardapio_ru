<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;

class MealController extends Controller
{
    public function index()
    {
        $meal = Meal::all();
        return view ('meal.index', compact('meal'));
    }

    public function create()
    {
        return view ('meal.create');
    }

    public function edit ($ID_MEAL)
    {
        $meal = Meal::find($ID_MEAL);
        return view('meal.edit', compact ('meal'));
    }

    public function update (Request $request, $ID_MEAL)
    {
        $meal = Meal::find($ID_MEAL);
        $meal->update($request->all());
            return redirect()->route('meal.index');
    }

    public function delete($ID_MEAL)
    {
        $meal = Meal::find($ID_MEAL);          
        return view('meal.delete',compact('meal'));
    }

    public function destroy($ID_MEAL)
    {
        $meal = Meal::find($ID_MEAL);     
        $meal->delete($ID_MEAL);
        return redirect()->route('meal.index');
    }
}