<?php

namespace App\Http\Controllers;

use App\Models\Curricula;
use App\Models\Faq;
use App\Models\PpdbInformation;
use App\Models\PrincipalWelcomeMessage;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function lPIndex(){
        $ppdbInformation = PpdbInformation::latest()->first();
        $message = PrincipalWelcomeMessage::latest()->first(); 
        $curriculum = Curricula::latest()->first();
        $faqs = Faq::all();
        // dd($faqs);
        return view('welcome',compact('ppdbInformation','message','faqs','curriculum'));
    }
}
