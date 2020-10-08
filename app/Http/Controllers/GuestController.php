<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $publications = Publication::all();
        if (Auth::check()) {
            // Si el usuario está logueado
            $publications = Publication::all();

            $user = Auth::user();
            return view('index', compact('publications', 'user'));
        }else{
            return view('index', compact('publications'));
        }
    }

}
