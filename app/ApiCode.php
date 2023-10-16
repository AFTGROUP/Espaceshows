<?php

namespace App;


/**
 * @OA\Schema(
 *     schema="ApiCode",
 *     type="object",
 *     title="Api Codes",
 *     description="Descriptions for API error codes",
 *     @OA\Property(property="SOMETHING_WENT_WRONG", type="integer", description="250: Something went wrong."),
 *     @OA\Property(property="INVALID_CREDENTIALS", type="integer", description="251: Invalid credentials."),
 *     @OA\Property(property="VALIDATION_ERROR", type="integer", description="252: Validation error."),
 *     @OA\Property(property="EMAIL_ALREADY_VERIFIED", type="integer", description="253: Email already verified."),
 *     @OA\Property(property="INVALID_EMAIL_VERIFICATION_URL", type="integer", description="254: Invalid email verification URL."),
 *     @OA\Property(property="INVALID_RESET_PASSWORD_TOKEN", type="integer", description="255: Invalid reset password token."),
 *     @OA\Property(property="ACCOUNT_NOT_VERIFIED", type="integer", description="256: Account not verified.")
 * )
 */
class ApiCode {
    public const SOMETHING_WENT_WRONG = 250;
    public const INVALID_CREDENTIALS = 251;
    public const VALIDATION_ERROR = 252;
    public const EMAIL_ALREADY_VERIFIED = 253;
    public const INVALID_EMAIL_VERIFICATION_URL = 254;
    public const INVALID_RESET_PASSWORD_TOKEN = 255;
    public const ACCOUNT_NOT_VERIFIED = 256;
}
