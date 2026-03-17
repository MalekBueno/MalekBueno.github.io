<?php
try{
    $bdd = new PDO(
        "mysql:host=localhost;dbname=bdd_fou2foot;charset=utf8",
        "usersiteap",
        "usersiteap!"
    );
}catch(Exception $e){
    die("Erreur : " .$e->getMessage());
}
?>