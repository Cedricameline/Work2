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
        <link href="../Css/Accueil.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <?php
        session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8', 'root', '');
        
        $req=$bdd->prepare('SELECT DISTINCT offre FROM matrice');
        
        $req->execute();
        
        $offres=$req->fetchAll();
        
        $req4=$bdd->prepare('SELECT nom, prenom FROM utilisateurs WHERE utilisateurs.id=1');
        
        $req4->execute();
        
        $lignes=$req4->fetchAll();
        
        ?>
        <div id="container_accueil">
            <h1>U'Teach</h1>
            <nav class="menu">
                    <ul>
                        <?php
                        foreach($offres as $offre) {
                            $req2=$bdd->prepare('SELECT DISTINCT domaine FROM matrice WHERE offre="'.$offre['offre'].'"');
                            $req2->execute();
                            $domaines=$req2->fetchAll();
                            echo '<li><a>', $offre['offre'],'</a><ul>';

                            foreach($domaines as $domaine){
                                $req3=$bdd->prepare('SELECT DISTINCT competence, id FROM matrice WHERE domaine="'.$domaine['domaine'].'"');
                                $req3->execute();
                                $competences=$req3->fetchAll();
                            echo '<li><a>', $domaine['domaine'], '</a><ul>';

                            foreach($competences as $competence) {
                                echo "<li><a class='a_menu' href=Page_cours.php?id=".$competence['id'].">", $competence['competence'], "</a></li>";
                            }
                            echo '</ul></li>';
                            }
                            echo '</ul></li>';
                            }
                        ?>
                    </ul>
            </nav>
            <div class="topnav">
                <input type="text" placeholder="Search..">
            </div>
            <div class="user">
                <?php echo '<p>', $lignes[0]['prenom'], '<br>', $lignes[0]['nom'], '</p>'; ?>
            </div>
            <button id='button' type="button" class="btn btn-secondary">Deconnexion</button>
            <div class="cours">Cours actuel</div>
            <div class="cours_2">Compétences validées</div>
            <h2>Notifications</h2>
            <div id="notif"></div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            $('nav.menu > ul > li').hover(o => {
                $('nav.menu > ul > li').find('ul').removeClass('index-hover')
                $(o.target).find('ul').addClass('index-hover')
            })
        </script>

    </body>
</html>
