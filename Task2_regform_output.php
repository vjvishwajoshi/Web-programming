<?php
$unm=$_GET['unm'];
$pass=$_GET['pwd'];
$nam=$_GET['nm'];
$add=$_GET['add'];
$con=$_GET['cont'];
$zip=$_GET['zip'];
$email=$_GET['eml'];
$sx=$_GET['gen'];
$lang=$_GET['lan'];
$abt=$_GET['abt'];

echo "<table border=1 align=center bgcolor=pink><tr><td>Username:</td><td>$unm</td></tr>
<tr><td>Password:</td><td>$pass</td></tr>
<tr><td>Name:</td><td>$nam</td></tr>
<tr><td>Address:</td><td>$add</td></tr>
<tr><td>Country:</td><td>$con</td></tr>
<tr><td>Zip Code:</td><td>$zip</td></tr>
<tr><td>Email:</td><td>$email</td></tr>
<tr><td>Sex:</td><td>$sx</td></tr>
<tr><td>Language:</td><td>$lang</td></tr>
<tr><td>About:</td><td>$abt</td></tr></table>"
?>