<!DOCTYPE html>
<html>
<head>

</head>
<? 
$servername ="localhost"; 
$username="root";
$password="sS3291sS";
$database="pizza";

$user=$_POST['username'];
$passwd=$_POST['passwd'];

$link = new mysqli($servername, $username, $password, $database)
	or die( "Unable to select database".mysqli_connect_error() );
$query="Select name from users where passwd='$passwd' and username='$user';";
$result=$link->query($query);
$nameA = $result -> fetch_row();
$name= $nameA[0];

?>


 <form  method="post" action="pizzaselection.php" onsubmit="return validateForm();">
    
	<input type="text" id="formName" value="<?echo $name;?>">
	
    <input type="submit"></button>
  </form>
  
  <script>
  function validateForm() {
    if(  document.getElementById( 'formName' ).value == "Beau" ) ) { 
        // also before return you can add alert( 'your e-mail is invalid' ); 
        // or display message in form, etc...
		alert( 'your e-mail is invalid' );
        return false;
     } else { 
        return true;
     }    
	 }
	 </script>

<!--
 <p>This is a paragraph.</p>
<p>This is a paragraph.</p>
-->
</body>
</html>