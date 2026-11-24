<?php
/*
 * Description de c_Accueil.php
 *
 * @author joel
 * Creation 09/2024
 * Derniere MAJ 01/09/2024
 * partie controleur de la page d'accueil
 */
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

/*
 creation de bouton pour ajouter des points 
 */
session_start();

$fin_du_jeu = False ;


if (!isset($_SESSION['joueur1'])) {
    $_SESSION['joueur1'] = 0 ;
}
if (!isset($_SESSION['joueur2'])) {
    $_SESSION['joueur2'] = 0;
}

if (isset($_POST['ajouter1']))  {
    $_SESSION['joueur1']++ ;
}

if (isset($_POST['ajouter2']))  {
    $_SESSION['joueur2']++ ;
}

if(isset($_POST['demarrer'])){
    $_SESSION['joueur1'] = 0 ;
    $_SESSION['joueur2'] = 0 ;
    
}

if(isset($_POST['stat'])){
    header("Location: index.php?action=stat");
    exit();
}




/*
 * 
 * creation de l'option d'enlever des points : cause d'une erreur ou autre 
 */
if (isset($_POST['retirer1'])) {
    $_SESSION['joueur1'] = max(0 , $_SESSION['joueur1'] -1) ;
}
if (isset($_POST['retirer2'])) {
    $_SESSION['joueur2'] = max(0 , $_SESSION['joueur2'] -1) ;
}


/*
 * cree un truc pour convertir les points 
 */
//joueur1
if($_SESSION['joueur1']===0) {
    $_SESSION['score1'] =0 ;
}
if($_SESSION['joueur1']===1) {
    $_SESSION['score1'] =15 ;
}
if($_SESSION['joueur1']===2) {
    $_SESSION['score1'] =30 ;
}
if($_SESSION['joueur1']===3) {
    $_SESSION['score1'] =40 ;
}
if($_SESSION['joueur1']===4) {
    $_SESSION['score1'] ="40A" ;
}

//joueur2
if($_SESSION['joueur2']===0) {
    $_SESSION['score2'] =0 ;
}
if($_SESSION['joueur2']===1) {
    $_SESSION['score2'] =15 ;
}
if($_SESSION['joueur2']===2) {
    $_SESSION['score2'] =30 ;
}
if($_SESSION['joueur2']===3) {
    $_SESSION['score2'] =40 ;
}
if($_SESSION['joueur2']===4) {
    $_SESSION['score2'] ="40A" ;
}

/*
 * ont va essaye de cree un truc pour que qlq gagne un set ou jeu jsp le truc en 2 et c pas gagne lv 
 */

if (!isset($_SESSION['jeu1'])) {
    $_SESSION['jeu1'] = 0 ;
}
if (!isset($_SESSION['jeu2'])) {
    $_SESSION['jeu2'] = 0 ;
}

if ($_SESSION['joueur1']===4  && $_SESSION['joueur2']===4){
    $_SESSION['joueur1']=3;
    $_SESSION['joueur2']=3;
}
if ($_SESSION['joueur1']===5 && $_SESSION['joueur2']===3){
    $_SESSION['joueur1']=0;
    $_SESSION['joueur2']=0;
    $_SESSION['jeu1'] = $_SESSION['jeu1'] + 1 ;
    
}
if ($_SESSION['joueur1']===3 && $_SESSION['joueur2']===2){
    $_SESSION['joueur1']=0;
    $_SESSION['joueur2']=0;
    $_SESSION['jeu1'] = $_SESSION['jeu1'] +1 ;
    
}
if ($_SESSION['joueur1']===3 && $_SESSION['joueur2']===1){
    $_SESSION['joueur1']=0;
    $_SESSION['joueur2']=0;
    $_SESSION['jeu2'] = $_SESSION['jeu1'] +1 ;
    
}
if ($_SESSION['joueur1']===3 && $_SESSION['joueur2']===0){
    $_SESSION['joueur1']=0;
    $_SESSION['joueur2']=0;
    $_SESSION['jeu1'] =$_SESSION['jeu1']+1 ;
    
}



include_once"$racine/vue/entete.html.php";
include_once"$racine/vue/vueAccueil.php";
include_once"$racine/vue/pied.html.php";
?>

