<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        if($user = Auth::user()){

            return view('users.profile', compact('user'));
        }
        else{
            return redirect('/');
        }

    }
}
