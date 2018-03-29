<?php 
session_start();
// connexion a la basse de donnée
$bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8','root','');
if(isset($_POST['connexion'])){
    $mailconnect=htmlspecialchars($_POST['Email']);
    $mdpconnect=sha1($_POST['mdp']);
    if(!empty($mailconnect) AND !empty($mdpconnect)){
        $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE Email =? AND mdp=? ");
        $requser->execute(array($mailconnect,$mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist==1){
            $infouser=$requser->fetch();
            $_SESSION['id'] = $infouser['id'];
            $_SESSION['nom'] = $infouser['nom'];
            $_SESSION['prenom'] = $infouser['prenom'];
            header('Location: Accueil.php'); 
        }else{
            $erreur = "Mauvais mail ou mot de passe";
        }
    }else{
        $erreur='Tous les champs doivent etre completes !';
    }
    
}

?>

<html>
    <head>
        <!-- importer le fichier de style -->
        <link href="../Css/format.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            <form method="POST" action="" id="form">

                <h1><font size="8" face="Colonna MT" color="black"><i>U'Teach</i></font></h1>                              
                <input type="email" placeholder="Mail" name="Email">               
                <input type="password" placeholder="Mot de passe" name="mdp" >
                <input type="submit" id='LOGIN' name="connexion" value='LOGIN' >
                <input type="button" id='INSCRIPTION' value="INSCRIPTION" onclick="javascript:location.href='Inscription.php'">

                
            </form>
            <?php
            if(isset($erreur)){
                echo '<font color="red">'.$erreur."</font>";
            }
            ?>
        </div>
    </body>
</html>