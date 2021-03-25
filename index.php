<!DOCTYPE html>
<html>
<head>
<title>Forms</title>
</head>
<body style="background-color: #ffe6cc;">
<h1 style="font-size:36px;text-align:center; color:#14106b;">Sign in</h1>
<form action="main.php">
	<div class="container" align="center">
		<br>
		<label  align="center" for="username">Username</label>
		<input type="text" placeholder="Input Username"  id="fname"><br>
		<label  align="center" for="password">Password</label>
		<input type="password" placeholder="Input Password" id="fpass" <br>
	      
	    <div class="form_button">
	    <br>
	    <button type="submit" align="center" value="submit">Submit</button>
	    <button type="reset" align="center" value="clear">Clear</button> <br><br>
	    </div>
		
	</div>
</form>

	

	<script>
	
	    document.forms[0].onsubmit = function(e){
        let login = document.getElementById('fname').value;
        let password = document.getElementById('fpass').value;
 
        if ( login == "Telegey" && password == "1234") 
         return true;
        else {
            e.preventDefault();
            alert("Invalid username or password");
        }
    };
    
	</script>
<style>
   .container {
   background: 	peachpuff	;
   border: 2px solid red;
   border-radius: 15px 50px;
   border-color: #14106b ;
   width: 650px;
   margin: auto;
   }

</style>

</body>
</html>
