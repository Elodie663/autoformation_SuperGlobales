<!--Formulaire POST : nom, email, password
Validation : champs non vides, email valide, mot de passe ≥ 8.
session_start(); → stocker nom et email en session.
Créer/mettre à jour un cookie last_visit.
Si validation OK → rediriger vers profil.php. Sinon → afficher erreurs.-->
<?php
session_start();
// enregistrer la visite
setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);
?>
<form method="post">
    Nom : <input type="text" name="nom">
    Email : <input type="email" name="email">
    Password : <input type="password" name="password">
    <button type="submit">Envoyer</button>
</form>
<?php
// traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $erreurs = 0; // Compteur d'erreurs
    
    $nom = trim($_POST["nom"]);
    if (empty($nom)){
        echo "<p style='color: red;'>Erreur : nom vide</p>";
        $erreurs++;
    } else {
        echo "<p style='color: green;'>Nom valide : " . htmlspecialchars($nom) . "</p>";
    }
   
   
    $email = trim($_POST["email"]);
    if (empty($email)){
        echo "<p style='color: red;'>Erreur : email vide</p>";
        $erreurs++;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: red;'>Erreur : email invalide</p>";
        $erreurs++;
    } else {
        echo "<p style='color: green;'>Email valide : " . htmlspecialchars($email) . "</p>";
    }
    $password = trim($_POST["password"]);
    if (empty($password)) {
        echo "<p style='color: red;'>Erreur : mot de passe vide</p>";
        $erreurs++;
    } elseif (strlen($password) < 8) {
        echo "<p style='color: red;'>Erreur : mot de passe trop court (minimum 8 caractères)</p>";
        $erreurs++;
    } else {
        echo "<p style='color: green;'>Mot de passe valide</p>";
    }
    
    //redirection si pas d'erreurs
    if ($erreurs === 0) {
        $_SESSION['nom'] = $nom; //sauvegarde les données de la session ici nom et mail
        $_SESSION['email'] = $email;
        header('Location: profil.php'); //Envoie une instruction au navigateur : "Va sur profil.php"
                                        //Le navigateur change automatiquement de page
                                        //C'est comme si l'utilisateur avait tapé profil.php dans la barre d'adresse
                                        //location = redirection
        exit();
    }
}
?>