<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    const TYPE_TICKET_CHOICES = ['Option 1', 'Option 2', 'Option 3'];
    const MODE_PAIEMENT_CHOICES = ['Feda Pay', 'KkiPay'];

    protected $fillable = ['nom', 'prenom', 'email', 'type_ticket', 'mode_paiement'];

    // ... autres méthodes et propriétés du modèle

}
