<?php

use App\Mail\SendOtp;
use App\Models\OtpCode;
use Ichtrojan\Otp\Otp;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use Illuminate\Support\Facades\Mail;


function generateOtp($identifier, $mail) {
    //Génération du code otp en son envoi à l'utilisateur

    $otp = new Otp();
    $otpCode = $otp->generate($identifier, 5, 10);

    $CodeOtp = $otpCode->token;

    // Envoyez le code OTP à l'utilisateur (par e-mail, SMS, etc.)
    Mail::to($mail)
        ->send(new SendOtp($CodeOtp));



        }
