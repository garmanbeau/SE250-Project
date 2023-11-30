<!DOCTYPE html>
<html>
<head>
<style>
body {background-color: red;}
div {
	max-width: 400px; 
	height: 500px;
	background-color: white;
	border: 2px solid black;
	padding: 2px;
	
	width: calc(100% - 350px - 10px); 
}
div.button {
	background-color: red;
  position: absolute;
  bottom: -20px;
  right: 50%;
  width: 50px;
  height: 20px;
  border: 3px solid red;
  
}
div.pizza {
	position: absolute; 
	left: 10%; 
	max-width: 600px; 
	height: 500px;
	background-color: white;
	border: 2px solid black;
	padding: 2px;
	
	width: calc(100% - 350px - 10px);
}
input[type=button]{
            background-color:black;
            text-align:center;
            color:white;
            margin-bottom:10px;
            border-color:red;
            border-width:3px
        }
</style> 
</head>
<? 
$servername ="localhost"; 
$username="root";
$password="sS3291sS";
$database="pizza";

$link = new mysqli($servername, $username, $password, $database)
	or die( "Unable to select database".mysqli_connect_error() );


$total=0.00;
$size=0;
error_reporting (E_ALL ^ E_NOTICE);

if ($_POST['sml'] == 'on'){
$size=1;
$smallPrice = 12.25;
$total += $smallPrice;
}else if ($_POST['med'] == 'on'){
$size=2;
$medPrice = 14.55;
$total += $medPrice;
} else { 
$size=3;
$lrgPrice = 16.75;
$total += $lrgPrice;
}


if ($_POST['cheese'] == 'on'){
$topping="Cheese"; 
$query="Select price from price where size=$size AND topping='$topping';";
$result=$link->query($query);
$price9 = $result -> fetch_row();
$cheePrice= $price9[0];
$total += $cheePrice;

}
if ($_POST['pepperoni'] == 'on'){
$topping="Pepperoni"; 
$query="Select price from price where size=$size AND topping='$topping';";
$result=$link->query($query);
$price1 = $result -> fetch_row();
$pepPrice= $price1[0];
$total += $pepPrice;


}

if ($_POST['sausage'] == 'on'){
$topping="Sausage"; 
$query="Select price from price where size=$size AND topping='$topping';";
$result=$link->query($query);
$price2 = $result -> fetch_row();
$sauPrice= $price2[0];
$total += $sauPrice;

}

if($_POST['bacon'] =='on'){
$topping="Bacon"; 
$query="Select price from price where size=$size AND topping='$topping';";
$result=$link->query($query);
$price3 = $result -> fetch_row();
$bacPrice= $price3[0];
$total += $bacPrice;

}
if($_POST['chicken'] =='on'){
$topping="chicken"; 
$query="Select price from price where size=$size AND topping='$topping';";
$result=$link->query($query);
$price4 = $result -> fetch_row();
$chiPrice= $price4[0];
$total += $chiPrice;

}
if($_POST['pineapple'] =='on'){
$topping="Pineapple"; 
$query="Select price from price where size=$size AND topping='$topping';";
$result=$link->query($query);
$price5 = $result -> fetch_row();
$pinPrice= $price5[0];
$total += $pinPrice;

}
if($_POST['olives'] =='on'){
$topping="Olives"; 
$query="Select price from price where size=$size AND topping='$topping';";
$result=$link->query($query);
$price6 = $result -> fetch_row();
$oliPrice= $price6[0];
$total += $oliPrice;

}
if($_POST['peppers'] =='on'){
$topping="Peppers"; 
$query="Select price from price where size=$size AND topping='$topping';";
$result=$link->query($query);
$price7 = $result -> fetch_row();
$ersPrice= $price7[0];
$total += $ersPrice;


}
if($_POST['mushrooms'] =='on'){
$topping="Mushrooms"; 
$query="Select price from price where size=$size AND topping='$topping';";
$result=$link->query($query);
$price8 = $result -> fetch_row();
$musPrice= $price8[0];
$total += $musPrice;

}

?>

<body>
<p> <b style="font-size: 50px"> < </b></p>
<a href ="pizzaselection.php">Go Back</a>
<h1 style="text-align:center">Payment Overview</h1>

<img src = "Picture1.svg" align="right" width="500px">
<div class="pizza">
	
<p style="text-align:left" >
Pizza Size: <br> 
 &nbsp &nbsp &nbsp &nbsp Small: --------------------------------------------------------------------------------   <? if ($size==1) {echo $smallPrice;}?><br><br>
 &nbsp &nbsp &nbsp &nbsp Medium: -----------------------------------------------------------------------------   <? if ($size==2) {echo $medPrice;}?><br><br>
 &nbsp &nbsp &nbsp &nbsp Large: --------------------------------------------------------------------------------   <? if ($size==3) {echo $lrgPrice;} ;?><br>



Toppings: <br> 

&nbsp &nbsp &nbsp &nbsp Cheese: ------------------------------------------------------------------------------   <? echo $cheePrice;?><br><br>
   &nbsp &nbsp &nbsp &nbsp Pepperoni: ---------------------------------------------------------------------------   <? echo $pepPrice;?><br><br>
	&nbsp &nbsp &nbsp &nbsp Sausage: -----------------------------------------------------------------------------   <? echo $sauPrice;?><br><br>  
	&nbsp &nbsp &nbsp &nbsp Bacon: -------------------------------------------------------------------------------   <? echo $bacPrice;?><br><br> 
	&nbsp &nbsp &nbsp &nbsp Chicken: -----------------------------------------------------------------------------   <? echo $chiPrice;?><br><br> 
	&nbsp &nbsp &nbsp &nbsp Pineapple: ---------------------------------------------------------------------------   <? echo $pinPrice;?><br><br> 
	&nbsp &nbsp &nbsp &nbsp Olives: -------------------------------------------------------------------------------   <? echo $oliPrice;?><br><br> 
	&nbsp &nbsp &nbsp &nbsp Peppers: -----------------------------------------------------------------------------   <? echo $ersPrice;?><br><br>  
	&nbsp &nbsp &nbsp &nbsp Mushrooms: ------------------------------------------------------------------------   <? echo $musPrice;?><br><br> 
<b> TOTAL: <? echo $total;?><b>

</p>

</div>


<div class="button" >
<input type = "button" value = "Pay and Submit Order" onclick="alert('Thanks for shopping')">
</div>

<!--
 <p>This is a paragraph.</p>
<p>This is a paragraph.</p>
-->
</body>
</html>