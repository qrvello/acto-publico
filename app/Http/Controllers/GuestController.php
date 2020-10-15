<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $publications = Publication::paginate(6);
        if (Auth::check()) {
            // Si el usuario está logueado
            $publications = Publication::where('state', 1)
            ->paginate(6);

            $user = Auth::user();
            return view('index', compact('publications', 'user'));
        } else {
            return view('index', compact('publications'));
        }
    }
}
