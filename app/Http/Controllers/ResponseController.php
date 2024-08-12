<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{

    public function surveyBegin(Request $request)
    {
        $name = $request->input('name');
        $surveyId = $request->input('survey_id');
        // dd([$surveyId,$name]);
        
        return view('daftar-survey.index',compact('name','surveyId'));
    }
}
