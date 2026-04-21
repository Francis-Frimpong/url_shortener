<?php
namespace App\Controllers;

use App\Database\Database;
use App\Models\Home;
use App\Services\HomeUrl;

require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/Home.php';
require_once __DIR__ . '/../Services/HomeUrl.php';


class HomeController
{

    private $links;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->links = new Home($pdo);
    }


    public function homePage(){
        $urlLink = $this->links->displayLinks();
        require __DIR__ . '/../pages/Home.php';
    }

    public function addLinks()
    {
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $url = trim($_POST['url']);

            if(empty($url)){
                header('location: /url_shortener/home');
                exit;
            }

           $short_url = HomeUrl::shorterLinks($url);

            if(!$short_url){
                header('location: /url_shortener/home');
                exit;
            }

            $this->links->insertUrl($url, $short_url);

            header('location: /url_shortener/home');
            exit;
        }

    }


}