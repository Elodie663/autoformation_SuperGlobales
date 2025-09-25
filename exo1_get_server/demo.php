<?php

//URL test : http://localhost/demo.php?nom=Pedri&age=22
echo "<h3>Contenu de \$_GET</h3>";
print_r($_GET);
/*
echo "<h3>Infos serveur</h3>";
echo "Méthode : " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Script : " . $_SERVER['PHP_SELF'] . "<br>";
echo "IP : " . $_SERVER['REMOTE_ADDR'] . "<br>";
*/
/*
REQUEST_METHOD : Affiche la méthode HTTP utilisée (GET, POST, etc.)
PHP_SELF : Affiche le chemin du script actuel (/demo.php)

REMOTE_ADDR : Cette variable contient l'adresse IP du client qui fait la requête vers ton serveur PHP.
*/


?>