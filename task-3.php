<?php

$firstnum  = 0; 
$secondnum = 2; 
$thirdnum  = 2;

for ( $i =0; $i < 11; $i++ ) {
    echo $firstnum;
    echo "<br>";
    $secondnum = $thirdnum;
    $thirdnum = $firstnum+$secondnum;
    $firstnum = $secondnum;

    if( $firstnum>100 ) {
        break;
    }

    
}

?>