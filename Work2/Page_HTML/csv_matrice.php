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
        $fichier=fopen('matrice.csv', 'r');
        $ligne = fgets($fichier);
        
        $bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8', 'root', '');
        
	while (!feof($fichier) != false) {
            $ligne = fgets($fichier);
            $cell = explode(";", $ligne);
                $req = $bdd->prepare('INSERT INTO matrice(offre, domaine, competence)Values(:offre, :domaine, :competence)');

                $req->bindParam(':offre', $cell[0]);
                var_dump($cell[0]);
                $req->bindParam(':domaine', $cell[1]);
                var_dump($cell[1]);
                $req->bindParam(':competence', $cell[2]);
                var_dump($cell[2]);

                $req->execute();
        }
        ?>
    </body>
</html>