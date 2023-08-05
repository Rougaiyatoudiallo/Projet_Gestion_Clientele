<?php
require_once 'connexion.php';
require_once 'Client.php';
$db = new Database();
$conn = $db->getConnexion();
$client = new Client($conn);

if (isset($_GET['id'])) {
    $client_id = $_GET['id'];
    // Vous pouvez maintenant utiliser $client_id pour récupérer les détails du client à modifier
    
    // par exemple : $client_details = $client->getClientById($client_id);
} else {
    echo "ID du client non spécifié.";
    // Gérer le cas où l'ID n'est pas spécifié dans l'URL
}
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $sexe = $_POST['sexe'];
    $statut = $_POST['statut'];

    // Appeler la méthode pour mettre à jour les informations du client dans la base de données
    $client->updateClient($id, $nom, $adresse, $telephone, $email, $sexe, $statut);

    // Rediriger vers la page d'accueil après la mise à jour
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="BRUT.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body width="100%" style="background-color: #528feb">
    

<form>
    <h1>Contactez-nous</h1>
    <div class="separation"></div>
    <div class="corps-formulaire"> 
    <div class=" gauche">
        <div class=" groupe">
            <label>Votre nom</label>
            <input type="text">
            <i class="fas fa-user"></i>
        </div>
        <div class=" groupe">
            <label>Votre adresse e-mail</label>
            <input type="text">
            <i class="fas fa-envelope"></i>
        
        </div>
        <div class="groupe">
            <label>Votre téléphone</label>
            <input type="text">
            <i class="fas fa-mobile"></i>
        </div>
    </div>
    <div class="droite">
        <div class=" groupe">
        <label>Message</label>
        <textarea placeholder="Saisissez ici..."></textarea>
        </div>
    </div>
 </div>


    <div class="pied-formulaire" align="center">
        <button>Envoyer le Message</button>
    </div>
  
</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier un client</title>
</head>
<body>

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
        <h1>FORMULAIRE</h1>
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
  </tr></body>
</html>
