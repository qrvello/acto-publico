<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipationController extends Controller
{
    public function participations()
    {
        $user = Auth::user();
        $publications = $user->publications()->paginate(6);
        if($publications->count()){
            return view('users.participations', compact('user', 'publications'));
        }else{
            return view('users.participations', compact('user'));
        }
    }

    public function store_participation($publication_id){

        $user = Auth::user();
        // Verifica si el usuario ya estaba relacionado con esa publicación
        if (!$user->publications->contains($publication_id)) {
            $user->publications()->attach($publication_id);
            return redirect('/mis-participaciones')->with('status', 'Participaste correctamente en esa publicación.');
        } else {
            // $participation = 'Ya has participado en esta publicación.';
            return back()->with('error', 'Ya has participado en esta publicación.');
        }
    }

    public function destroy_participation($publication_id){
        $user = Auth::user();
        $user->publications()->detach($publication_id);
        return redirect()->back()->with('status', 'Desististe correctamente de esa publicación.');
    }
}
