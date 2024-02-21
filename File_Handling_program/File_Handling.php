<?php
$myfile= fopen("example.txt","r");

echo fgets($myfile);

$myfile= fopen("example.txt","w");
/*$txt="Hellow World...!";
fwrite($myfile,$txt);

echo "<br><br>";

if(file_exists("example.txt"))
{
	echo "The File Exists...";
}
else
{
	echo "The File doesn't exists...";
}*/

$content= file_get_contents("example.txt");
echo $content;

/*$con="This is new content to write...";
file_put_contents("example.txt",$con);

if(unlink("example.txt"))
{
	echo "File Deleted...";
}
else
{
	echo "Unable to delete the file...";
}*/
?>