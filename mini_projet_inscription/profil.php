<!--Afficher nom et email depuis $_SESSION.
Afficher last_visit depuis $_COOKIE.
Bouton « Déconnexion » qui détruit la session et redirige vers index.php.-->




<?php
session_start();
if (!isset($_SESSION['nom'])) {
    header("Location: inscription.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil utilisateur</title>
</head>
<body>
<h1>Bienvenue sur votre profil ! </h1>
    <a href="logout.php" style="background-color: red; color: white; padding: 10px; text-decoration: none;">
        Déconnexion</a>
</body>

</html>


<?php
if (isset($_COOKIE['last_visit'])) {
    echo "<p><strong>Dernière visite :</strong> " . $_COOKIE['last_visit'] . "</p>";
} else {
    echo "<p><strong>Première visite !</strong></p>";
}
?>


