<!DOCTYPE html>
<?php 
session_start();
// connexion a la basse de donnée
$bdd = new PDO('mysql:host=localhost;dbname=workshop2;charset=utf8','root','');

?>




<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../Css/Accueil.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="container_accueil">
            <h1>U'Teach</h1>
            <nav class="menu">
                <ul >
                    <li ><a href="#">JAVAWEB</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">MICROSOFT</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li><a href="#">PHP</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">Delivery</a>
                        <ul >
                            <li><a href="#">Java</a></li>
                            <li><a href="#">C</a></li>
                            <li><a href="#">C++</a></li>
                            <li><a href="#">C#</a></li>
                            <li><a href="#">HTML/CSS</a></li>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">PYTHON</a></li>
                            <li><a href="#">SQL</a></li>

                        </ul> 
                    </li>
                    <li ><a href="#">UO Conception - Réalisation</a>
                        <ul>
                            <li><a href="#">Bases</a></li>
                            <li><a href="#">Droit du travail</a></li>
                            <li><a href="#">Environnement managerial</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">UO Expertise</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">UO Recette</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">UO Administration</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">UO Conduite de Projets</a>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">UO AMOA</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                </ul>    
            </nav>
            <div class="topnav">
                <input type="text" placeholder="Search..">
            </div>
            <div class="user"></div>
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