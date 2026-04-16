<?php
$a=10;
$b=20;
if($a>$b){
    echo "A is greater than b";
}
elseif($a==$b)
    {
echo "A is equal to b";
    }
    else{
        echo "a is less than b";
    }
?>
<?php
$a=20;
if($a%2==2)
    {
        echo "a is even";
    }
    else{
        echo " a is odd";
    }
?>
<?php
$marks=80;
if($marks>=80){
    echo "A+";
}
elseif($marks>=70){
    echo "A";
}
elseif($marks>=60){
    echo "A-";
}
elseif($marks>=50){
    echo "B";
}
elseif($marks>=40){
    echo "C";
}
elseif($marks>=33){
    echo "D";
}
else{
    echo "Fail";
}
?>