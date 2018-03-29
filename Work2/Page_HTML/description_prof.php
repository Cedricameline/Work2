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
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8', 'root', '');
        
        $req=$bdd->prepare('SELECT id, nom, prenom, ville, Email, description, score FROM utilisateurs, peut_enseigner WHERE id_competence='.$_SESSION['id_competence'].' AND utilisateurs.id=peut_enseigner.id_utilisateur');
        
        $req->execute();
        
        $lignes=$req->fetchAll();
        
        $req2=$bdd->prepare('SELECT competence FROM matrice WHERE id='.$_SESSION['id_competence'].'');
        
        $req2->execute();
        
        $resultat=$req2->fetchAll();
        ?>
        
        <div id='container_cours'>
            <h1>U'teach</h1>
            <?php echo '<h2>', $resultat[0]['competence'], '</h2>' ?>
            <div id='conteneur_enseignants'>
                <div id='conteneur_scrolable'>
                    <table id='enseignants'>
                        <?php
                        foreach($lignes as $ligne) {
                            echo '<tr><td class = "enseignants">', 'Nom : ', $ligne['nom'], $ligne['prenom'], '<br>', 'Ville : ', $ligne['ville'], '<br>', 'Email : ', $ligne['Email'], '</td><td class="notes">', $ligne['score'], '</td></tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="description">
                <p>Description</p>
                <?php
                echo "<h3>", $_GET['description'], "</h3>";
                ?>
                <form method='POST'>
                    <input type='text' placeholder='note' id='note' name='note'>
                    <input id='noter' type="submit" name='notation' class="btn btn-secondary">
                </form>
                <?php
                if (isset($_POST['note']) && $_POST['note'] >= 0 && $_POST['note'] <= 10) {
                    if (!empty($_POST['note'])) {
                        $note=($_POST['note']);
                
                        $req3=$bdd->prepare("INSERT INTO peut_enseigner(id_utilisateur, id_competence, score) VALUES(':id_utilisateur', ':id_competence', ':score')");

                        $req3->bindParam(':id_utilisateur', $_GET['id']);
                        $req3->bindParam(':id_competence', $_SESSION['id_competence']);
                        $req3->bindParam(':score', $note);

                        $req3->execute();

                        $resultats=$req3->fetchAll();
                    }
                    else {
                        
                    }
                    
                }
                else {
                    
                }
                ?>
            </div>
            
        </div>
    </body>
</html>
