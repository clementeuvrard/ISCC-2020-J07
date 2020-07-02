<?php

//tableaux doubles#

    $panier = array(
        array("t-shirt rouge","15.50","5"),
        array("t-shirt vert","15.50","6"),
        array("t-shirt argent","15.50","8"),
        array("short bleu","16.50","5"),
        array("short vert","19.99","5"),
        array("veste argent","19.99","10"),
        array("veste argent","35","3"),
    );

    function affichagepanier($panier){
        for ($row = 0; $row< count($panier);$row++){
            echo"<ul>";
            for ($col = 0; $col <count ($panier [$row]); $col++){
                echo"<li>".$panier[$row][$col]."</li>";
            }
            echo"</ul>";
        }
    }
    
    afficherpanier($panier);

    $total = 0;

    function calculertotalpanier($panier){
        for ($row =0; $row < count($panier);$row++){
            $total = $total + $panier[$row][1]* $panier[$row][2];
            echo "<p>$total<p>";
            echo"<br>";
         }
    }
    calculertotalpanier($panier)
    ?>
