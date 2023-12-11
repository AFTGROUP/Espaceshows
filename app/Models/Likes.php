<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Likes extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'is_like',
        'user_id',
        'evenement_id',
    ];


}
