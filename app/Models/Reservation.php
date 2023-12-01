<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory, UUID; // Separate multiple traits with a comma

    protected $table = 'reservations';

    protected $fillable = [
        'id',
        'date_reservation',
        'nom_utilisateur',
        'prenom_utilisateur',
        'type_ticket',
        'mode_paiement',
        'user_id',
        'ticket_id',
    ];
}

    // Vous pouvez ajouter des relations Eloquent avec d'autres modèles ici, si nécessaire.


