<html>
<body>
<form action="" method="get">
Enter One Number of Year---><input type="text" name="num">
<input type="submit" name="submit">
</form>

</body>
</html>

<?php

$num=$_GET['num'];

if($num % 400 == 0) 
{
   echo $num." is a leap year.";
}
else if ($num % 100 == 0) 
{
   echo $num." is not a leap year.";
}
else if ($num % 4 == 0) 
{
   echo $num." is a leap year.";
} 
else 
{
   echo $num." is not a leap year.";
}
?>