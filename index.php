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
		<input  align="center" type="text" placeholder="Input Username" class="fname" id="fname" name="fname"><br>
		<div class="pass_wrap">
		<label  align="center" for="password" class="pass_title">Password</label>
		<input  align="center" type="password" placeholder="Input Password" class="fpass" id="fpass" name="password"><br>
	    </div>
	    <div class="form_button">
	<br>
	<button  align="center" type="submit" align="center" class="submit_button" id="submit_button" value="button">Submit</button>
	<button  align="center" type="reset" align="center" class="clear_button" value="clear">Clear</button>
				<br><br>
	</div>	
</div>
</form>

	

	<script>
	
	    document.forms[0].onsubmit = function(e){
        let login = document.getElementById('fname').value;
        let password = document.getElementById('fpass').value;
 
        if ( login === "Telegey" && password === "1234") 
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
