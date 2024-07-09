<!-- Q1 -->
<?php
$number = 3;
if (($number%2 != 0 && $number%3 != 0) ||( $number%2 != 0 && $number%5 !=0) || ($number%3!=0 && $number%5 != 0 )) {
    echo $number . "is a prime number" . "<br>";
}
else{
    echo $number . "is not a prime number" . "<br>";
}
?>


<!-- Q2 -->
<?php
$word = "remove";
$reverse = strrev($word);
echo $reverse . "<br>" ; 
?>

<!-- Q3 -->
<?php
$sentence = "Hello world";
$updatedSentence = strtolower($sentence);
if ($sentence === $updatedSentence) {
    echo "Your String is Ok" . "<br>";
}
else{
    echo "Your String is not Ok" . "<br>";
}
?>

<!-- Q4 -->
<?php
$x = 12 ;
$y = 10 ;
$saveX = $x ; 
$x = $y ;
$y = $saveX ;
echo "y=$y and x=$x" . "<br>"
?>

<!-- Q5 -->
<?php
$Number = "407";
$length = strlen($Number);
$power1 = pow($Number[0],3);
$power2 = pow($Number[1],3);
$power3 = pow($Number[2],3);
$sum = $power1 + $power2 + $power3 ; 
if($sum == $Number){
    echo "$Number is Armstrong Number" . "<br>" ;
}
else{
    echo "$Number is not Armstrong Number" . "<br>" ;
}
?>

<!-- Q6 -->
<?php
$sentence = "Eva, can I see bees in a cave?";
$Upadatedsentence = strtolower($sentence);
$Upadatedsentence = preg_replace('/[^a-z0-9]/', '', $sentence);
$Upadatedsentence = trim($sentence);
$reversedSentence = strrev($sentence);
$reversedSentence = preg_replace('/[^a-z0-9]/', '', $sentence);
$reversedSentence = trim($sentence);
if ($Upadatedsentence == $reversedSentence) {
    echo "Yes it is a palindrome";
}
else{
    echo "No it is not a palindrome";
}
?>




