<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'code',
        'type_ticket',
        'prix_ticket',
        'evenement_id',
    ];


    public function evenement() 
    {
        return $this->belongsTo(Evenement::class);
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'reservation');
    }
}
