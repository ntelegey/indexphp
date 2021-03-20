<!DOCTYPE html>
<html>
<head>
	<title>Telegey</title>
</head>
<body style="background-color: #ffe6cc;">
<h1 style="font-size:36px;text-align:center; color:#14106b;">Log in</h1>
	<div class="container">
		<div class="forms">
			<form action="main.php">
				<div class="username">
					<label for="username">Username</label>
					<input type="text" placeholder="Input Username" class="fname" id="fname" name="fname"><br>
				</div>
				<div class="pass_wrap">
					<label for="password" class="pass_title">Password</label>
					<input type="password" placeholder="Input Password" class="fpass" id="fpass" name="password"><br>
				</div>
				<div class="form_button">
					<br>
					<button type="submit" class="submit_button" id="submit_button" value="button">Submit</button>
					<button type="reset" class="clear_button" value="clear">Clear</button>
				
				</div>	
			</form>
		</div>
	</div>
	

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
</body>
</html>
