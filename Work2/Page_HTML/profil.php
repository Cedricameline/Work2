<?php 
session_start();
// connexion a la basse de donnée
$bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8','root','');
if(isset($_GET['id']) AND $_GET['id'] > 0){
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id= ? ');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();

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
                                          
        <h2>Profil de <?php echo $userinfo['nom']; ?></h2>
         <br /><br />
         nom = <?php echo $userinfo['nom']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
        </div>
    </body>
</html>
<?php 
}
?>