<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodIng;

class AddValue extends Controller
{
    public function addIngs(Request $req){
        $ingredients = new FoodIng;
        $ingredients->nutritional = $req->nutritional;
        $ingredients->amount = $req->amount;
        $ingredients->save();
        return redirect('food-overview');
    }
}
