<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fooder;

class Food_ordering extends Controller
{
    function addData(Request $req){
        $food = new Fooder;
        $food->title = $req->title;
        $food->units = $req->units;
        $food->Description = $req->Description;
        $food->Calories = $req->Calories;
        $food->Weight = $req->Weight;
        $food->Grams = $req->Grams;
        $food->save();
    }
    function getData(){
        $data = Fooder::all();
        return view('getData', ['fooders'=>$data]);
    }
    function deleteFood($title){
        $data = Fooder::find($title);
        $data->delete;
        return redirect('getData');
    }
}
