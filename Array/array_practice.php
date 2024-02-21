<?php

$student=array("id","roll_no","name","enroll_number","reg._number","city","class","div","subject","address");
print_r($student);
echo "<br>"."<br>";

$student_detail=array("id"=>"456","name"=>"Vishwa","roll_no"=>"41","enroll_number"=>"2208","rrg._number"=>"156124","city"=>"Rajkot","class"=>"220","Div"=>"B1","subject"=>"PHP","Address"=>"Jamnagar_Road");
print_r($student_detail);
echo "<br>";

foreach($student_detail as $value)
{
	echo "$value"."<br>";
}
echo "<br><br>";

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

foreach($student_master as $val)
{
	print_r ($val);
	echo "<br>";
}

?>