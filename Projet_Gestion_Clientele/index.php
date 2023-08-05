
<?php
require_once 'connexion.php';
require_once 'Client.php';

$db = new Database();
$conn = $db->getConnexion();
$client = new Client($conn);

$clients = $client->getAllClients();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des clients</title>
    <link rel="stylesheet" href="DADA.css">
</head>
<body>
    <!-- Votre code HTML pour afficher la liste des clients ici -->
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des clients</title>
    <link rel="stylesheet" href="DADA.css">
</head>
<body>
    <div class="Djaraye">
        <h1>Liste des clients</h1>
        <table>
            <ul>
                <li><a href="index.php">liste de clients</a></li>
                <li><a href="ajouter_client.php">Ajouter un client</a></li>
                <li><a href="modifier_client.php">Modifier un client</a></li>
                <li><a href="supprimer_client.php">Supprimer un client</a></li>
            </ul>
        </table>
        <table Border="2" width="100%">
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Sexe</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($clients as $client) : ?>
                <tr>
                    <td><?php echo $client['nom']; ?></td>
                    <td><?php echo $client['adresse']; ?></td>
                    <td><?php echo $client['telephone']; ?></td>
                    <td><?php echo $client['email']; ?></td>
                    <td><?php echo $client['sexe']; ?></td>
                    <td><?php echo $client['statut']; ?></td>
                    <td>Actions</td> <!-- Ajoutez ici les liens pour les actions (modifier, supprimer, etc.) -->
                </tr>
            <?php endforeach; ?>
        </table>
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
