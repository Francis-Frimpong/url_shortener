<?php
namespace App\Models;

USE PDO;

class Home
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertUrl($original_url, $short_code)
    {
        $sql = "INSERT INTO links (original_url, short_code) VALUES(?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$original_url, $short_code]);

        return $stmt->fetch();
    }
}