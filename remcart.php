<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<style>
h1{
  font-size: 3em;
      font-weight: 600;
      color:#000000;
      display: inline-block;
      padding-bottom: 50px;
	 margin: 20% auto 0 auto;

      text-shadow: 1px 1px 3px $shadow-color;
}


$shadow-color: #23203b;
$input-color: lighten(#AB9E95, 10%);
$input-border-color: #5E5165;
$button-background-color: #27AE60;
body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}
html, body {
 padding: 50px;
  width: 600px;
  min-height: 600px;
  margin: 2% auto 0 auto;
  color: rgba(255, 255, 255, 0.7);
  background: url(http://localhost/images/Plain-Light-Blue-Background-Images.jpg)no-repeat center center fixed;
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}</style>
</head>
<body>
        <?php
          		$username="root";
			$servername="localhost";
			$password="supriya";
                	$database="supriyacart";
			$conn=mysql_connect($servername, $username, $password, $database);	
			if(!$conn){
					echo "Not connected";			
			}
			echo "<h2>Enter the name of the same product as is</h2>";
			$hai= $_SESSION['name'];
        ?>
        <h1>Please confirm the name of your Item</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				Item:<input type="text" name="item"> 
				<input type="submit" name="submit" value="Remove">        
        </form>
        <?php
        if(isset($_POST['submit'])){
					$item=$_POST['item'];
					$sql="DELETE FROM `supriyacart`.billing WHERE User='$hai' AND Name='$item'";
					$query=mysql_query($sql);
					if($query) {
								echo "Item successfully removed";		
								echo "<a href='http://localhost/show.php'>Go to your cart</a>";
					}
					else {
								echo "Error";	
					}        
        }
        ?>
</body>
</html>
