<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\CURLRequest;

class RestApiModel extends Model
{
    protected $apiBaseURL;

    public function __construct()
    {
        $this->apiBaseURL = getenv('api.baseURL');
        $this->client = \Config\Services::curlrequest();
    }

    public function get($endpoint)
    {
        $response = $this->client->get("{$this->apiBaseURL}/{$endpoint}");
        return json_decode($response->getBody(), true);
    }

    public function post($endpoint, $data)
    {
        $response = $this->client->post("{$this->apiBaseURL}/{$endpoint}", [
            'json' => $data
        ]);
        return json_decode($response->getBody(), true);
    }

    public function put($endpoint, $data)
    {
        $response = $this->client->put("{$this->apiBaseURL}/{$endpoint}", [
            'json' => $data
        ]);
        return json_decode($response->getBody(), true);
    }

    public function delete($endpoint)
    {
        $response = $this->client->delete("{$this->apiBaseURL}/{$endpoint}");
        return json_decode($response->getBody(), true);
    }
}
