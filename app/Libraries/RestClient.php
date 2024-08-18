<?php

namespace App\Libraries;

class RestClient
{
    private $baseUrl = 'http://localhost:8080';

    public function request($method, $endpoint, $data = [])
    {
        $client = \Config\Services::curlrequest();

        // Menentukan opsi permintaan cURL
        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => $data,
        ];

        try {
            $response = $client->request($method, $this->baseUrl . $endpoint, $options);
            return json_decode($response->getBody());
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            log_message('error', 'cURL Error: ' . $e->getMessage());
            return null;
        }
    }
}
