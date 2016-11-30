<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/11/16
 * Time: 10:41
 */
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION["prenom"] = $_POST["prenom"];
    $_SESSION["genre"] = $_POST["genre"];
    $_SESSION["pays"] = $_POST["pays"];
    $_SESSION["newsletter"] = $_POST["newsletter"];
}

echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP - global Variable</title>
        <link type="text/css" rel="stylesheet" href="../exercice.css">
    </head>
    <body>
        <h1>Lou TP di Professor</h1>';
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            header('Location: index2.php');
        }else {
            echo '<form method="post" action="index.php">
                <table>
                    <tr>
                        <td>
                            <label for="prenom">Prénom :</label>
                            <input type="text" name="prenom" placeholder="Ton prénom..." id="prenom">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="genref">Femme </label>
                            <input type="radio" name="genre" value="Femme" id="genref">&nbsp;
                            <label for="genreh">Homme </label>
                            <input type="radio" name="genre" value="Homme" id="genref">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pays">Pays</label>
                            <select name="pays" id="pays">
                                <option value="France">France</option>
                                <option value="Espagne">Espagne</option>
                                <option value="Allemagne">Allemagne</option>
                                <option value="Italie">Italie</option>
                                <option value="Suisse">Suisse</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="newsletter">Inscription Newsletter : </label>
                            <input type="checkbox" name="newsletter" value="oui" id="newsletter">&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><button type="submit">Valider</button></td>
                    </tr>
                </table>
            </form>';
        }
    echo '</body>
</html>';
?>