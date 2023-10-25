<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

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

    // Vous pouvez ajouter des relations Eloquent avec d'autres modèles ici, si nécessaire.


}
