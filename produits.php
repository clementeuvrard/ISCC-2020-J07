<?php

// tableaux associatifs#

$produit = array(
    "T-shirt rouge"=> "15.50",
    "T-shirt vert"=>"15.50",
    "T-shirt argent"=>"16.50",
    "short bleu"=>"19.99",
    "short vert"=>"19.99",
    "Veste argent"=>"35");

    function afficherproduits($produit){

        foreach ($produit as $key => $value){
            echo "$key $value";
            echo "<br>";
        }
    }
    afficherproduits($produit);

?>
