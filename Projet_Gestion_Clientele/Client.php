<?php
class Client {
    private $db;

    // Méthode pour établir la connexion à la base de données
    private function connect() {
        $host = "localhost"; // Remplacez par l'hôte de votre base de données
        $dbname = "gestion_clientele"; // Remplacez par le nom de votre base de données
        $username = "root"; // Remplacez par votre nom d'utilisateur de la base de données
        $password = ""; // Remplacez par votre mot de passe de la base de données

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    // Méthode pour récupérer tous les clients
    public function getAllClients() {
        try {
            // Assurez-vous que la connexion est établie avant de préparer la requête
            if (!$this->db) {
                $this->connect();
            }

            $query = "SELECT * FROM clients"; // Remplacez "clients" par le nom de votre table des clients
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die("Erreur lors de la récupération des clients : " . $e->getMessage());
        }
    }
}

// Exemple d'utilisation pour récupérer tous les clients
$client = new Client();
$allClients = $client->getAllClients();

// Faites ce que vous voulez avec le résultat
var_dump($allClients);
?>
