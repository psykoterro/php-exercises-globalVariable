<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/11/16
 * Time: 10:35
 */
echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - global Variable</title>
        <link type="text/css" rel="stylesheet" href="../exercice.css">
    </head>
    <body>
        <h1>Exercice 4</h1>
        <table>
            <tr>
                <td>Login :</td>
                <td>'.$_COOKIE["login"].'</td>
            </tr>
            <tr>
                <td>Password :</td>
                <td>'.$_COOKIE["password"].'</td>
            </tr>
        </table>';

    echo '</body>
</html>';
?>