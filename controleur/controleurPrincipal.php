<?php
/*
 * Description de controleurPrincipal.php
 *
 * @author joel
 * Creation 09/2024
 * Derniere MAJ 01/09/2024
 * organise les pages à executer (via leur controleur)
 */
include_once"getRacine.php";


// Par défaut le fichier à charger est l'accueil, le controleur principal va donc charger le controleur de accueil
$fichier = "c_Accueil.php";


include_once"$racine/controleur/$fichier";
?>