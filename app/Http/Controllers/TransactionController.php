<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Client;
use App\Models\Voiture;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::paginate(10);
        $clients = Client::all();
        $voitures = Voiture::where('statut', 'disponible')->get();
        return view('transactions',['transactions'=>$transactions,'clients'=>$clients,'voitures'=>$voitures]);
    }
    /*public function sendVoiture(){
        $voitures = Voiture::all();
        return view('createTransaction',['voitures'=>$voitures]);
    }*/

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $voitures = Voiture::where('statut', 'disponible')->get();
        return view('createTransaction',['clients'=>$clients,'voitures'=>$voitures]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'voiture' => 'required',
            'dateDebut' => 'required',
            'dateRetour' => 'required',
            'amende' => 'required'
        ]);

        $transaction = new Transaction();

        $transaction->client = $request->client;
        $transaction->voiture = $request->voiture;
        $transaction->dateLocation = $request->dateDebut;
        $transaction->dateRetour = $request->dateRetour;
        $transaction->amende = $request->amende;
        $transaction->dateTransaction = now()->format('Y-m-d H:i:s');

        $transaction->save();

        $voiture = Voiture::where('marque',$request->voiture)->first();
        if($voiture){
            $voiture->statut = 'non disponible';
            $voiture->save();
        }
        return redirect('/transactions');
    }
    public function getTransactionsByClient($clientId)
    {
        $transactions = Transaction::where('client_id', $clientId)->get();
        return response()->json($transactions);
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
        $transaction = Transaction::where('idTransaction',$id)->first();
        return view('completeTransaction',['transaction'=>$transaction]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'dateRetourEffective' => 'required|date'
    ]);

    $transaction = Transaction::find($id);

    if (!$transaction) {
        return redirect('/transactions')->withErrors('Transaction non trouvée.');
    }

    $voiture = Voiture::where('marque', $transaction->voiture)->first();

    if (!$voiture) {
        return redirect('/transactions')->withErrors('Voiture non trouvée.');
    }

    $prixJour = $voiture->prixJour;

    $dateLocation = new \DateTime($transaction->dateLocation);
    $dateRetourEffective = new \DateTime($request->dateRetourEffective);
    $interval = $dateLocation->diff($dateRetourEffective);
    $jours = $interval->days;

    $transaction->dateRetourEffective = $request->dateRetourEffective;
    $transaction->prix = $prixJour * $jours;
    $transaction->statut = 'termine';
    $transaction->save();

    $voiture->statut = 'disponible';
    $voiture->save();

    return redirect('/transactions');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction = Transaction::find($id);
    if ($transaction) {
        $transaction->delete();
        $voiture = Voiture::where('marque', $transaction->voiture)->first();
        if ($voiture) {
            $voiture->statut = 'disponible';
            $voiture->save();
        }
    }
    return redirect('/transactions');
    }
}
