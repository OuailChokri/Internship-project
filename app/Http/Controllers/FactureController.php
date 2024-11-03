<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Facture;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factures = Facture::with('transactions')->paginate(10);
        $clients = Client::all();
        $transactions = Facture::where('statut', 'termine')->get();
        return view('factures', compact('factures', 'clients', 'transactions'));
    }

    /**
     * Get client transactions.
     */
    public function getTransactions($nomClient) {
        try {
            $transactions = Transaction::where('client', $nomClient)->get();
            return response()->json(['transactions' => $transactions], 200);
        } catch (\Exception $e) {
            Log::error('Error fetching transactions: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $factures = Facture::all();
        $transactions = Transaction::all();
        return view('addFacture', compact('factures', 'transactions', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validation des champs requis
            $request->validate([
                'client' => 'required',
                'idTransaction' => 'required|array', // Doit être un tableau
                'idTransaction.*' => 'exists:transactions,idTransaction', // Vérifie que chaque ID de transaction existe dans la table transactions
                'dateFacture' => 'required|date',
                'statut' => 'required|in:payé,impayé',
            ]);
    
            // Récupérer les IDs de transactions sélectionnées
            $idTransactions = $request->input('idTransaction');
    
            // Récupérer les montants des transactions sélectionnées et calculer le montant total
            $totalTransactions = Transaction::whereIn('idTransaction', $idTransactions)->sum('prix');
    
            // Création d'une nouvelle instance de Facture avec les données validées
            $facture = new Facture([
                'client' => $request->input('client'),
                'dateFacture' => $request->input('dateFacture'),
                'montantTotal' => $totalTransactions, // Utilisation du montant total des transactions sélectionnées
                'statut' => $request->input('statut'),
            ]);
    
            // Enregistrement de la facture
            $facture->save();
    
            // Attachement des transactions à la facture
            $facture->transactions()->attach($idTransactions);
    
            return redirect()->route('factures.index')->with('success', 'Facture créée avec succès.');
    
        } catch (\Exception $e) {
            // En cas d'erreur, loguer l'erreur
            Log::error('Error creating invoice: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la création de la facture.');
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $facture = Facture::findOrFail($id);
        return view('factures.show', compact('facture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Récupérer la facture à éditer
        $facture = Facture::find($id);


        // Charger tous les clients pour le formulaire d'édition de facture
        $client = $facture->client;


        // Charger toutes les transactions pour le formulaire d'édition de facture

        // Retourner la vue d'édition avec les données nécessaires
        return view('editFacture', compact('facture', 'client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'dateFacture' => 'required|date',
            'montantTotal' => 'required|numeric',
            'statut' => 'required|in:payé,impayé',
        ]);

        $facture = Facture::findOrFail($id);

        // Mettre à jour la facture avec les données
        $facture->update([
            'dateFacture' => $request->dateFacture,
            'montantTotal' => $request->montantTotal,
            'statut' => $request->statut,
        ]);

        // Mettre à jour les transactions associées à la facture
        $facture->transactions()->sync($request->input('transactions'));

        return redirect()->route('factures.index')->with('success', 'Facture mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $facture = Facture::findOrFail($id);
        $facture->delete();

        return redirect()->route('factures.index')->with('success', 'Facture supprimée avec succès.');
    }
}
