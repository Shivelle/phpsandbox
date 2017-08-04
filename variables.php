<?php 
	// single line comment
	# another single line comment
	/* 
		multiline
		comment 
	*/ 

	#VARIABLES
	/*
		- prefix $
		- start with a letter or an underscore
		- only letters, numbers and underscores
		- case sensitive
	*/	

	#DATA TYPES
	/*
		String
		Integer
		Floats
		Boolean
		Arrays
		Objects
		NULL 
		Resource

	*/	

	$output = 'Hello World!'; 
	$string1 = 'Hello'; 
	$string2 = 'World'; 
	$greeting = $string1 . ' ' . $string2 . '!'; 
	$greeting2 = "$string1 $string2"; // only works with double quotes
	$string3 = 'They\'re here!'; 

	$num1 = 4; 
	$num2 = 10; 
	$sum = $num1 + $num2; 

	$float1 = 4.4;  

	$bool1 = true; 

	define('GREETING', 'Hello Everyone!'); // constant | default: case sensitive
	define('GREETING2', 'Hey there!', true); // true makes it not case sensitive



	echo greeting2; 
	//echo GREETING; 
	//echo $string3; 
	//echo $greeting2; 
	//echo $greeting; 
	//echo $output; 
	//echo $sum; 
?>