<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/11/16
 * Time: 13:19
 */
session_start();

$erreur = "";
$prenom = $_COOKIE["prenom"];
if (!$prenom){
    $erreur .= "Veuillez entrer votre nom";
}elseif (preg_match("/[0-9]+/", $prenom)){
    $erreur .= "Votre nom ne doit pas contenir de chiffre...";
}else{
    $NbLettresPrenom = mb_strlen(str_replace("-","",$prenom),'UTF-8');
}
$genre = $_COOKIE["genre"];
if (!$genre){
    $erreur .= "Veuillez selectionner votre genre";
}
$pays = $_COOKIE["pays"];
if (!$pays){
    $erreur .= "Veuillez selectionner votre pays";
}
$newsletter = $_COOKIE["newsletter"];
if (!$newsletter){
    $newsletter = "non";
}

echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP - global Variable cookie</title>
        <link type="text/css" rel="stylesheet" href="../exercice.css">
    </head>
    <body>
        <table>
            <tr>
                <td colspan="2" align="center">
                    Bonjour ' . $prenom . ' ('.$NbLettresPrenom.' Lettres),<br />que c\'est bon d\'être un ' . $genre . ',<br />j\'espère qu\'il fait beau en ' . $pays . ',<br />';
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