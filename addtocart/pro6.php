<?php session_start();?>
<!DOCTYPE html>
<html>
</head>
<body>

<?php
if(isset($_POST['submit']))
{
$username="root";
$servername="localhost";
$password="supriya";
$database="supriyacart";
$connect=mysql_connect($servername,$username,$password,$database);
if(!$connect){
echo "Error not connected to the server";
}
$quan=$_POST['quan'];
$u=$_SESSION['name'];
if($u!=""){
echo "DRUMMER"."<br>";
echo "Your Product quantity is ".$quan."<br>";
$name="DRUMMER";
$price=19999;
$_SESSION['each']= $quan * $price;

 
$total=$_SESSION['each'];
echo $total."<br>";

$sql ="INSERT INTO `supriyacart`.billing (User,Name,Quantity,Price,Total) VALUES ('$u','$name','$quan','$price','$total')";
if (!mysql_query($sql)){
echo "Your item didn't add to the cart";
}
else {
echo "Item added to the cart successfully";
echo "<a href='http://localhost/products.php'>    GO TO PRODUCTS PAGE</a>";
}
}
else {echo "login first";
echo "<a href='http://localhost/login.html'>  Login</a>";}
}
?>
</body>
</html>
