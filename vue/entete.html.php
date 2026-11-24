<!-- 
 * Description de entete.html.php
 *
 * @author joel
 * Creation 09/2024
 * Derniere MAJ 01/09/2024
 * definit une fois pour toute le design de l'entete d'une page de l'application 
-->
 <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>tennis</title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/cgu.css");
            @import url("css/corps.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
    <nav>

        <ul id="menuGeneral">
            <li><a href="./?action=accueil">Accueil</a></li> 
            <li><a href="./?action=liste">Liste</a></li> 
            <li></li>
            <li id="logo"><a href="./?action=accueil"><img src="images/logoB2B.png" alt="logo" /></a></li>
            <li></li> 
            <li><a href="./?action=cgu">CGU</a></li>

            <li><a href="./?action=connexion"><img src="images/profil.png" alt="loupe" />Connexion</a></li>
        </ul>
    </nav>
    <div id="bouton">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul id="menuContextuel">
        <li><img src="images/logoB2B.png" alt="logo" /></li>
        
    </ul>

    <div id="corps">