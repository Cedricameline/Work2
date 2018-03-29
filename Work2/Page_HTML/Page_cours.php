<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../Css/css_cours.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8', 'root', '');
        
        $req=$bdd->prepare('SELECT * FROM utilisateurs, peut_enseigner WHERE id_competence='.$_GET['id'].' AND utilisateurs.id=peut_enseigner.id_utilisateur');
        
        $req->execute();
        
        $lignes=$req->fetchAll();
        
        $req2=$bdd->prepare('SELECT competence FROM matrice WHERE id='.$_GET['id'].'');
        
        $req2->execute();
        
        $resultat=$req2->fetchAll();
        
        $_SESSION['id_competence']=$_GET['id'];
        ?>
        
        <div id='container_cours'>
            <h1>U'teach</h1>
            <?php echo '<h2>', $resultat[0]['competence'], '</h2>' ?>
            <div id='conteneur_enseignants'>
                <div id='conteneur_scrolable'>
                    <table id='enseignants'>
                        <?php
                        foreach($lignes as $ligne) {
                            echo "<tr><td class = 'enseignants'><a href='description_prof.php?description=".$ligne['description']."&id=".$ligne['id']."'>", "Nom : ", $ligne['nom'], $ligne['prenom'], "<br>", "Ville : ", $ligne['ville'], "</a><br>", "Email : ", "<adress>" , $ligne['Email'], "</adress></td><td class='notes'>", $ligne['score'], "</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="description">Description<br>Modalités de rencontre</div>
        </div>
    </body>
</html>