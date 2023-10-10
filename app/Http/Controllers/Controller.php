<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use OpenApi\Annotations as OA;


/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         title="API Documentation",
 *         version="1.0"
 *     ),
 *     @OA\Server(
 *         url="http://localhost/api",
 *         description="API Server"
 *     ),
 *     @OA\Components(
 *         @OA\Schema(
 *             schema="Role",
 *             title="Role",
 *             description="Modèle de données pour un rôle",
 *             @OA\Property(
 *                 property="id",
 *                 type="integer",
 *                 format="int64",
 *                 description="ID du rôle"
 *             ),
 *             @OA\Property(
 *                 property="name",
 *                 type="string",
 *                 description="Nom du rôle"
 *             ),
 *
 *         )
 *     )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function respond($data, $msg = null)
    {
        return ResponseBuilder::asSuccess()->withData($data)->withMessage($msg)->build();
    }

    public function respondWithMessage($msg)
    {
        return ResponseBuilder::asSuccess()->withMessage($msg)->build();
    }

    public function respondWithError($api_code, $http_code)
    {
        return ResponseBuilder::asError($api_code)->withHttpCode($http_code)->build();
    }

    public function respondBadRequest($api_code)
    {
        return $this->respondWithError($api_code, 400);
    }
    public function respondUnAuthorizedRequest($api_code)
    {
        return $this->respondWithError($api_code, 401);
    }
    public function respondNotFound($api_code)
    {
        return $this->respondWithError($api_code, 404);
    }
}
