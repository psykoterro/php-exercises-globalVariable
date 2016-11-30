<?php
session_start();
echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2 - global Variable</title>
        <link type="text/css" rel="stylesheet" href="../exercice.css">
    </head>
    <body>
        <h1>Exercice 2</h1>
        <table>
            <tr>
                <td>nom</td>
                <td>'.$_SESSION["nom"].'</td>
            </tr>
            <tr>
                <td>prenom</td>
                <td>'.$_SESSION["prenom"].'</td>
            </tr>
            <tr>
                <td>age</td>
                <td>'.$_SESSION["age"].'</td>
            </tr>
        </table>
    </body>
</html>';
?>