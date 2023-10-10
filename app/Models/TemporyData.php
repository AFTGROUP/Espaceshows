<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TemporyData extends Model
{
    use HasFactory, UUID;

    protected $fillable = ['id','temporary_token', 'role_id'];

    public static function storeTemporaryData($temporaryToken, $temporaryData)
    {
        return TemporyData::create([

            'temporary_token' => $temporaryToken,
            'role_id' => $temporaryData['role_id'],
        ]);
    }

    public static function retrieveTemporaryData($temporaryToken)
    {
        return TemporyData::where('temporary_token', $temporaryToken)->first();
    }

    public static function clearTemporaryData($temporaryToken)
    {
        TemporyData::where('temporary_token', $temporaryToken)->delete();
    }
}
