<?php

namespace App\Services;

use GuzzleHttp\Client;

class NomDeVotreService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://url-de-votre-api.com/api/v1/',
            'headers' => [
                'Accept' => 'application/json',
                // Autres headers si nécessaires
            ],
        ]);
    }

    public function getAppelsApi()
    {
        $response = $this->client->request('GET', 'endpoint-de-votre-api');

        return json_decode($response->getBody()->getContents(), true);
    }

    // Ajoutez d'autres méthodes pour d'autres appels API
}
