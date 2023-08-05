<?php

class Database
{
    private $host = "localhost";
    private $db_name = "gestion_clientele";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnexion()
    {
        try {
            $this->db = new PDO("mysql:host=$host;port=port_number;dbname=$dbname", $username, $password);

            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
