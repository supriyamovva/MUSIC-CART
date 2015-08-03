<?php session_start();?> 
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "supriya";
$dbname = "supriyacart";
$log = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
     // output data of each row
     while($row = $result->fetch_assoc())
     {
         if($row["EmailId"]==$_POST["email"] && $row["Password"]==$_POST["password"] )
         {
$_SESSION['name']=$_POST["email"];
header('Location:http://localhost/products.php');
break;
             
           }
      else      {
     
     header('Location:http://localhost/register.html');        		     }
	   }
}
else {
     header('Location:http://localhost/login.html');
}

$conn->close();
?>

</body>
</html>
