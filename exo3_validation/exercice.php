<!--
consignes : 
Créer un formulaire avec nom, email, age.
Règles :
nom non vide.
email valide.
age entier positif.
Afficher erreurs sinon valeurs.-->

<form method="post">
    Nom : <input type="text" name="nom">
    Email : <input type="email" name="email">
    Age : <input type="number" name="age">
    <button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    
    $nom = trim($_POST["nom"]);
    if (empty($nom)){
        echo "<p style='color: red;'>Erreur : nom vide</p>";
    } else {
        echo "<p style='color: green;'>Nom valide : " . htmlspecialchars($nom);
    }
    
    
    $email = trim($_POST["email"]);
    if (empty($email)){
        echo "<p style='color: red;'>Erreur : email vide";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: red;'>Erreur : email invalide.";
    } else {
        echo "<p style='color: green;'>Email valide : " . htmlspecialchars($email);
    }

    $age = trim($_POST["age"]);
    if (empty($age)) {
        echo "<p style='color: red;'>Erreur : âge vide</p>";
    } elseif (!is_numeric($age) || $age <= 0) {
        echo "<p style='color: red;'>Erreur : âge doit être un entier positif</p>";
    } else {
                echo "<p style='color: green;'>Âge valide : " . htmlspecialchars($age) . " ans</p>";
    }
}
?>