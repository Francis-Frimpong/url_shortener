<?php
namespace App\Services;

require_once __DIR__ ."/../Services/ApiService.php";

class HomeUrl
{
    static public function shorterLinks($formData)
    {
        $data = ApiService::post(
            'https://cleanuri.com/api/v1/shorten',
            ['url' => $formData]
        );

        if(isset($data['error'])){
            return null;
        }

        $short_url = $data['result_url'] ?? null;

        if(!$short_url){
            return null;
        }

        
        $short_code = basename($short_url);

        return $short_code;
    }
}