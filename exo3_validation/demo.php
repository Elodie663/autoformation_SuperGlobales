<form method="post">
Email : <input type="text" name="email">
<button type="submit">OK</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $email = trim($_POST["email"]); //trim() supprime les espaces au début et à la fin
                                    //Stocke le résultat dans la variable $email
    if (empty($email)) {
        echo "Erreur : email vide.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //filter_var() : Validation robuste du format email
        echo "Erreur : email invalide";
    } else {
        echo "Email valide : " . htmlspecialchars($email);
    }
}
?>