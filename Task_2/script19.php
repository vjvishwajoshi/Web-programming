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
$n=0;

for($i=2;$i<$num;$i++)
{
	if($num%$i==0)
	{
		$n++;
	    break;
	}
}
	

if($n==0)
	echo $num."is a prime number...";
else
	echo $num."is not a prime number...";
?>