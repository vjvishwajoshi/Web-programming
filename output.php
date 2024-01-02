<?php
$f_nm=$_GET['fnm'];
$l_nm=$_GET['lnm'];
$address=$_GET['add'];
$city=$_GET['ct'];
$state=$_GET['stt'];
$mobile=$_GET['mo'];
$class=$_GET['cls'];
$division=$_GET['div'];

echo "<table border=1><tr><td>Name:</td><td>$f_nm</td></tr>
<tr><td>Last_Name:</td><td>$l_nm</td></tr>
<tr><td>Address:</td><td>$address</td></tr>
<tr><td>City:</td><td>$city</td></tr>
<tr><td>State:</td><td>$state</td></tr>
<tr><td>MobileNo.:</td><td>$mobile</td></tr>
<tr><td>Class:</td><td>$class</td></tr>
<tr><td>Division:</td><td>$division</td></tr></table>";
?>