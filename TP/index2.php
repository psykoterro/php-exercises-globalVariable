<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/11/16
 * Time: 11:08
 */
session_start();

$erreur = "";
$prenom = $_SESSION["prenom"];
if (!$prenom){
    $erreur .= "Veuillez entrer votre nom...";
}elseif (preg_match("/[0-9]+/", $prenom)){
    $erreur .= "Votre nom ne doit pas contenir de chiffre...";
}
$genre = $_SESSION["genre"];
if (!$genre){
    $erreur .= "Veuillez selectionner votre genre...";
}
$pays = $_SESSION["pays"];
if (!$pays){
    $erreur .= "Veuillez selectionner votre pays...";
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
        <h1>Lou TP di Professor - Reception variable session</h1>';
        if ($erreur != ""){
            echo '<table>
                <tr>
                    <td>'.str_replace("...", "<br />", $erreur).'</td>
                </tr>
            </table>';
        }else {
            echo '<table>
                <tr>
                    <td>Prénom</td>
                    <td>' . $prenom . '</td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>' . $genre . '</td>
                </tr>
                <tr>
                    <td>Pays</td>
                    <td>' . $pays . '</td>
                </tr>
                <tr>
                    <td>Inscription Newsletter</td>
                    <td>' . $newsletter . '</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="index3.php">Page Suivante</a></td>
                </tr>
            </table>';
        }
    echo '</body>
</html>';