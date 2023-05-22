<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Thing;

class Ingredients extends Controller
{
    function addIngredients(Request $req){
        $ingred = new Thing;
        $ingred->Title = $req->Title;
        $ingred->Units = $req->Units;
        $ingred->Images = $req->Images;
        $ingred->Description = $req->Description;
        $ingred->Calories = $req->Calories;
        $ingred->Weight = $req->Weight;
        $ingred->save();
        return view('add-nutritional-values');
    }
}
