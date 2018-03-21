<?php 
session_start();
// connexion a la basse de donnée
$bdd = new PDO('mysql:host=localhost;dbname=workshop2;charset=utf8','root','');
if(isset($_GET['id']) AND $_GET['id'] > 0){
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM users WHERE id= ? ');
    $requser->execute(array($getid));
    $infouser = $requser->fetch();
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
            <h1><font size="8" face="Colonna MT" color="black"><i>Profil</i></font></h1>                              
            <br>
            Nom = <?php echo $infouser['nom'] ?>
            <br>
            Mail = <?php echo $infouser['mail'] ?>
            <?php
            if(isset($erreur)){
                echo '<font color="red">'.$erreur."</font>";
            }
            ?>
        </div>
    </body>
</html>