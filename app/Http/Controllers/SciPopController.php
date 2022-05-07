<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SciPopController extends Controller
{
    public function index(){
        return view('ski-pop.index');
    }
}
