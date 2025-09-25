<form method="get"> <!--Les données seront envoyées via l'URL (paramètres GET)-->
    Nom : <input type="text" name="nom"> <!--name="nom" : Le champ texte s'appellera "nom" dans $_GET-->
    <button type="submit">Envoyer</button>
</form>
<?php
if (!empty($_GET['nom'])){//Vérifie si le champ "nom" existe ET n'est pas vide
    echo "Bonjour " . htmlspecialchars($_GET['nom']); //htmlspecialchars() : Sécurise l'affichage (évite les attaques XSS)
};

/*dans l'url :
http://localhost:3000/exo2_form_get_post/demo_get.php?nom=elodie*/

/*
Une attaque par XSS est une injection de code malveillant dans une plateforme en ligne apparemment sûre. 
Les hackers injectent du code malveillant à partir des paramètres d'accès côté client pour exploiter les 
vulnérabilités dans les applications Web.
*/

?>