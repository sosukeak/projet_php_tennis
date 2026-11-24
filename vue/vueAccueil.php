<?php
/*
 * Description de vueAccueil.php
 *
 * @author joel , kalvin 
 * Creation 09/2024
 * Derniere MAJ 14/09/2026
 * partie affichage de la page d'accueil
 */
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
?>

<?php 
      
        
?>



<!-- faut faire les bouttons des deux joueurs -->
<p>Score joueur1 : <?= $_SESSION['score1'] ?? 0 ?><br><?= $_SESSION['jeu1'] ?? 0 ?></p>
<br><br><br>
<p>Score joueur2 : <?= $_SESSION['score2'] ?? 0 ?><br><?= $_SESSION['jeu2'] ?? 0 ?></p>

<form action="./?action=enregistrer" method="POST">
        </br></br> 
       <!-- joueur numero 1 --> 
        <button type="submit" name="ajouter1" value="1"> ajouter le point</button>
        <button type="submit" name="retirer1" value="1"> annuler le point  </button>
        <br><br><br><!-- donner de l'air -->
        
        <!-- joueur numero 2 -->
        <button type="submit" name="ajouter2" value="1"> ajouter le point</button>
        <button type="submit" name="retirer2" value="1"> annuler le point  </button>
        
        <br><br><br>
        <button type='submit' name='demarrer' value="True">Démarrage du jeu</button>
        <button type='submit' name='stat' value="True">Statistique du match </button>
        
</form>



<div id="horloge"></div>

<script>
    function afficherheure() {
        const mtn = new Date();
        const formath = mtn.toLocaleTimeString('fr-FR', { hour:'2-digit',minute:'2-digit',second:'2-digit' });
        document.getElementById('horloge').textContent = formath ;
    }
    
    setInterval(afficherheure,50) ;
    
    
</script>    
