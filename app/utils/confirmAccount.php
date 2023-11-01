<?php

use App\Models\User;
use App\Mail\SendOtp;
use Ichtrojan\Otp\Otp;
use App\Models\OtpCode;
use Illuminate\Support\Facades\Mail;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;



function confirmAccount($token)
{

    $identifier = ModelsOtp::where('token', $token)->first()->identifier;
    $otp = new Otp();
    $otpVerify =  $otp->validate($identifier, $token);

    if ($otpVerify->status === true) {
        $user = User::findOrFail($identifier);
        $user->email_verified_at = now();
        $user->save();
    }
   // return response()->json($otpVerify);
   return $otpVerify;
}
