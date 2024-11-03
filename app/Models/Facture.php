<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'idFacture';
    protected $fillable = [
        'idTransaction', 'dateFacture', 'montantTotal', 'statut', 'client',
    ];
    public $timestamps = false;
    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'facture_transaction', 'idFacture', 'idTransaction');
    }

    // Relation avec le modèle Client
    public function client()
    {
        return $this->belongsTo(Client::class, 'client', 'nomClient');
    }
}
