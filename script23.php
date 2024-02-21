<html>
<body>
<form action="" method="get">
Enter First number---><input type="text" name="num1"><br><br>
Enter Second number---><input type="text" name="num2"><br><br>
Enter Third number---><input type="text" name="num3"><br><br>
<input type="submit" name="submit"><br><br>
</form>
</body>
</html>
<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$num3=$_GET['num3'];
if ( $num1>$num2 )
	if( $num1>$num3 )
		echo "First Number is Max...";
	else
		echo "Third Number is Max...";
else
	if( $num2>$num3 )
		echo "Second Number is Max...";
	else
		echo "Third Number is Max...";
?>