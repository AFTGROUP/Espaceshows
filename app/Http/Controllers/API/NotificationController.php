<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\UserNotification;
use Exception;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }


    public function sendNotification($content = null,  Request $request)
    {
       try{
        $user = Auth::user();
        $data = [
            'content' => $content,

        ];

       // $user->notify(new UserNotification($data));
        Notification::send($user, new UserNotification($data));


        return $this->respondWithMessage('Succès');
       }
       catch(Exception $e){
        return $this->respondWithMessage(''.$e->getMessage());
       }

    }
}
