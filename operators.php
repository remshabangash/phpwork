 <?php  
//use of arithmetic operators
$a=2;
$b=3;
echo $a+$b;
echo "<br>";
echo $a-$b;
echo "<br>";
echo $a*$b;
echo "<br>";
echo $a/$b;
echo "<br>";
echo $a%$b;
echo "<br>";
echo $a**$b;
echo "<br>";
echo $a++; 
echo "<br>";
echo $a--;
echo "<br>";
echo ++$a; 
echo "<br>";
echo --$a; 
echo "<br>";
echo $a;
?>  
<?php
//use of comparison operators
$a=2;
$b=3;
echo $a==$b;
echo "<br>";
echo $a===$b;
echo "<br>";
echo $a!=$b;
echo "<br>";
echo $a>$b;
echo "<br>";
echo $a<$b;
echo "<br>";
echo $a>=$b;
echo "<br>";
echo $a<=$b;
echo "<br>";

?>  
<?php
//use of logical operators
$a=2;
$b=3;
echo $a and $b;
echo "<br>";
echo $a or $b;
echo "<br>";
echo $a xor $b;
echo "<br>";
echo $a && $b;
echo "<br>";
echo $a || $b;
echo "<br>";
echo !$a;
echo "<br>";
?>
<?php
//use of string operators
$a="hello";
$b="world";
echo $a.$b;
echo "<br>";
echo $a.=$b;
echo "<br>";
?>
 <?php
//use of conditional operators
$a=2;
$b=3;
echo $a==$b? "true":"false";
echo "<br>";
echo $a===$b? "true":"false";
echo "<br>";
echo $a!=$b? "true":"false";
echo "<br>";
echo $a>$b? "true":"false";
echo "<br>";
echo $a<$b? "true":"false";
echo "<br>";
echo $a>=$b? "true":"false";
echo "<br>";
echo $a<=$b? "true":"false";
echo "<br>";
echo $a? "true":"false";
echo "<br>";
echo $a??$b;
echo "<br>";
echo $a??=$b;
echo "<br>";
?>
<?php
$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // Validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "All fields are required!";
    } else {

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert into database
        $sql = "INSERT INTO users (name, email, password) 
                VALUES ('$name', '$email', '$hashed_password')";

        if ($conn->query($sql)) {
            echo "Signup successful!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<form method="post">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="Signup">
</form>