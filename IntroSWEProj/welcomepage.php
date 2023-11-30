<!DOCTYPE html>
<html>
    <style>
        
        h1{
            text-align:center;
            font-weight: 300
        }
        input[type=text]{background-color:red;
                text-align:center;
                margin-bottom:20px;
                border-color:black;
                border-width:3px;
        }
        button{
            background-color:black;
            text-align:center;
            color:white;
            margin-bottom:10px;
            border-color:red;
            border-width:3px
        }
        a{
            color:red;
            padding-right:20px;
            padding-left:50px;
        }
    </style>
<body>
   <h1><strong>Welcome to the online pizza ordering system</strong></h1>


	<form method="post" action="pizzaselection.php" name="myForm" id="myForm">
	
    <center>
	 <label for="username">Enter Username:</label>
	<input type="text" id="username" name="username" required ><br>
	<label for="passwd">Enter Password:</label>
     <input type="text" id="passwd" name="passwd" required><br>
	 
     <button type="submit">Enter</button><br>
        
        <a href="RegistrationPage.php">Click here to register</a>
        <a href="">Click here to continue as guest</a>
        
    </center>
    </form>

</body>

</html>