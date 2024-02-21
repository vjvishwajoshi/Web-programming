<html>
<body>
<form action="" method="get">
Enter one random Number between 1 and 10---><input type="text" name="rnm">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
$a= rand(1,10);
echo "Random Number is--->".$a."<br>";
$rnm=$_GET['rnm'];
echo "Your Entered Number is--->".$rnm."<br>";


if ( $rnm == $a )
	echo "Both Number are same...";
else
	echo "Both number are not same...";
?>