<html>
<body>

<center> <h1> Log in </h1> </center>
<form>
<div class="container">
    <label>Username: </label>
    <input type="text" placeholder="Enter Username" name="userid" required>
    <br>
    <label>Password: </label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
    <div class="form_button">
    	<button type="submit" class="submit_button" id="submit_button" value="button">Submit</button>
		<button type="reset" class="clear_button" value="clear">Clear</button>
					
	</div>	
    
    <script language="javascript">
 function check (form)

{
 if (form.userid.value == "Telegey" && form.pwd.value =="1234")
{
 	form.action = "https://www.google.com/";
 	return true;
}
{
	alert ("Invalid Password or Username")
	return false;


}

}
</script>
</div>
</form>
</body>
</html>
