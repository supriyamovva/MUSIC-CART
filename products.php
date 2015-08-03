<?php session_start();?> 
<!DOCTYPE html>
<html>
<head>
<style>
.sri
{
font-size:2em;
text-align:left;
 color:#FFFFFF;
}
.sr
{
font-size:3em;
 color:#FFFFFF;
text-align:right;
}
h1{
  font-size: 5em;
      font-weight: 600;
      color:#000000;
      display: inline-block;
      padding-bottom: 100px;
	 margin: 50% auto 0 auto;

      text-shadow: 1px 1px 3px $shadow-color;
}
h2{
 font-size: 2em;
      font-weight: 300;
      color:#000000;
      
 
	 margin: 2% auto 0 auto;

      text-shadow: 50px 1px 3px $shadow-color;
}
h3{
 font-size: 2em;
      font-weight: 300;
      color:#000000;
 
	 margin: 2% auto 0 auto;

      text-shadow: 50px 1px 3px $shadow-color;
}
li{
 font-size: 1em;
      font-weight: 300;
      color:#000000;
      
 
	 margin: 2% auto 0 auto;

      text-shadow: 50px 1px 3px $shadow-color;
}
h4{
 font-size: 2em;
      font-weight: 300;
      color:#000000;
      
 
	 margin: 2% auto 0 auto;
text-align: right;
      text-shadow: 50px 1px 3px $shadow-color;
}


$shadow-color: #23203b;
$input-color: lighten(#AB9E95, 10%);
$input-border-color: #5E5165;
$button-background-color: #27AE60;
body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}
html, body {
 padding: 5px;
  width: 1000px;
  min-height: 600px;
  margin: 2% auto 0 auto;
  color:#FFFFFF;
  background: url(http://localhost/images/Plain-Light-Blue-Background-Images.jpg)no-repeat center center fixed;
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}</style>
</head>
<body>

<h4 class="nidhi">
 <?php echo "WELCOME....:-".$_SESSION ['name']?> 
</h4><div class="sri"><a href="logout.php">Logout</a></div>
<div class="sr"><a href="show.php">ITS YOUR KART</a></div>
<h1> Products </h1>
<div class="col-md-3">
    <img src="http://localhost/images/1/1.jpg" height="400" width="400" style="margin:10px">

           <li><h2 class="pj">PIANO</h2></li>
           <li><h3 class="pj">Rs 30,000/-</h3></li>
           <li><h2 class="pj"><legend>Can Get Cash Back If It Doesnot Work </legend></h2>
                  <ol>
                    
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro1.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>    
 </div>
<div class="col-md-3">
    <img src="http://localhost/images/2/6.jpg" height="400" width="400" style="margin:10px">
 
           <li><h2 class="pj">CHRISTOPHE</h2></li>
           <li><h3 class="pj">Rs 10,000/-</h3></li>
           <li><h2 class="pj"><legend>Can Get Cash Back If It Doesnot Work</legend></h2>
                  <ol>
                    
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro2.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>    
 </div>
<div class="col-md-3">
    <img src="http://localhost/images/3/11.jpg" height="400" width="400" style="margin:10px">
 
           <li><h2 class="pj">JAZZ TABALA</h2></li>
           <li><h3 class="pj">Rs 5600/-</h3></li>
           <li><h2 class="pj"><legend>Can Get Cash Back If It Doesnot Work</legend></h2>
                  <ol>
                    
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro3.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    
 </div>
<div class="col-md-3">
    <img src="http://localhost/images/4/16.jpg" height="400" width="400" style="margin:10px">

           <li><h2 class="pj">FLUTE STICK</h2></li>
           <li><h3 class="pj">Rs 10,000/-</h3></li>
           
           <li><h2 class="pj"><legend>Can Get Cash Back If It Doesnot Work</legend></h2>
                  <ol>

                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro4.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    

 </div>
<div class="col-md-3">
 <img src="http://localhost/images/5/21.jpg" height="400" width="400" style="margin:10px">
 
        <li><h2 class="pj">DRUMMER</h2></li>
           <li><h3 class="pj">Rs 19999/-</h3></li>
           
           <li><h2 class="pj"><legend>Can Get Cash Back If It Doesnot Work</legend></h2>
                  <ol>
                    
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro6.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    
 </div>
<div class="col-md-3">
    <img src="http://localhost/images/6/26.jpg" height="400" width="400" style="margin:10px">
 
           <li><h2 class="pj">GUITAR</h2></li>
           <li><h3 class="pj">Rs 100000/-</h3></li>
         
           <li><h2 class="pj"><legend>Can Get Cash Back If It Doesnot Work</legend></h2>
                  <ol>
            >
                  </ol>
           </li>      
        
 <form action="http://localhost/addtocart/pro7.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
   
 </div>

</body>
