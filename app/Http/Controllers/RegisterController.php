<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){

        if (Auth::check()){
            return redirect(route('profile.index'));
        }

        return view('register.index');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request);

        if($user){
            Auth::login($user);
            return redirect(route('user.profile'));
        }
    }
}
