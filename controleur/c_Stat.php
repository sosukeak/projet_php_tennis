<?php
/*
 * Description de vueAccueil.php
 *
 * @author joel , kalvin 
 * Creation 09/2024
 * Derniere MAJ 14/09/2026
 * partie affichage de la page d'accueil
 */



if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

session_start();

include_once "$racine/vue/entete.html.php";
include_once "$racine/vue/vueStat.php";
include_once "$racine/vue/pied.html.php";

?>