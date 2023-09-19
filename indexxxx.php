<?php
// $name = "Suranjit Roy";

// $length = strlen( $name );

// echo $length;
?>

<?php
// function addTwoNumber($x,$y){
//     echo $x+$y;
// }
// addTwoNumber(1,0);
// addTwoNumber(1,1);
// addTwoNumber(1,2);

?>

<?php
// function defaultParameter( int $age, string $city ) {
//     echo "My age is {$age} and My city is {$city}";
// }
// defaultParameter( 32, "Dhaka" );
?>
<?php 

// function myName(?string $name){
//     echo $name;
// }
// myName("Suranjit Roy");
// myName(null);
?>

<!--spread operators function or varidic function-->

<?php

// function allResultAdd(...$numbers){
//     $a = $numbers[5];
//     echo $a;
// }

// allResultAdd(3,60,33,44,60)

?>

<!--Anonymous function-->

<?php

// (function(){
//     $x = 20;
//     $y = 40;
//     echo $x+$y;
// })();

// $count = function( $a, $b ){
//     echo $a + $b;
// };
// $count(4,5);
?>

<!--Arrow function-->

<?php
// $count = fn($a,$b)=>$a+$b;

// echo $count(4,6);
?>

<?php 

// function addTwo($x, $y):void{
//     $z = ($x+$y) / 2;

// }
//   echo addTwo(4,9);


?>
<!--For Loop Means Entry Control Loop-->
<?php 

// for($i=0; $i<=20; $i += 3){
//     if($i == 14){
//         break;
//     }
//     echo "{$i} Suranjit Roy \n";
// }

?>
<!--While Loop Means Exit Control Loop-->
<?php 
// $i = 0;
// while($i<=30){
//     echo $i."\n";
//     $i+=3;
// }

?>
<!--Do While Loop Means Exit Control Loop-->

<?php 
// $i = 0;
// do{
//     echo$i+=1;
//     echo PHP_EOL;
// }while($i<4);

function myName(?string $text): void {
    if ($text) {
        echo "Text is: $text<br>";
    } else {
        echo "No text provided.<br>";
    }
}

myName("Jack");
myName(null);

?>