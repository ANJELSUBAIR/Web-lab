<?php
$students=array("Annu","Aksa","Ardra","Eva");
echo"<h2>Array elements Before Sorting:</h2>";
print_r($students);
echo"<br><br>";
asort($students);
echo"<h2>Array Ascending Sorting(asort):</h2>";
print_r($students);
echo"<br><br>";
arsort($students);
echo"<h2>Array Descending Sorting(dsort):</h2>";
print_r($students);