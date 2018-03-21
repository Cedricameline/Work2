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
        // put your code here
        ?>
        <div id="container_accueil">
            <h1>U'Teach</h1>
            <nav class="menu">
                <ul >
                    <li ><a href="#">Algorithmie</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">Analyse financière</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li><a href="#">Bases de données</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">Développement</a>
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
                    <li ><a href="#">Droit</a>
                        <ul>
                            <li><a href="#">Bases</a></li>
                            <li><a href="#">Droit du travail</a></li>
                            <li><a href="#">Environnement managerial</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">Gestion de projet</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">Infrastructure système</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">Langues</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">Mathématiques</a>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    <li ><a href="#">Piratage éthique</a>
                        <ul>
                            <li><a href="#">Cour 1</a></li>
                            <li><a href="#">Cour 2</a></li>
                            <li><a href="#">Cour 3</a></li>
                        </ul> 
                    </li>
                    
                    
                    <li ><a href="#">Réseau</a>
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
