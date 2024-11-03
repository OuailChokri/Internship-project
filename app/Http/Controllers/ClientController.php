<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $clients = Client::paginate(10);
        // le search javascript avec : $clients = Client::all();
        
        return view('clients',['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addClient');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'genre' => 'required',
            'telephone' => 'required',
            'cin' => 'required'
        ]);

        $client = new Client();

        $client->nomClient = $request->nom;
        $client->adresse = $request->adresse;
        $client->genre = $request->genre;
        $client->telephone = $request->telephone;
        $client->numeroCin = $request->cin;

        $client->save();

        return redirect('/clients');
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
        $client = Client::where('idClient',$id)->first();
        return view('editClient',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'genre' => 'required',
            'telephone' => 'required',
            'cin' => 'required'
        ]);

        $client = Client::find($id);

        $client->nomClient = $request->nom;
        $client->adresse = $request->adresse;
        $client->genre = $request->genre;
        $client->telephone = $request->telephone;
        $client->numeroCin = $request->cin;

        $client->save();

        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::find($id)->delete();
        return redirect('/clients');
    }
}
