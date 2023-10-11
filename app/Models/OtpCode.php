<?php

namespace App\Models;

use App\Models\User;
use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OtpCode extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'user_id',
        'otp_code',
        'expires_at'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
