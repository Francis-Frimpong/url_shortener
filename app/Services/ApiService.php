<?php
namespace App\Services;

class ApiService
{
    static public function get($url)
    {
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 100
        ]);

        $response = curl_exec($ch);

        // Check for errors
        if(curl_errno($ch)) {
            $error = curl_error($ch);
            return ['error' => $error];
        }

        // Check HTTP status
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($statusCode !== 200) {
            return ['error' => "Request failed with status $statusCode"];
        }

        // Convert JSON to PHP array
        return json_decode($response, true);
    }
}