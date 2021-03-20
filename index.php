<html>
<body>

<center> <h1> Log in </h1> </center>
<form action="maim.php">
<div class="container">
    <label>Username: </label>
    <input type="text" placeholder="Enter Username" name="userid" required>
    <br>
    <label>Password: </label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

    <button type="submit" value="Submit">Submit</button>
	<button type="reset" value="Reset">Clear</button>
					
	</div>	
    
	<script>
	
	    document.forms[0].onsubmit = function(e){
        let login = document.getElementById('userid').value;
        let password = document.getElementById('pwd').value;
 
        if ( login === "Telegey" && password === "1234") 
            alert("Welcome");
        else {
            e.preventDefault();
            alert("Invalid password or login");
        }
</script>
</div>
</form>
</body>
</html>
