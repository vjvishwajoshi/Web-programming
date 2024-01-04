<html>
<body>
<style>
#col
{
	border:solid;
	border-color:red;
}	
#sub
{
	border-radius:10px;
}
input[type=text]:focus,[type=password]:focus,[type=email]:focus,select:focus,textarea:focus,submit:focus
{
	background:grey;
}
</style>
<form action="Task2_regform_output.php" method="get">
<table align="center" bgcolor="f3e5dc" cellpadding="10" cellspacing="10">
<tr>
<td colspan="3" align="center"><h1>Registration Form</h1></td>
</tr>
<tr>
<td>Username:</td><td><input type="text" name="unm"style="border-color:red"></td>
</tr><br>
<tr>
<td>Password:</td><td><input type="password" name="pwd" style="border-color:red"></td>
</tr>
<tr>
<td>Name:</td><td><input type="text" name="nm"style="border-color:red"></td>
</tr>
<tr>
<td>Address:</td><td><input type="text" name="add" style="border-color:red"></td>
</tr>
<tr><td>Country</td>
<td>
<select id="cont" name="cont" style="border-color:red">
<option value="">(Please Select a Country)</option>
<option value="india">India</option>
<option value="pakistan">Pakistan</option>
<option value="australia">Australia</option>
<option value="bangla">Bangladesh</option>
</select></td>
</tr>
<tr>
<td>ZIP code:</td><td><input type="text" name="zip" style="border-color:red"></td>
</tr>
<tr>
<td>Email:</td><td><input type="email" name="eml" style="border-color:red"></td>
</tr>
<tr>
<td>Sex:</td><td><input type="radio" name="gen" value="male" style="border-color:red"><label id="col">male</label>
<input type="radio" name="gen" value="female" style="border-color:red"><label id="col">female</label></td>
</tr>
<tr>
<td>Language:</td><td><input type="checkbox" name="lan" value="English"><label id="col">English</label>
<input type="checkbox" name="lan" value="Non English" style="border-color:red"><label id="col">Non English</label></td></tr>
<tr><td>About:</td>
<td><textarea id="abt" name="abt" rows="4" cols="20" style="border-color:red"></textarea></tr>
</tr><td><input type="submit" name="sub" style="border-color:red" id="sub"></td></tr>
</body>
</html>
<?php


?>