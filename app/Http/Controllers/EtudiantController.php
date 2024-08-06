<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;
use Illuminate\Support\Facades\File;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return $this->customJsonResponse("Liste des etudiants" , $etudiants);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEtudiantRequest $request)
    {
        $etudiant = new Etudiant();
        $etudiant->fill($request->all());
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $etudiant->photo = $photo->store('etudiants' , 'public');
            $etudiant->save();
        }
        return $this->customJsonResponse('message' , 'étudiant ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return $this->customJsonResponse('Liste des etudiants' , $etudiant);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant)
    {
        $etudiant->fill($request->validate());
        if($request->hasFile('photo')){
            if(File::exists('public/' . $etudiant->photo)){
                File::delete('public/' . $etudiant->photo);
            }
    }
    $etudiant->update();
    return $this->customJsonResponse('message' , 'étudiant modifié avec succès');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return $this->customJsonResponse('message' , 'étudiant supprimé avec succès',null ,200);
    }

    public function restore($id){
        $etudiant = Etudiant::onlyTrashed()->where('id' , $id)->first();
        $etudiant->restore();
        return $this->customJsonResponse('message' , 'étudiant restauré avec succès', $etudiant);
    }

    public function forceDelete($id){
        $etudiant = Etudiant::onlyTrashed()->where('id', $id)->first();
        $etudiant->forceDelete();
        return $this->customJsonResponse("Etudiant supprimé définitivement de la base de données",null , 200);
    }

    public function trashed(){
        $etudiants = Etudiant::onlyTrashed()->get();
        return $this->customJsonResponse("Etudiants Archivés" , $etudiants);
    }
}
