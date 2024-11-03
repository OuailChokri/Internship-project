<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Client;
use App\Models\Voiture;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countVoitures = Voiture::count();
        $voituresDisponible = Voiture::where('statut','disponible')->count();
        $countClients = Client::count();
        $totalTransactions = Transaction::sum('prix');
        $transationTermine = Transaction::where('statut','termine')->count();
        $dernieresVoitures = Voiture::orderBy('idVoiture', 'desc')->take(5)->get();
        $dernieresClients = Client::orderBy('idClient', 'desc')->take(5)->get();
        $recentTransactions = Transaction::where('statut', 'termine')->paginate(10);
        return view('index',[
            'countVoitures' => $countVoitures,
            'voituresDisponible' => $voituresDisponible,
            'countClients' => $countClients,
            'totalTransactions' => $totalTransactions,
            'transationTermine' => $transationTermine,
            'dernieresVoitures' => $dernieresVoitures,
            'dernieresClients' => $dernieresClients,
            'recentTransactions' => $recentTransactions
        ]);
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
