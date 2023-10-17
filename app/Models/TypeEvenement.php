<?php

namespace App\Models;

use App\Traits\UUID;
use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeEvenement extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'nom',
    ];

    public function evenement() 
    {
        return $this->hasMany(Evenement::class);
    }
}
