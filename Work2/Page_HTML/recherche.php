<?php
session_start();
     
$bdd = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8', 'root', '');
    // Je teste pour savoir si j'ai quelque chose dans POST
    if(isset($_POST'keywords']) && !empty($_POST)) {
        // J'ai quelque chose donc je peux continuer


        // Je commence à séparer les différents mots clés
        $keywords = explode(' ', $_POST'keywords']);
        // J'initialise ma variable pour la requête SQL
        $like = "";
        foreach($keywords as $keyword) {
            // Si le mot clé est supérieur à 3 caractères (tu n'es pas obligé)
            if(strlen($keyword) >= 3) {
                // Je concatène
                // Le % en SQL est un joker, ça remplace n'importe quel caractère. Si tu veux que se soit une recherche explicite retire les %
                $like.= " competence LIKE '%".$keyword."%' OR";
            }
        }
        // Je retire le dernier OR qui n'a pas lieu d'être
        $like = substr($like, 0, strlen($like) - 3);
        Connexion à ta base de données
        $req = "SELECT matrice FROM competence WHERE ".$like;
        Traitement de tes résultats
    } else {
        // Je n'ai rien, j'informe l'utilisateur 
        die('Veuillez saisir quelque chose dans le champs de recherche.');
    }
?>