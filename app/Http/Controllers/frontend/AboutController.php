<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Setting;



class AboutController extends Controller
{
    public function index(){
        return view('frontend.about.index')
        ->with('about',About::first())
        ;
    }
}