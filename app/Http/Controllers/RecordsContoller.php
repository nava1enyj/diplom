<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsContoller extends Controller
{
    public function index(){
        return view('records.index');
    }
}
