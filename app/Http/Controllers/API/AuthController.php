<?php

namespace App\Http\Controllers\API;

use App\ApiCode;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Validation\ValidationException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;


class AuthController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);

    }


    /**
     * @OA\Post(
     *     path="/api/login",
     *     tags={"Auth"},
     *     summary="Login to the application",
     *     operationId="login",
     *     @OA\RequestBody(
     *         description="Login credentials",
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="email", type="string", format="email", description="User email"),
     *             @OA\Property(property="password", type="string", description="User password")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Login successful",
     *         @OA\JsonContent(
     *             @OA\Property(property="token", type="string", description="Access token"),
     *             @OA\Property(property="access_type", type="string", description="Bearer token"),
     *             @OA\Property(property="expires_in", type="integer", description="Token expiration time in seconds")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Unauthorized. Invalid credentials.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Unprocessable Entity",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Unprocessable Entity. Validation error occurred.")
     *         )
     *     )
     * )
     */
    public function login()
    {
        try {
            $credentials = request()->validate([
                'email' => 'required|email',
                'password' => 'required|string|max:25'
            ]);

            $user = User::where('email', $credentials['email'])->with('status')->first();

            if( isset($user) && $user->email_verified_at === NULL){

                return $this->respondUnAuthorizedRequest(ApiCode::ACCOUNT_NOT_VERIFIED);
            }

            if (!$token = auth()->attempt($credentials)) {
                return $this->respondUnAuthorizedRequest(ApiCode::INVALID_CREDENTIALS);
            }

            if(isset($user) && $user->status->statut == "desactive"){
                return $this->respondUnAuthorizedRequest(ApiCode::ACCOUNT_DISABLED);

            }

            return $this->respondWithToken($token);
        } catch (ValidationException $e) {

            return $this->respondUnprocessableEntity(ApiCode::VALIDATION_ERROR);
        }
    }


    private function respondWithToken($token)
    {
        return $this->respond([
            'token' => $token,
            'access_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ], "Login Successful");
    }

    /**
     * @OA\Post(
     *     path="/api/logout",
     *     tags={"Auth"},
     *     summary="Déconnexion de l'utilisateur",
     *     operationId="logout",
     *     security={{"bearerAuth": {}}},
     *     @OA\Response(
     *         response=200,
     *         description="L'utilisateur s'est déconnecté avec succès"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non autorisé"
     *     )
     * )
     */

    public function logout()
    {

        try{
            auth()->logout();
            return $this->respondWithMessage('User successfully logged out');

        }
        catch (JWTException $exception) {
            return $this->respondInternalServerError(ApiCode::SOMETHING_WENT_WRONG);

        }
    }


    /**
     * @OA\Post(
     *     path="/api/refresh",
     *     tags={"Auth"},
     *     summary="Actualiser le jeton d'accès",
     *     operationId="refresh",
     *     security={{"bearerAuth": {}}},
     *     @OA\Response(
     *         response=200,
     *         description="Le jeton d'accès a été actualisé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="token", type="string", description="Nouveau jeton d'accès"),
     *             @OA\Property(property="access_type", type="string", description="Type d'accès (Bearer)"),
     *             @OA\Property(property="expires_in", type="integer", description="Durée de validité en secondes")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non autorisé"
     *     )
     * )
     */

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }



}
