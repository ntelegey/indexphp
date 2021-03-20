<!DOCTYPE html>
<html>
<head>
	<title>Telegey</title>
</head>
<body>
	<div class="container">
		<div class="forms">
			<form action="main.php">
				<div class="username">
					<label for="username">Username</label>
					<input type="text" placeholder="First Name" class="fname" id="fname" name="fname"><br>
				</div>
				<div class="pass_wrap">
					<label for="password" class="pass_title">Password</label>
					<input type="password" placeholder="Password" class="fpass" id="fpass" name="password"><br>
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
            alert("Welcome to your page!");
        else {
            e.preventDefault();
            alert("Invalid password or username");
        }
    };
    
	</script>
</body>
</html>
