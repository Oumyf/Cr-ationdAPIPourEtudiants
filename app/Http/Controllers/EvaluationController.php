<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Eval_;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        return $this->customJsonResponse("Liste des évaluations" , $evaluations);
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
    public function store(Request $request)
    {
        
        $evaluation = new Evaluation();
        $evaluation->create($request->all());
            return $this->customJsonResponse('message' ,"l'évaluation est ajoutée avec succès", );
        // }
        return $this->customJsonResponse('error' , "l'evaluation  n'a pas pu etre ajoutée avec succès");

    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluation $evaluation)
    {
        return $this->customJsonResponse('Liste des etudiants' , $evaluation);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluationRequest $request, Evaluation $evaluation)
    {
       
        $evaluation->update();
        return $this->customJsonResponse('message' , 'évaluation modifiée avec succès');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return $this->customJsonResponse('message' , 'évaluation supprimé avec succès',null ,200);
    }
}
