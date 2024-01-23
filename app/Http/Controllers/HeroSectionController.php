<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function HeroSectionPage(){
        return view('backend.pages.hero-section');
    }
}
