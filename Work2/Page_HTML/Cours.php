<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../Css/Cours.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Calendrier</title>
        <script type="text/javascript" language="javascript">


		<!--


       maDate = new Date();

       indiceJour = maDate.getDay();
            monJour = maDate.getDate();
            monMois = maDate.getMonth();
            monAnnee = maDate.getFullYear();

       // Tableau des mois
            mois = new Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Novembre", "Décembre");

       // Tableau des jours de la semaine
            jours = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");


       // Elements pour algorithme
            premierJour = new Date(monAnnee, monMois, 1);
            dernierJour = new Date(monAnnee, monMois + 1, 0);
            if (monMois == 11) {
                premierJourMoisSuivant = new Date(monAnnee + 1, 0, 1);
            } else {
                premierJourMoisSuivant = new Date(monAnnee, monMois + 1, 1);
            }

       alert("1er jour = " + premierJour);
                    alert("1er jour mois suivant = " + premierJourMoisSuivant);

       nombreJours = 0;


      //-->            



</script>
 <title></title>
        </head>
        <body>
            <div id='container_cours'>
                <h1>U'teach</h1>
                <div class="topnav">
                    <input type="text" placeholder="Search..">
                </div>
                <div class="user"></div>
                <button id='button' type="button" class="btn btn-secondary">Deconnexion</button>
                <div id='conteneur_enseignants'>
                    <div id='conteneur_scrolable'>

                        <table id='enseignants'>
                            <tr>
                                <td class='enseignants'>
                                    <p>Gabriel Poncé<br>Nantes</p>
                                </td>
                                <td class='notes'>
                                    <p>3.5</p>
                                </td>
                            </tr>
                        </table>
                    </div> 
                </div>
                <div class="description">Description <br>Modalités de rencontre</div>
                <button id='reservation' type="button" class="btn btn-secondary">Reservation</button>
                <table class="calendar" border="1">
                    <tr>
                        <td colspan="7"><script type="text/javascr                            ipt"language="jav                        ascript">
            <!--
	document.write(mois[mon                            Mois] + " / " + mo                                    nAnnee);
       /                            /-->
                              </script></td>
	
	
	
	</tr>
                        <tr>
                        <script type="text/javascript"language="javascript">
                    <!--
                for (indice = 0; indice < jours.length; indice++) {
                        document.write("<td>" + jours[indice] + "</td>");


                    }
                    //-->

                         </script>
	</tr>
                        <tr>
                        <script type="text/javascript"language="javascript">
                    <!--
                        for (i = 0; i < premierJour.getDay(); i++) {
                        document.write("<td>*</td>");

                        nombreJours = nombreJours + 1;
                    }
                    for (j = 1; j < dernierJour.getDate() + 1; j++) {
                        document.write("<td>" + j + "</td>");

                        nombreJours = nombreJours + 1;

                        // Nouvelle rangée ?
                        if (nombreJours == 7) {
                            document.write("</tr><tr>");
                            nombreJours = 0;
                }

                    }
                    if (nombreJours != 0) {

                        for (k = nombreJours + 1; k < 7 + 1; k++) {
                            document.write("<td>*</td>");
                        }
                    }
                    //-->
                            </script>
                            </tr>
                        </table
                    </div>
                </body>
            </html>