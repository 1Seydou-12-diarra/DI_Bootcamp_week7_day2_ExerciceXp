<?php

function  diviser ( $x , $y ) {
     if ( $y == 0 ) {
        throw new Exception( "Impossible de diviser par zéro" );
    }
  return   $x / $y ;
}

// en utilisant l'instruction try..catch 
try {
     echo diviser( 2 , 0 );
   echo diviser( 9 , 0 );
} catch ( Exception  $e ) {
     echo  "Erreur : Division par zéro." ;
}
?>

