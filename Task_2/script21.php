<html>
<body>
<form action="" mathod="get">
Enter one Number---><input type="text" name="num">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
$num=$_GET['num'];
echo "Your Entered Number is--->".$num."<br>";

$a=strrev($num);
echo "Reverse Number is--->".$a."<br>";

if($num==$a)
	echo "Enterd number is palindrome...";
else
	echo "Entered number is not palindrome...";
?>