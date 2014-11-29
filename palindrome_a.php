<?php

//Create a function that can detect whether a word is a palindrome or not.
//A palindrome is a word that can be interpreted the same way in reverse order.

// Create the function so it will return a bool value true if the entered word 
// is a palindrome. Function name example could be is_palindrome(). 
// After you are complete test several known palindromes, then test regular words
// in your function.


function is_palindrome($string) {


	//lowercase initial input
	$string = strtolower($string);
	// use str_replace function to remove commas and spaces in input
	$string = str_replace(', ', '', $string);
	//set variable $b as the reverse of the string in variable $a using "strrev function"
	$stringReversed = strrev($string);

	if ($string == $stringReversed) {
		return "True" . PHP_EOL;
	} else {
		return "False" . PHP_EOL;
	}
	// Is there a way to not put 2 PHP_EOL's above and utilize the one below?
}

fwrite(STDOUT, "\nEnter suspected palindrome\n");


//call "is_palindrom" function
$string = trim(fgets(STDIN));

echo is_palindrome($string);
