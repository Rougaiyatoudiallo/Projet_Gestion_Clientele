<?php
// Inclure le fichier connexion.php s'il n'est pas déjà inclus
require_once 'connexion.php';

// Inclure le fichier Client.php pour que la classe Client soit définie
require_once 'Client.php';

// Vérifier si l'ID du client à supprimer est passé en paramètre d'URL
if (isset($_GET['id'])) {
    // Récupérer l'ID du client à supprimer
    $id = $_GET['id'];

    // Créer une instance de la classe Database pour obtenir la connexion à la base de données
    $db = new Database();
    $conn = $db->getConnexion();

    // Créer une instance de la classe Client
    $client = new Client($conn);

    // Appeler la méthode deleteClient pour supprimer le client de la base de données
    $client->deleteClient($id);

    // Rediriger vers la page index.php après la suppression du client
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un client</title>
</head>
<body>

<body width="100%" style="background-color: #528feb">

<div class="Djaraye">
        <h1></h1>
        <ul>
            <li><a href="index.php">Liste de clients</a></li>
            <li><a href="ajouter_client.php">Ajouter un client</a></li>
            <li><a href="modifier_client.php">Modifier un client</a></li>
            <li><a href="supprimer_client.php">Supprimer un client</a></li>
            <a href="modifier_client.php?id=1">Modifier le client</a>
        </ul>

        <tr>
    <td colspan="1" Width="1000">
      <form method="post" action="index.php">
        <br>
        <h1>Pour Supprimer un Client </h1>
        <br>
        
        <label>Saisir le Nom:</label>
        <input type="text" name="nom" required><br><br>
        <label>Saisir le Prénom:</label>
        <input type="text" name="prenom" required><br><br>
        <label>Saisir l'Adresse:</label>
        <input type="text" name="adresse" required><br><br>
        <label>Saisir le Numéro de Téléphone:</label>
        <input type="text" name="telephone" required><br><br>
        <label>Saisir l'Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Soit du Sexe:</label><br><br>
        <select name="sexe">
          <option value="M">Masculin</option>
          <option value="F">Féminin</option>
        </select><br><br>
        <label>Statut:</label>
        <select name="statut">
          <option value="actif">Actif</option>
          <option value="inactif">Inactif</option>
        </select><br><br>
        <input type="submit" value="Ajouter">
      </form>
    </td>
    <br>


</body>
</html>
