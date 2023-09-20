<?php

echo "<h2>Task 2:Skip Multiples of 5</h2>";

for ( $i = 1; $i <= 50; $i++ ) {

    if ( $i%5 == 0 ) {
        continue;
    }
    echo $i;
    echo "<br>";
}

?>