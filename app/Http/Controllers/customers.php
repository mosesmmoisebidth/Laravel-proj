<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firstname;

class customers extends Controller
{
    function getAll(){
        $data = Firstname::all();
        return view('/customer-list', ['customs'=>$data]);
    }
}
