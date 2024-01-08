<?php
$a=65;
echo "<table border=1 cellpadding=5 cellspacing=5 align=center>";
for($i=1;$i<8;$i++)
{
	echo "<tr>";
   for($j=1;$j<5;$j++)
 {
	 echo "<td>";
	 echo chr($a)." ";
   //$a=$a+1;
   if($a<90)
	   $a=$a+1;
   else
	   break;
      echo "</td>";
 }
 
 echo "<br>";
 echo "</tr>";
}
echo "</table>";
?>