<?php 

echo "<h2>Task 4: Fibonacci Series printing using a Function</h2>";


function fibonacci($a, $b, $c, $count){

    for($i = 0; $i<$count; $i++){
        echo $a."  <br/>";

        $b = $c;
        $c = $a + $b;
        $a = $b;

    }

} 

fibonacci(0,1,1,15);


?>