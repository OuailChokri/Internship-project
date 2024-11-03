<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Routes de Clients */
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/editClient/{id}/edit', [ClientController::class, 'edit'])->name('editClient.edit');
Route::post('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');

/* Routes de Voitures*/
Route::get('/voitures', [VoitureController::class, 'index'])->name('voitures.index');
Route::get('/editVoiture/{id}/edit', [VoitureController::class, 'edit'])->name('editVoiture.edit');
Route::post('/voitures/{id}', [VoitureController::class, 'update'])->name('voitures.update');
Route::delete('/voiture/{id}', [VoitureController::class, 'destroy'])->name('voitures.destroy');
Route::get('/voitures/create', [VoitureController::class, 'create'])->name('voitures.create');
Route::post('/voitures', [VoitureController::class, 'store'])->name('voitures.store');

/* Routes de Transactions*/
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('/editTransaction/{id}/edit', [TransactionController::class, 'edit'])->name('editTransaction.edit');
Route::post('/completeTransaction/{id}', [TransactionController::class, 'update'])->name('transactions.update');
Route::delete('/transaction/{id}', [TransactionController::class, 'destroy'])->name('transactions.destroy');
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');

/* Routes de Factures*/
Route::get('/factures', [FactureController::class, 'index'])->name('factures.index');
Route::get('/editFacture/{id}/edit', [FactureController::class, 'edit'])->name('factures.edit');
Route::post('/factures/{id}', [FactureController::class, 'update'])->name('factures.update');
Route::delete('/factures/{id}', [FactureController::class, 'destroy'])->name('factures.destroy');
Route::get('/factures/create', [FactureController::class, 'create'])->name('factures.create');
Route::post('/factures', [FactureController::class, 'store'])->name('factures.store');
Route::get('/api/transactions/{clientId}', [FactureController::class, 'getTransactions']);
Route::get('transactions/client/{clientId}', [TransactionController::class, 'getTransactionsByClient']);



//Route::get('/edit/{id}', [VoitureController::class, 'editt'])->name('editVoiture');


Route::middleware('checkRole:admin')->group(function () {
    /* Routes de Users*/
Route::get('users',[UserController::class, 'index'])->name('users.index');
Route::get('/editUser/{id}/edit', [UserController::class, 'edit'])->name('editUser.edit');
Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{id}/update-role', [UserController::class,'updateRole'])->name('users.updateRole');
});

Route::get('/erreur',function(){
    return view('erreur');
});


/* Routes de Dashboard */
Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.index');


/* Routes de Authentification */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
