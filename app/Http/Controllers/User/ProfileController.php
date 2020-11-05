<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\VarDumper\Cloner\Data;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        if ($user = Auth::user()) {

            return view('users.profile', compact('user'));
        } else {
            return redirect('/');
        }
    }

    public function data()
    {
        $user = Auth::user();
        
        return view('users.data', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {   
            $user = User::find(Auth::user()->id);

            $user->update($request->except(['password','image', 'email']));
        
            return redirect('/mis-datos')->with('status', 'Cambios realizados correctamente.');

    }

}