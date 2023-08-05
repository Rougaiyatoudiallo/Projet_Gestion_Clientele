<?php
require_once 'connexion.php';
require_once 'Client.php';

$db = new Database();
$conn = $db->getConnexion();
$client = new Client($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les données soumises depuis le formulaire
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $sexe = $_POST["sexe"];
    $statut = $_POST["statut"];

    // Insérer le nouveau client dans la base de données
    $client->createClient($nom, $adresse, $telephone, $email, $sexe, $statut);

    // Rediriger vers la page index.php après l'ajout du client
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un client</title>
    <link rel="stylesheet" href="DADA.css">
</head>
<body>
    <div class="Djaraye">
        <h1>Ajouter un client</h1>
        <table>
            <ul>
                <li><a href="index.php">liste de clients</a></li>
                <li><a href="ajouter_client.php">Ajouter un client</a></li>
                <li><a href="modifier_client.php">Modifier un client</a></li>
                <li><a href="supprimer_client.php">Supprimer un client</a></li>
            </ul>
        </table>
        <form method="post">
            <!-- Ajoutez ici les champs du formulaire pour ajouter un nouveau client -->
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="adresse" placeholder="Adresse">
            <input type="text" name="telephone" placeholder="Téléphone">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="sexe" placeholder="Sexe">
            <input type="text" name="statut" placeholder="Statut">
            <input type="submit" value="Ajouter le client">
        </form>
    </div>
    <br>
    <table>
        <tr>
            <td colspan="2" height="100%">
                <img src="Ma troisieme image.webp" height="560px" width="1350">
            </td>
        </tr>
    </table>
</body>
</html>
