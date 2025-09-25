<!DOCTYPE html>
<html>
<head>
    <title>Inscription à l'événement</title>
</head>
<body>
    <h1>Bienvenue !</h1>
    <p>Cliquez sur le lien pour vous inscrire</p>
    <a href="inscription.php?event=phpday">S'inscrire à l'événement</a>
<?php
if (isset($_GET['event'])){//vérifie si le paramètre event existe dans l'URL
    echo "<p style='color: blue;'>Vous allez vous inscrire à " . htmlspecialchars($_GET['event']) . "</p>";
}
?>
</body>
</html>