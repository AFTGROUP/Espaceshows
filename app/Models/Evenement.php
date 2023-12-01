<?php

namespace App\Models;

use App\Models\User;
use App\Traits\UUID;
use App\Models\Commentaire;
use App\Models\TypeEvenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'nom',
        'pays',
        'ville',
        'photo',
        'description',
        'date_debut',
        'date_fin',
        'mots_cles',
        'nombre_place_disponible',
        'type_evenement_id',
    ];

    public function typeEvenement()
    {
        return $this->belongsTo(TypeEvenement::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'organisateur_id');
    }

    public function commentaire()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }




}

