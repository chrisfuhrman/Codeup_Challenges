<?php

//Codeup Challenge: Alphabet Soup
// Create a function alphabet_soup($str) that accepts a string
// and will return the string in alphabetical order.
// E.g. "hello world" becomes "ehllo dlorw". So make sure your 
// function separates and alphabetizes each word separately.

function alphabet_soup($str) {
	//lowercase input
	$str = strtolower($str);
	//removes special characters but not spaces
	$str = preg_replace("/[^ \w]+/", '', $str);
	// converts $str into an array with each word as an element
	$array1 = explode(' ', $str);
	// turns $str into an array, with each word as a separate element
	
	//converts each element of $array1 their own array,
	//then alphabetizes each array and returns the value as a string
	foreach ($array1 as $value) {
		// cycles through $array1 and breaks each element into its own string
		$array2 = str_split($value);
		//Alphabetizes each word separately in the string
		sort($array2);
		// echos the value from the array and puts a space between each word
		$string .= implode($array2) . ' ';
	}
	return $string;
}

// ask user for input
fwrite(STDOUT, "enter a word or phrase \n");

// call function using user input
$str = (trim(fgets(STDIN)));
echo alphabet_soup($str) . PHP_EOL;

