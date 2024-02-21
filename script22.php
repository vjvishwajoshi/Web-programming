<html>
<body>
<form action="" mathod="get">
Enter one Number for radius---><input type="text" name="num">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
$r=$_GET['num'];
$pi=3.14;
$area=$pi*$r*$r;

echo "Area of circle is--->".$area;
?>