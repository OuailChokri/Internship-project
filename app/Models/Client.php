<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'idClient';
    public $timestamps = false;
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}
