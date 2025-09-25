<?php
session_start();  // OBLIGATOIREMENT en premier

// traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom']);
    if (!empty($nom)) {
        $_SESSION['user'] = $nom;  // sauvegarde la saisie utilisateur
    }
}

// enregistrer la visite
setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);
?>

<form method="post">
Nom : <input type="text" name="nom">
<button type="submit">OK</button>
</form>

<?php
if (isset($_SESSION['user'])) {
    echo "bonjour " . $_SESSION['user'] . "<br>";
    if (isset($_COOKIE['last_visit'])) {
        echo "dernière visite : " . $_COOKIE['last_visit'];
    }
} else {
    echo "Veuillez saisir votre nom.";
}
?>

<!--A RETENIR :
Points clés à retenir :

Session = Stockage serveur temporaire (jusqu'à fermeture navigateur)
Cookie = Stockage navigateur avec durée définie
isset() = "Est-ce que ça existe ?"
empty() = "Est-ce que c'est vide/faux ?"
trim() = Nettoie les espaces parasites


-->