
<?php
 echo "for loop <br>";
$a=20;
for($i=0 ; $i<$a ; $i++)
    {
        echo $i ;
        echo "<br>";
    }
    ?>
    
    <?php
     echo "while loop <br>";
    $n=100;
    $i=1;
    while($i<=$n)
        {
            if($i%2==0)
                {
                    echo $i;
                    echo "<br>";
                }
                $i++;
        }
    ?>
    
   
    <?php
   echo "do while loop <br>"; 
    $i=1;
    do{
        echo $i;
        echo "<br>";
        $i++;
    }while($i<=10);
    ?>