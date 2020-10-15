<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        if ($user = Auth::user()) {

            return view('users.profile', compact('user'));
        } else {
            return redirect('/');
        }
    }


}
