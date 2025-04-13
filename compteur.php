<?php
$filename = "visites.txt";

// Si le fichier n'existe pas, on le crée avec 0
if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

// On lit le nombre actuel
$visites = (int)file_get_contents($filename);

// On l'incrémente
$visites++;

// On le sauvegarde
file_put_contents($filename, $visites);

// On affiche le nombre
echo $visites;
?>
