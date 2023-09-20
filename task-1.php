<?php

echo "<h2>Task 1: Looping with Increment using a Function</h2>";


// For Loop

function evenNumberForLoop( $i, $count ) {

    for ( $i; $i <= $count; $i += 2 ) {
        echo $i + 1;
        echo "<br>";
    }

}

evenNumberForLoop( 1, 20 );

// While Loop

function evenNumberWhileLoop( $i, $count ) {

    $i;
    while ( $i < $count ) {
        echo $i + 1;
        $i += 2;
        echo "<br>";
    }

}

evenNumberWhileLoop( 1, 20 );

// Do While Loop

function evenNumberDoWhileLoop( $i, $count ) {

    $i;
    do {
        echo $i + 1;
        $i += 2;
        echo "<br>";
    } while ( $i < $count );

}

evenNumberDoWhileLoop( 1, 20 );

?>