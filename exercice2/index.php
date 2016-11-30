<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/11/16
 * Time: 10:02
 */
session_start();
$_SESSION["nom"] = "Durano";
$_SESSION["prenom"] = "Florian";
$_SESSION["age"] = 31;

echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2 - global Variable</title>
        <link type="text/css" rel="stylesheet" href="../exercice.css">
    </head>
    <body>
        <h1>Exercice 2</h1>
        <a href="index2.php">Se rendre sur la page 2</a>
    </body>
</html>';
?>