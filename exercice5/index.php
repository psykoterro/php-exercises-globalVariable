<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/11/16
 * Time: 10:38
 */
session_start();

if (isset($_POST["login"]) || isset($_POST["password"])){
    $_COOKIE["login"] = $_POST["login"];
    $_COOKIE["password"] = $_POST["password"];
}

echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - global Variable</title>
        <link type="text/css" rel="stylesheet" href="../exercice.css">
    </head>
    <body>
        <h1>Exercice 5</h1>
        <form method="post" action="index.php">
            <table>
                <tr>
                    <td>
                        <label for="login">Login :</label>
                    </td>
                    <td>
                        <input type="text" name="login" value="'.$_COOKIE["login"].'" id="login">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pasword">Password :</label>
                    </td>
                    <td>
                        <input type="password" name="password" value="'.$_COOKIE["password"].'" id="pasword">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button type="submit">Modifier</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>';
?>