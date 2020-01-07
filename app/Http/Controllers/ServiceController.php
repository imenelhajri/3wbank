<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()

    {	 $data = array ('titre'=>"Nos Services",

    					'listeservice'=>['Creation de compte','Versement','Retrait', 'Transfert']

    					);

    	 return view('service')->with($data);
    }

}
