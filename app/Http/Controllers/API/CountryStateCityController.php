<?php

namespace App\Http\Controllers\API;

use App\ApiCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CountryStateCityController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }

    /**
     * @OA\Get(
     *     path="/api/allCountryAndPosition",
     *     summary="Obtenir toutes les informations sur les pays et leurs positions",
     *     tags={"PaysEtatsVilles"},
     *     @OA\Response(
     *         response=200,
     *         description="Données des pays et de leurs positions",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(
     *                     property="countries",
     *                     type="array",
     *                     @OA\Items(
     *                         type="object",
     *                         @OA\Property(property="name", type="string", example="Nom du pays"),
     *                         @OA\Property(property="position", type="string", example="Position géographique"),
     *
     *                     )
     *                 ),
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Une erreur interne s'est produite",
     *     ),
     * )
     */

    public function allCountryAndPosition()
    {
        try {
            $response = Http::get('https://countriesnow.space/api/v0.1/countries/positions');

            if ($response->successful()) {
                $data = $response->json();
                return $this->respond($data);
            } else {
                return $this->respondInternalServerError(ApiCode::SOMETHING_WENT_WRONG);
            }
        } catch (\Exception $e) {
            return $this->respondWithMessage(['message' => 'Une erreur s\'est produite : ' . $e->getMessage()]);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/getStateInCountry",
     *     summary="Obtenir les départements/États d'un pays",
     *     tags={"PaysEtatsVilles"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="country", type="string", example="Nom du pays"),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Liste des départements/États du pays",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(
     *                     property="states",
     *                     type="array",
     *                     @OA\Items(
     *                         type="string",
     *                         example="Nom de l'État",
     *                     ),
     *                 ),
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Une erreur interne s'est produite",
     *     ),
     * )
     */

    public function getStateInCountry(Request $request)
    {
        try {
            $countryName = $request->country;
            $response = Http::post('https://countriesnow.space/api/v0.1/countries/states', [
                'country' => $countryName,
            ]);
            if ($response->successful()) {
                $data = $response->json();
                return $this->respond($data);
            } else {
                return $this->respondInternalServerError(ApiCode::SOMETHING_WENT_WRONG);
            }
        } catch (\Exception $e) {
            return $this->respondWithMessage(['message' => 'Une erreur s\'est produite : ' . $e->getMessage()]);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/getCityInState",
     *     summary="Obtenir les villes d'un département/État d'un pays",
     *     tags={"PaysEtatsVilles"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="country", type="string", example="Nom du pays"),
     *             @OA\Property(property="state", type="string", example="Nom du département/État"),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Liste des villes du département/État",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(
     *                     property="cities",
     *                     type="array",
     *                     @OA\Items(
     *                         type="string",
     *                         example="Nom de la ville",
     *                     ),
     *                 ),
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Une erreur interne s'est produite",
     *     ),
     * )
     */

    public function getCityInState(Request $request)
    {
        try {
            $countryName = $request->country;
            $stateName = $request->state;
            $response = Http::post('https://countriesnow.space/api/v0.1/countries/state/cities', [
                'country' => $countryName,
                'state'  => $stateName,
            ]);
            if ($response->successful()) {
                $data = $response->json();
                return $this->respond($data);
            } else {
                return $this->respondInternalServerError(ApiCode::SOMETHING_WENT_WRONG);
            }
        } catch (\Exception $e) {
            return $this->respondWithMessage(['message' => 'Une erreur s\'est produite : ' . $e->getMessage()]);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/getCityInCountry",
     *     summary="Obtenir les villes d'un pays",
     *     tags={"PaysEtatsVilles"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="country", type="string", example="Nom du pays"),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Liste des villes du pays",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(
     *                     property="cities",
     *                     type="array",
     *                     @OA\Items(
     *                         type="string",
     *                         example="Nom de la ville",
     *                     ),
     *                 ),
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Une erreur interne s'est produite",
     *     ),
     * )
     */

    public function getCityInCountry(Request $request)
    {
        try {
            $countryName = $request->country;
            $response = Http::post('https://countriesnow.space/api/v0.1/countries/cities', [
                'country' => $countryName
            ]);
            if ($response->successful()) {
                $data = $response->json();
                return $this->respond($data);
            } else {
                return $this->respondInternalServerError(ApiCode::SOMETHING_WENT_WRONG);
            }
        } catch (\Exception $e) {
            return $this->respondWithMessage(['message' => 'Une erreur s\'est produite : ' . $e->getMessage()]);
        }
    }
}
