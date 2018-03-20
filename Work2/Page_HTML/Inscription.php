<!DOCTYPE html>

<html>
    <head>
        <!-- importer le fichier de style -->
        <link href="../Css/Inscription.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div id="container_inscription">
            <!-- zone d'inscription -->
            <h1 id="Title">Inscription</h1>
            <br>
            <input type="text" placeholder="Nom" name="nom" required>  
            <input type="text" placeholder="Prénom" name="prenom" required> 
            <input type="text" placeholder="Ville" name="ville" required> 
            <input type="text" placeholder="Email" name="Email" required> 
            <input type="text" placeholder="Mot de passe" name="mdp" required> 
            <input type="text" placeholder="Confirmer mot de passe" name="username" required>
            <input type="date" id='date' name="date_naissance" required>
            <input type="text" id='description' placeholder="Description" name="description" required>
            <button id="Valider" type="button" class="btn btn-secondary">Valider</button>
        </div>
    </body>
</html>
