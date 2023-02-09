AbstractManager
Créez une classe abstraite AbstractManager, qui contient un attribut protected :

$db qui est un PDO
et 5 attributs privés :

$dbName : string
$port : string
$host : string
$username : string
$password : string
Le constructeur reçoit les attributs privés en paramètres et les initialise puis il initialise l'attribut protected en créant la connexion à la base de données.

<?php

abstract class AbstractManager {
    
    protected PDO $db;
    private string $dbName;
    private string $port;
    private string $host;
    private string $username;
    private string $password;
    
    public function construct(PDO $db, string $dbName, string $port, string $host, string $username, string $password) : void
    {
        $this->db = $db;
        $this->dbName = $dbName;
        $this->port = $port;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;

        $db = new PDO(
            "mysql:host=$host;port=$port;dbname=$dbName",
            $username,
            $password
        );
    }
}


?>