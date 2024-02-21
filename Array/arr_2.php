
<?php
$student_master=array(array("id"=>"1","name"=>"Vishwa","roll_no"=>"41","enroll_number"=>"2208","rrg._number"=>"156124",
"city"=>"Rajkot","class"=>"220","Div"=>"B1","subject"=>"PHP","Address"=>"Jamnagar_Road"),
array("id"=>"2","name"=>"Purvisha","roll_no"=>"42","enroll_number"=>"2201","rrg._number"=>"156125",
"city"=>"Rajkot","class"=>"220","Div"=>"B1","subject"=>"JAVA","Address"=>"MG_Road"),
array("id"=>"3","name"=>"Leeza","roll_no"=>"43","enroll_number"=>"2202","rrg._number"=>"156126",
"city"=>"Rajkot","class"=>"220","Div"=>"B1","subject"=>"Data Science","Address"=>"Dharmendra_Road"),
array("id"=>"4","name"=>"Priya","roll_no"=>"44","enroll_number"=>"2203","rrg._number"=>"156127",
"city"=>"Rajkot","class"=>"220","Div"=>"B1","subject"=>"Data Structure","Address"=>"Yagnik_Road"),
array("id"=>"5","name"=>"Hetvi","roll_no"=>"45","enroll_number"=>"2204","rrg._number"=>"156128",
"city"=>"Rajkot","class"=>"220","Div"=>"B1","subject"=>"English","Address"=>"Jagnaath"),
array("id"=>"6","name"=>"Krupa","roll_no"=>"46","enroll_number"=>"2205","rrg._number"=>"156129",
"city"=>"Rajkot","class"=>"220","Div"=>"B1","subject"=>"SAD","Address"=>"Speedwell"),
array("id"=>"7","name"=>"Viranchi","roll_no"=>"47","enroll_number"=>"2206","rrg._number"=>"156130",
"city"=>"Rajkot","class"=>"220","Div"=>"B1","subject"=>"Maths","Address"=>"Raviratna_Park"),
array("id"=>"8","name"=>"Vandita","roll_no"=>"48","enroll_number"=>"2207","rrg._number"=>"156131",
"city"=>"Rajkot","class"=>"220","Div"=>"B1","subject"=>"C","Address"=>"Jakaat"));

/*foreach($student_master as $val)
{
	print_r ($val);
	echo "<br>";
}*/

echo "<table border=2 colspan=2 rowspan=2>";
foreach($student_master as $val)
{
	echo "<tr>";
	echo "<td>".$val['id'].'</td>';
	echo "<td>".$val['name'].'</td>';
	echo "<td>".$val['roll_no'].'</td>';
	echo "<td>".$val['enroll_number'].'</td>';
	echo "<td>".$val['rrg._number'].'</td>';
	echo "<td>".$val['city'].'</td>';
	echo "<td>".$val['class'].'</td>';
	echo "<td>".$val['Div'].'</td>';
	echo "<td>".$val['subject'].'</td>';
	echo "<td>".$val['Address'].'</td>';
	//print_r($my_key);
	echo "</tr>";
}
echo "</table>";

echo "<table border=2 colspan=2 rowspan=2>";
foreach($student_master as $val)
{
	echo "<tr>";
	foreach($val as $new_val)
	{
		echo "<td>".$new_val."</td>";
	}
	echo "</tr>";
}
 
?>