<?php

//Create a function that can detect whether a word is a palindrome or not.
//A palindrome is a word that can be interpreted the same way in reverse order.

// Create the function so it will return a bool value true if the entered word 
// is a palindrome. Function name example could be is_palindrome(). 

function is_palindrome($a, $b) {
	
	if ($a === $b) {
		return "True" . PHP_EOL;
	} else {
		return "False" . PHP_EOL;
	}
}

//Enter palindrome to test as variable $string:
$string = "Amore, Roma";

//lowercase initial string
$a = strtolower($string);
// use str_replace function to remove commas and spaces in input
$a = str_replace(', ', '', $a);
//set variable $b as the reverse of the string in variable $a using "strrev function"
$b = strrev($a);


//call is_palindrom function
echo is_palindrome($a, $b);
//Display suspected palindrome string and the reverse string
echo $a . PHP_EOL;
echo $b . PHP_EOL;

