<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $voitures = Voiture::paginate(10);
        return view('voitures',['voitures'=>$voitures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addVoiture');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'plaque' => 'required',
            'couleur' => 'required',
            'annee' => 'required',
            'date_impot' => 'required',
            'date_assurance' => 'required',
            'prixJour'=>'required'
        ]);

        $voiture = new Voiture();

        $voiture->marque = $request->nom;
        $voiture->plaque = $request->plaque;
        $voiture->couleur = $request->couleur;
        $voiture->annee = $request->annee;
        $voiture->date_impot = $request->date_impot;
        $voiture->date_assurance = $request->date_assurance;
        $voiture->prixJour = $request->prixJour;
        $voiture->statut = $request->statut;


        $voiture->save();

        return redirect('/voitures');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit(string $id)
    {
        $voiture = Voiture::where('idVoiture',$id)->first();
        return view('editVoiture',['voiture'=>$voiture]);
    }

    /*public function editt(string $id){
        $voiture = Voiture::where('idVoiture',$id)->first();
        return view('editVoiture',['voiture'=>$voiture]);
    }*/
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required',
            'plaque' => 'required',
            'couleur' => 'required',
            'annee' => 'required',
            'date_impot' => 'required',
            'date_assurance' => 'required',
            'prixJour'=>'required'
        ]);

        $voiture = Voiture::find($id);

        $voiture->marque = $request->nom;
        $voiture->plaque = $request->plaque;
        $voiture->couleur = $request->couleur;
        $voiture->annee = $request->annee;
        $voiture->date_impot = $request->date_impot;
        $voiture->date_assurance = $request->date_assurance;
        $voiture->prixJour = $request->prixJour;

        $voiture->save();

        return redirect('/voitures');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $voiture = Voiture::find($id)->delete();
        return redirect('/voitures');
    }
}
