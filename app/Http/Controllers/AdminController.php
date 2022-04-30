<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){

        $roles = User::getRoles();

        $roles = array_flip($roles);

        if(Auth::check()){
            if(Auth::user()->role === $roles['Админ']){
                return view('admin.index');
            }
            else{
                return redirect(route('user.profile'));
            }
        }
        else{
            return redirect(route('user.login'));
        }




    }
}
