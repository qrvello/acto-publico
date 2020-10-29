<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    
    public function publications()
    {
        $publications = Publication::all();

        return view('admin.publications.publications', compact('publications'));
    }

    public function users()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }
    
}
