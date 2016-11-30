<?php

echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1 - global Variable</title>
        <link type="text/css" rel="stylesheet" href="../exercice.css">
    </head>
    <body>
        <h1>Exercice 1</h1>
        <table>
            <tr>
                <td>son User Agent</td>
                <td>' .$_SERVER["HTTP_USER_AGENT"].'</td>
            </tr>
            <tr>
                <td>son adresse ip</td>
                <td>'.$_SERVER["REMOTE_ADDR"].'</td>
            </tr>
            <tr>
                <td>le nom du serveur</td>
                <td>'.$_SERVER["SERVER_NAME"].'</td>
            </tr>
        </table>
    </body>
</html>';
?>