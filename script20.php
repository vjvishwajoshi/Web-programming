<html>
<body>
<form action="" mathod="get">
Enter one positive Number---><input type="text" name="num">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
$num=$_GET['num'];
$fact=1;

for($i=$num;$i>=1;$i--)
	$fact=$fact*$i;

echo "Factorial of $num is $fact";
?>