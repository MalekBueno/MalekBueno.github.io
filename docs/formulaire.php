<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Titre du site</title>
</head>
<body>

<header>
    <div class ="header">
        <img src="imagelogosite.jpg" alt="Logo du site" width="85">
        <H1><strong><center>Fou2Foot</center></strong></H1>
    </div>
</header>

<br>

    <tr>
        <td>Menu |</td>
        <td>Histoire du foot |</td>
        <td>Meilleurs joueurs de l'histoire |</td>
        <td>Differentes competitions</td>
    </tr>


<br>

<table border="1">
    <tr>
        <img src="imagecdm.jpg" width="200">
        <p>L’Ifab a annoncé samedi de multiples évolutions dans les règles qui verront le jour dès la Coupe du monde 2026 cet été. Elle a mis en place de multiples mesures pour faire face aux gains de temps, notamment sur les simulations. L’instance a également annoncé l’extension du recours au VAR en cas de litige sur un corner ou deuxième carton jaune. Et elle a encore d'autres évolutions en tête.</p>
    </tr>
</table>

<br>

<table border="1">
    <tr>
        <img src="imageldc.jpg" width="350">
        <p>Ligue des champions : le PSG retrouvera le club anglais de Chelsea en huitièmes de finale, pour une revanche de la Coupe du monde des clubs</p>
    </tr>
</table>

<br>
    <tr>
        <td><a href="fifa.com/fr">Liens externes : La FIFA</a></td>
    </tr>

<br>

</table>
<table>
    <br>
    <form action="formulaire.php" method="post">
        <tr>
            <td>Nom :</td>
            <td><input type ="text" name="Nom"
            placeholder="Saisir votre Nom"></td>
        </tr>
        <tr>
            <td>Prenom:</td>
            <td><input type ="text" name="Prenom"
            placeholder="Saisir votre Prenom"></td>
        </tr>
        <tr>
            <td><input type="submit" value ="Envoyer"></td>
            <td><input type="reset" value ="Annuler"></td>
        </tr>

    </form>
</table>


</body>
</html>


<?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];

echo"Bonjour ", $prenom, " ", $nom, "J'espère que t'es dans l'bueno", "<br>";
echo"<br>";

?>