
<form method="post">
    Nom : <input type="text" name="nom">
    Email : <input type="email" name="email">
    Age : <input type="number" name="age" >
    <button type="submit">Envoyer</button>
</form>

<?php
if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['age'])) {
    echo "<h3>Informations reçues :</h3>";
    echo "Bonjour " . htmlspecialchars($_POST['nom']) . "<br>";
    echo "Email : " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Âge : " . htmlspecialchars($_POST['age']) . " ans";
}

//avec la méthode post = rien ne s'affiche dans l'url
?>


<form method="get">
        Nom : <input type="text" name="nom" required>
    Email : <input type="email" name="email" required>
    Age : <input type="number" name="age" required>
    <button type="submit">Envoyer</button>
</form>
<?php
if (!empty($_GET['nom']) && !empty($_GET['email']) && !empty($_GET['age'])) {
    echo "<h3>Informations reçues :</h3>";
    echo "Bonjour " . htmlspecialchars($_GET['nom']) . "<br>";
    echo "Email : " . htmlspecialchars($_GET['email']) . "<br>";
    echo "Âge : " . htmlspecialchars($_GET['age']) . " ans";
};
//avec la méthode GET les infos apparaissent dans l'url
//http://localhost:3000/exo2_form_get_post/exercice.php?nom=elodie&email=dqjdhqjd%40qjdhqjk.com&age=30
?>
