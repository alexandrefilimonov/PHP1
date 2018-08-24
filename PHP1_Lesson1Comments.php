<?php
$a=5;
$b='05';
var_dump($a == $b); 						//True,неявное приведение '05' к int дает 5 
var_dump((int)'012345'); 					//12345 потому что явно приведено к int
var_dump((float)'123.0'==(int)'123.0'); 	//False, потому что 123.0 != 123
var_dump((int)0 == (int)'Hello, world!'); 	//True, потому что 'Hello, world!', не вляющийся числом, приведенный к int дает 0=ложь
?>