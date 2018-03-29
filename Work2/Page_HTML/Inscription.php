<!DOCTYPE html>
<?php 

// connexion a la basse de donnée


$bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8','root','');



if(isset($_POST['inscription'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $ville = htmlspecialchars($_POST['ville']);
        $mail = htmlspecialchars($_POST['Email']);
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']);
        $date_naissance = htmlspecialchars($_POST['date_naissance']);
        $description = htmlspecialchars($_POST['description']);
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['ville']) AND !empty($_POST['Email']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['description']))
    {   
        $reqmail = $bdd->prepare("SELECT * FROM utilisateurs WHERE Email = ? ");
        $reqmail->execute(array($mail));
        $mailexist = $reqmail->rowCount();
        if ($mailexist == 0){
            if($mdp==$mdp2){
                $req = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, ville, Email, mdp, date_naissance, description) VALUE(:nom, :prenom, :ville, :Email, :mdp, :date_naissance, :description)');
                $req->bindParam(':nom', $nom);
                $req->bindParam(':prenom', $prenom);
                $req->bindParam(':ville', $ville);
                $req->bindParam(':Email', $mail);
                $req->bindParam(':mdp', $mdp);
                $req->bindParam(':date_naissance', $date_naissance);
                $req->bindParam(':description', $description);
                $req->execute();
                $erreur = "Votre compte a bien ete cree !";
                header('Location: connexion.php'); 
            } else {
                $erreur = "vos mots de passes ne correspondent pas !";
            }
        } else{
            $erreur = "Adresse mail déja utilisée !";
        }
    } else {
       $erreur = "Tout les champs doivent etre completes !";
    }
}
?>

<html>
    <head>
        <!-- importer le fichier de style -->
        <link href="../Css/Inscription.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
    </head>
    <body>
        <div id="container_inscription">
            <!-- zone d'inscription -->
            <h1><font size="7" face="Colonna MT" color="black">Inscription</font></h1>
            <form method="POST" action="">
                <input type="text" placeholder="Nom" id="nom" name="nom"> 
                <input type="text" placeholder="Prenom" id="prenom" name="prenom">
                <input type="text" placeholder="Ville" id="ville" name="ville">
                <input type="email" placeholder="Mail" id="Email" name="Email">  
                <input type="password" placeholder="Mot de passe" id="password" name="mdp">
                <input type="text" placeholder="Confirme mot de passe" id="password2" name="mdp2"> 
                <input type="date"  max="2005-01-01" min="1900-01-01" id="date_naissance" name="date_naissance" >
                <input type="text" placeholder="Description de vous" id="description" name="description"> 
                <input id="Valider" type="submit" name="inscription" value="je m'inscris">
            </form>
            <?php
            if(isset($erreur)){
                echo '<font color="red">'.$erreur."</font>";
            }
            ?>
        </div>
    </body>
</html>