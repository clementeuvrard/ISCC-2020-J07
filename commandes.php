<?php
// tableaux numerotes#

    $historique_commande = array("5.49","9.99","5.49","15.99","25");
  
    function affichercommandes($historique_commande){

        foreach($historique_commande as $element){
            echo "une commande de $element euros a été reçus". "br/>";
        }
        echo " le totam des commandes est de ";echo array_sum($historique_commande);echo"euros";
}
affichercommandes($historique_commande);
?>
