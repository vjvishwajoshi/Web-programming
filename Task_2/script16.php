<html>
<body>
<form action="" method="get">
Enter One String---><input type="text" name="str">
<input type="submit" name="submit">
</form>

</body>
</html>
<?php
$str=$_GET['str'];
trim($str);
echo $str;

?>