<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/11/16
 * Time: 13:19
 */
session_start();

$erreur = "";
$prenom = $_SESSION["prenom"];
if (!$prenom){
    $erreur .= "Veuillez entrer votre nom";
}
$genre = $_SESSION["genre"];
if (!$genre){
    $erreur .= "Veuillez selectionner votre genre";
}
$pays = $_SESSION["pays"];
if (!$pays){
    $erreur .= "Veuillez selectionner votre pays";
}
$newsletter = $_SESSION["newsletter"];
if (!$newsletter){
    $newsletter = "non";
}

echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP - global Variable</title>
        <link type="text/css" rel="stylesheet" href="../exercice.css">
    </head>
    <body>
        <table>
            <tr>
                <td colspan="2" align="center">
                    Bonjour ' . $prenom . ',<br />que c\'est bon d\'être un ' . $genre . ',<br />j\'espère qu\'il fait beau en ' . $pays . ',<br />';
                    if ($newsletter == "non") {
                        echo 'alors comme ça on aime pas lire les *Newsletters*!';
                    } else {
                        echo 'bonne lecture de la *Newsletter*';
                    }
                echo '</td>
            </tr>
        </table>
    </body>
</html>';