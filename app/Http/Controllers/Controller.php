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
 *         title="Espace Show API Documentation",
 *         version="1.0"
 *     ),
 *     @OA\Server(
 *         url="http://localhost:8000/api/documentation",
 *         description="Espace Show API Server"
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
    /**
     * La demande n'est pas valide. Ce code est renvoyé lorsque le serveur tente de traiter la demande,
     *  mais que des aspects de cette demande ne sont pas valides
     */

    public function respondBadRequest($api_code)
    {
        return $this->respondWithError($api_code, 400);
    }
    /**
     * Renvoyé par le serveur d'applications lorsque la sécurité de l'application est activée et
     *  que des informations d'autorisation n'apparaissent pas dans la demande.
     */
    public function respondUnAuthorizedRequest($api_code)
    {
        return $this->respondWithError($api_code, 401);
    }
    /**
     * Indique que le client a tenté d'accéder à une ressource à laquelle il n'a pas accès
     */
    public function respondForbidden($api_code)
    {
        return $this->respondWithError($api_code, 403);
    }

    /**
     * Indique que la ressource ciblée n'existe pas.
     * L'URI est peut-être incorrect ou la ressource a peut-être été supprimée.
     */

    public function respondNotFound($api_code)
    {
        return $this->respondWithError($api_code, 404);
    }
}
