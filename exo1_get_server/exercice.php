<?php
/*
consignes:
Afficher les paramètres ville et pays de l’URL.
•
Afficher la méthode HTTP et le nom du script.
*/

//URL test http://localhost:3000/exo1_get_server/demo.php?ville=Montpellier&pays=France
echo "<h1> contenu de \$_GET</h1>";
print_r($_GET);

echo "<h2>Infos serveur</h2>";
echo "Méthode : " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Script : " . $_SERVER['PHP_SELF'] . "<br>";
echo "IP : " . $_SERVER['REMOTE_ADDR'] . "<br>";

?>