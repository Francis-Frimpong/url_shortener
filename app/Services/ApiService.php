<?php
namespace App\Services;

class ApiService
{
       
    static public function post($url, $data = [])
    {
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 100,

            // 👇 THIS IS WHAT MAKES IT POST
            CURLOPT_POST => true,

            // 👇 SEND DATA
            CURLOPT_POSTFIELDS => http_build_query($data),

            // 👇 OPTIONAL BUT GOOD PRACTICE
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded'
            ]
        ]);

        $response = curl_exec($ch);

        // Error handling
        if (curl_errno($ch)) {
            return ['error' => curl_error($ch)];
        }

        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($statusCode !== 200) {
            return ['error' => "Request failed with status $statusCode"];
        }

        return json_decode($response, true);
    }
}