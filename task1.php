
<?php
echo "Food Order System <br>";

// Simple function
function total($items) {
    $sum = 0;
    
    foreach($items as $i) {
        $sum = $sum + $i;
    }

    // simple discount
    if($sum >= 50) {
        $sum = $sum - ($sum * 0.1);
    }

    return $sum;
}

// Order type function
function type($t) {
    if($t == "Dine-In") {
        echo "Dine-In <br>";
    } 
    else if($t == "Takeaway") {
        echo "Takeaway <br>";
    } 
    else {
        echo "Delivery <br>";
    }
}

// Orders
$orders = [
    ["items"=>[10,20], "type"=>"Dine-In"],
    ["items"=>[5,5], "type"=>"Takeaway"],
    ["items"=>[30,30], "type"=>"Delivery"]
];

// Loop
foreach($orders as $o) {
    echo "<hr>";
    
    type($o["type"]);
    
    $t = total($o["items"]);
    
    if($t < 20) {
        echo "Low Order <br>";
    }
    
    echo "Total: $t <br>";
}
?>
