


<!-- Q1 -->
<?php
for($i=0; $i < 10; $i++){
    echo $i . "-" ;
}
echo 10 . "<br>";
?>


<!-- Q2 -->
<?php
$total = 0;

for($i = 0; $i < 31; $i++){
    $total += $i;
}

echo  $total . "<br>" ;
?>


<!-- Q3 -->
<?php
for ($i = 0; $i < 5; $i++) {
    for ($a = 0; $a < 5; $a++) {
        if ($a < 5 - $i - 1) {
            echo 'A';
        } else {
            echo chr(65 + $i);
        }
    }
    echo "<br>";
}
?>

<!-- Q4 -->
<?php
for ($x = 1; $x <6; $x++) {
    for ($y = 1; $y <6; $y++) {
        if ($y <6 - $x) {
            echo '1';
        } else {
            echo $x;
        }
    }
    echo "<br>"; 
}
?>


<!-- Q5 -->
<?php
for ($x = 1; $x <6; $x++) {
    for ($y = 1; $y <6; $y++) {
        if ($y == $x) {
            echo $x;
        } else {
            echo '0';
        }
    }
    echo "<br>";
}
?>

<!-- Q7 -->
<?php
$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo $factorial . "<br>";
?>

<!-- Q8 -->
<?php
$text = "OrangeCodingAcademy";
$char_to_count = 'c';

$count = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] == $char_to_count) {
        $count++;
    }
}

echo  $count . "<br>";
?>

<!-- Q9 -->






