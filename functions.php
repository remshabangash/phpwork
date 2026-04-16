
<?php  
echo "Predefined Functions <br>";

// Predefined functions examples
$a = 1234.89;
echo "round($a) = " . round($a) . "<br>";   // nearest integer
echo "ceil($a) = " . ceil($a) . "<br>";     // smallest integer ≥ $a
echo "floor($a) = " . floor($a) . "<br>";   // largest integer ≤ $a
echo "rand(1,100) = " . rand(1,100) . "<br>"; // random number between 1 and 100
echo "sqrt(16) = " . sqrt(16) . "<br>";     // square root
echo "pow(2,3) = " . pow(2,3) . "<br>";     // 2^3
echo "abs(-5) = " . abs(-5) . "<br>";       // absolute value
echo "strlen('hello world') = " . strlen("hello world") . "<br>";

echo "<br>User-Defined Functions <br>";

// User-defined function 
function add($x, $y) {
    $sum = $x + $y;
    return $sum;
}

$a = 10;
$b = 20;
echo "Sum of $a and $b = " . add($a, $b);
?>

