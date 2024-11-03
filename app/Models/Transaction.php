<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $primaryKey = 'idTransaction';
    public $timestamps = false;

    protected $fillable = [
        'client', 'voiture', 'dateLocation', 'dateRetour', 'prix', 'amende', 'dateTransaction',
        'penalite', 'statut', 'dateRetourEffective'
    ];

    public function factures()
    {
        return $this->belongsToMany(Facture::class, 'facture_transaction', 'idTransaction', 'idFacture')
            ->withTimestamps();
    }

    // Relation avec le modèle Client
    public function client()
    {
        return $this->belongsTo(Client::class, 'client', 'nomClient');
    }
    

    // Relation avec le modèle Voiture
    public function voiture()
    {
        return $this->belongsTo(Voiture::class, 'voiture', 'marque');
    }
}
