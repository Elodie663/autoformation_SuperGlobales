<form method="post">
    Email : <input type="email" name="email">
    <button type="submit">envoyer</button>
</form>
<?php
if (!empty($_POST['email'])) {
    echo "Ton email est : " . htmlspecialchars($_POST['email']);
};

//l'url avec POST : anonyme
//http://localhost:3000/exo2_form_get_post/demo_post.php
?>
