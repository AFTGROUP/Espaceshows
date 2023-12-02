<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory, UUID;

    protected $table = 'commentaires';

    protected $fillable = [
        'id',
        'contenu',
        'user_id',
        'evenement_id',
    ];

   

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'evenement_id');
    }
}
