<?php
//for($i=1;$i<10;$i++)
//{
$num=$_GET['num'];
$num1=$_GET['num1'];
//echo "<table border=1 cellpadding=2 cellspacing=3>";


	for($i=$num;$i<=$num1;$i++)
	{
		
		//echo "<td>";
		//echo $num ."*".$j."=".($num*$j);
		//echo "</td>";
			//echo "</tr>";
	
	//}
	
//$num++;
	 echo "<table border=2 cellpadding=2 cellspacing=2 textalign=center>";
	for($j=1;$j<=10;$j++)
	{
		
		//echo "<tr>";
		echo "<tr>";
       echo "<td>";
		echo $i ."*".$j."=".($i*$j);
	    echo "</td>";
 echo "</tr>";		
	}
	echo "</table><style>table{float:left;}</style>";
		
}
    	
	
	
	
		/*echo "<td>3 *".$j."=".(3*$j)."<br>"."</td>";
		echo "<td>4 *".$j."=".(4*$j)."<br>"."</td>";
		echo "<td>5 *".$j."=".(5*$j)."<br>"."</td>";*/
		
	
//}
?>