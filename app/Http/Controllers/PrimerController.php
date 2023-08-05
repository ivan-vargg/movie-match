<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    public function index() {
        //dd('Dentro del controlador');
        return view('welcome');
    }
}
