<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function updateRole($id)
{
    $user = User::findOrFail($id);
    // Valider et mettre à jour le rôle
    $user->role = request()->role;
    $user->save();

    return response()->json(['role' => $user->role]);
}
    public function index()
    {
        $users = User::all();
        // le search javascript avec : $clients = Client::all();
        
        return view('users',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addUser');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $users = User::all();
        $user = new User();

        $user->name = $request->nom;
        $user->email = $request->email;
        $user->password = $request->password;
        if($users->count() == 0) {
            $user->role = 0;
        }

        $user->save();

        return redirect('/users');
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
        $user = User::where('id',$id)->first();
        return view('editUser',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);

        $user->name = $request->nom;
        $user->email = $request->email;

        $user->save();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = User::find($id)->delete();
        return redirect('/users');
    }
}
