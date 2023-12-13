<?php

namespace App\Http\Controllers\API;


use App\Models\Likes;
use App\Models\Evenement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //

    public function likeByEvent($evenementId)
    {
        $likes = Likes::where('evenement_id', $evenementId)->get();
        return response()->json(['likes' => $likes]);
    }

    public function likedPeople($evenementId)
    {
        $likedPeople = Likes::where('evenement_id', $evenementId)->pluck('user_id');
        return response()->json(['liked_people' => $likedPeople]);
    }

    public function totalLikes($evenementId)
    {
        $totalLikes = Likes::where('evenement_id', $evenementId)->count();
        return response()->json(['total_likes' => $totalLikes]);
    }

    public function grandLikes()
    {
        $grandLikes = Likes::where('is_like', true)->get();
        return response()->json(['grand_likes' => $grandLikes]);
    }

    public function petitEvenement()
    {
        $petitEvenementLikes = Likes::orderBy('evenement_id', 'asc')->first();
        return response()->json(['petit_evenement_likes' => $petitEvenementLikes]);
    }
}
