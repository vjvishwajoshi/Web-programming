<html>
<body>
<form action="" mathod="get">
Enter one Number for radius---><input type="text" name="num">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
$num=$_GET['num'];
$a=sqrt($num);
echo "Square root of given number is--->".$a;

?>