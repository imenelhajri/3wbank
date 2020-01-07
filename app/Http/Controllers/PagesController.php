<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
    	 return view('welcome');
    }

    public function about()

    {	 $titre ='About 3w Academy';
    	 return view('about', compact('titre'));
    }
}
