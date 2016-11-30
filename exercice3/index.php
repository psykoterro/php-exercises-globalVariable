<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/11/16
 * Time: 10:14
 */
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    setcookie("login", $_POST["login"], 0, "/", "localhost");
    setcookie("password", $_POST["password"], 0, "/", "localhost");
}

echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3 - global Variable</title>
        <link type="text/css" rel="stylesheet" href="../exercice.css">
    </head>
    <body>
        <h1>Exercice 3</h1>
        <form method="post" action="index.php">
            <table>
                <tr>
                    <td>
                        <label for="login">Login :</label>
                    </td>
                    <td>
                        <input type="text" name="login" placeholder="Login..." id="login">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pasword">Password :</label>
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="Password..." id="pasword">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button type="submit">Sign in</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>';
?>