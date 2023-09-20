<?php
echo "<h2>Task 3:Break on Condition</h2>";

$firstnum  = 0;
$secondnum = 2;
$thirdnum  = 2;

for ( $i = 0; $i < 10; $i++ ) {
    echo $firstnum;
    echo "<br>";
    $secondnum = $thirdnum;
    $thirdnum  = $firstnum + $secondnum;
    $firstnum  = $secondnum;

    if ( $firstnum > 100 ) {
        break;
    }

}

?>