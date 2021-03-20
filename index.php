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
    <tr>
    	<td><input type ="Reset" value "CLEAR"></td>
    	<td><input type ="Submit" onclick="return check(this.form)" value "SUBMIT"></td>
    </tr>
    
    <script language="javascript">
 function check (form)

{
 if (form.userid.value == "Telegey" && form.pwd.value =="1234")
{
 	form.action = "https://www.google.com/";
 	return true;
}
{
	allert (Error Password or Username)
	return false;


}

}
</script>
</div>
</form>
</body>
</html>
