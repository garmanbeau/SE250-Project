<!DOCTYPE html>
<html>
<head>
<style>
body {background-color: red;}
 button{
            background-color:black;
            text-align:center;
            color:white;
            margin-bottom:10px;
            border-color:red;
            border-width:3px
        }
	div.picture1 {

  position: absolute;
 
  right: 55%;
  width: 500px;
  height: 200px;

  
}
	div.picture2 {
  position: absolute;
right : 0%;
  width: 500px;
  height: 200px;
}
</style>

<? 
error_reporting (E_ALL ^ E_NOTICE);
$user=$_POST['username'];
$passwd=$_POST['passwd'];

$servername ="localhost"; 
$username="root";
$password="sS3291sS";
$database="pizza";

$link = new mysqli($servername, $username, $password, $database)
	or die( "Unable to select database".mysqli_connect_error() );
$query="Select name from users where passwd='$passwd' and username='$user';";
$result=$link->query($query);
$nameA = $result -> fetch_row();
$name= $nameA[0];


?>
<p> <a style="color:white;"> <b style="font-size: 50px"> Welcome <?echo  $name?> </b> </a></p> 

<fieldset style="background-color: black;">
<p> <a style="color:white;"> <b style="font-size: 50px"> < </b> </a></p> 
	<a href="welcomepage.php" style="color:white;">Go Back</a>

	</fieldset>

	
</head>
<body>

<form method="post" action="payment_overview.php">
	<main style="background-color: white;">
		<h1 style="text-align:center"> Pizza Selection </h1> 
		<br>
		<div class="picture1">
		<img src = "Picture1.svg"  align="left" width="250px">
		</div>
		<div class="picture2">
		<img src = "Picture1.svg"  align="left" width="250px">
		</div>
		<div style="text-align:center">
			
			<legend>What size would you like your pizza?</legend>
			<input type="radio" id="sml" name="sml"> Small - 12"
			<br>
			<input type="radio" name="med" id="med"> Medium - 14" 
			<br>
			<input type="radio" name="lrg" id="lrg"> Large - 18"
			<br>

		</div>
		<div style="float: right">
	
		</div>
	
		<div style="text-align:center">
			<legend>What toppings would you like on your pizza?</legend>
			<input type="radio" name="cheese" id="cheese" checked>Cheese
			<br>
			<input type="radio" name="pepperoni" id="pepperoni">Pepperoni
			<br>
			<input type="radio" name="sausage" id="sausage">Sausage
			<br>
			<input type="radio" name="bacon" id="bacon">Bacon
			<br>
			<input type="radio" name="chicken" id="chicken">Chicken
			<br>
			<input type="radio" name="pineapple" id="pineapple">Pineapple
			<br>
			<input type="radio" name="olives" id="olives">Olives
			<br>
			<input type="radio" name="peppers" id="peppers">Peppers
			<br>
			<input type="radio" name="mushrooms" id="mushrooms">Mushrooms
			<br> <br>
			
		
   <button type="submit"> Proceed to Payment Overview</button>

  </form>
			<br><br> 
		</div>
	</main>
</body>
</html>
				
