<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8', 'root', 'Epsi2018!');

        $req=$bdd->prepare('SELECT nom, prenom FROM utilisateurs WHERE utilisateurs.id=1');

        $req->execute();

        $lignes=$req->fetchAll();

        echo '<p>', $lignes[0]['prenom'], '<br>', $lignes[0]['nom'], '</p>';
        ?>
    </body>
</html>