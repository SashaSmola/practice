<?php
 ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

$array = file("database.txt"); 
$count = count($array); 
$count = $count-1; 
$unless = $count-3; 
for ($i=$count; $i>$unless; $i--) echo $array[$i] . "\n";	
	fclose($handle);
	
	?>