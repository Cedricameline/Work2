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
        $bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8', 'root', '');
        
        $req=$bdd->prepare('SELECT competence FROM matrice m JOIN apprenants a ON m.id=a.id_competence WHERE id_apprenant=1');
        
        $req->execute();
        
        $lignes=$req->fetchAll();
        
        foreach($lignes as $ligne) {
            echo $ligne['competence'];
        }
        ?>
    </body>
</html>