<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Establishment;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function create(){
        $publications = Publication::all();
        $establishiments = Establishment::all();

        return view('admin.publications.create', compact('publications','establishiments'));
    }

    public function edit(Publication $publication){

        $establishiments = Establishment::all();
     
        return view('admin.publications.edit', compact('publication','establishiments'));
    }

    public function store(Request $request)
    {
        $publication = new Publication();
        $publication->name =$request->input('name');
        $publication->state =$request->boolean('state');
        $publication->observation =$request->input('observation');
        $publication->character =$request->input('character');
        $publication->turn =$request->input('turn');
        $publication->hours =$request->input('hours');
        $publication->date =$request->input('date');
        $publication->establishment_id =$request->input('establishiment_id');
        $publication->save();

        return back()->with('status', 'Publicación creada satisfactoriamente.');
    }

    public function update(Request $request, Publication $publication)
    {
        $publication->name =$request->input('name');
        $publication->state =$request->boolean('state');
        $publication->observation =$request->input('observation');
        $publication->character =$request->input('character');
        $publication->turn =$request->input('turn');
        $publication->hours =$request->input('hours');
        $publication->date =$request->input('date');
        $publication->establishment_id =$request->input('establishiment_id');
        $publication->save();

        return back()->with('status', 'Publicación editada satisfactoriamente.');
    }

    public function destroy(Publication $publication)
    {
        Publication::destroy($publication->id);
        return back()->with('status', 'Publicación borrada satisfactoriamente.');
    }
}
