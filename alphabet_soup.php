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
	// // turn string into array, with each word as a separate element
	$array = str_split($str);
	sort($array);
	echo implode($array) . PHP_EOL;
}

// ask user for input
fwrite(STDOUT, "enter a word or phrase \n");

// call function using user input
alphabet_soup(trim(fgets(STDIN)));









