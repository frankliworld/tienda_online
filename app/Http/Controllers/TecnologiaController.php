<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecnologiaController extends Controller
{
    public function index(){

    	return view('tecnologia.index');
    }
}
