<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function attach($publication){
        $user = User::find(1);
        $user->publications()->attach($publication);
    }
}
