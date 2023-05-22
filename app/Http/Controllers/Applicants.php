<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class Applicants extends Controller
{
    function getApplicants(){
        $data = Applicant::all();
        return view('applicant-list', ['applicants'=>$data]);
    }
}
