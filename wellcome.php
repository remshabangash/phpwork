<html>
<body>

<form action="wellcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Age: <input type="number" name="Age"><br>
<input type="submit">
</form>

</body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$con = mysqli_connect("localhost" , "root" , "" ,"studentdatabase");
if(!$con)die("connection failed : " .mysqli_connect_error());
if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['name'] ?? '';
        $email=$_POST['email'] ?? '';
        $age=$_POST['Age'] ?? '';
        
        if($name && $age && $email)
            {
                $sql="INSERT INTO Profile (name , age , email)VALUES ('$name' , '$age ', '$email' )";
            if (mysqli_query($con , $sql))
                {
                echo "<p style = 'color : green '>Data inserted successfully ! </p>";
            }
            else
                {
                echo "<p style = ' color : red ' > ERROR : ". mysqli_error($con) . "</p>";
            }
        
            }
    }
    ?>