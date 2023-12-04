<?php

namespace App\Models;

use App\Traits\UUID;
use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EvenementMedias extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'nom',
        'path',
        'evenement_id',
    ];

    public function evenement() : BelongsTo
    {
        return $this->belongsTo(Evenement::class);
    }

}
