<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeTickets extends Model
{
    use HasFactory,UUID;

    protected $fillable = [
        'id',
        'nom'
    ];
}
