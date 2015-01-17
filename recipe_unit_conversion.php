<?php

//Codeup Challenge: Recipe Unit Conversion

// Create a script to convert units of measure for recipes. It should 
// take in an amount and a unit (using either $argv or fgets(STDIN)) and 
// output that amount converted to another unit of measure. You can either 
// output the converted amount in all the relevant units, or ask the user 
// what unit they would like to convert it to.


// Fluid Units
$UNIT_TEASPOON = 'tsp';
$UNIT_TABLESPOON = 'tbsp';
$UNIT_FLUID_OUNCES = 'flOz';
$UNIT_CUP = 'cp';
$UNIT_PINT = 'pt';
$UNIT_QUART = 'qt';
$UNIT_GALLON = 'gal';
//Dry Units:
$UNIT_DRY_OUNCES = 'dryOz';
$UNIT_POUND = 'lb';

$acceptableUnits = [$UNIT_TEASPOON, $UNIT_TABLESPOON, $UNIT_FLUID_OUNCES, $UNIT_CUP, $UNIT_PINT, $UNIT_QUART, $UNIT_GALLON, $UNIT_DRY_OUNCES, $UNIT_POUND];

$acceptableConversions = [
	
	$UNIT_TEASPOON => [$UNIT_TABLESPOON, $UNIT_FLUID_OUNCES, $UNIT_CUP, $UNIT_PINT, $UNIT_QUART, $UNIT_GALLON],
	$UNIT_TABLESPOON => [$UNIT_TEASPOON, $UNIT_FLUID_OUNCES, $UNIT_CUP, $UNIT_PINT, $UNIT_QUART, $UNIT_GALLON],
	$UNIT_FLUID_OUNCES => [$UNIT_TEASPOON, $UNIT_FLUID_OUNCES, $UNIT_CUP, $UNIT_PINT, $UNIT_QUART, $UNIT_GALLON],
	$UNIT_CUP => [$UNIT_TEASPOON, $UNIT_FLUID_OUNCES, $UNIT_CUP, $UNIT_PINT, $UNIT_QUART, $UNIT_GALLON],
	$UNIT_PINT => [$UNIT_TEASPOON, $UNIT_FLUID_OUNCES, $UNIT_CUP, $UNIT_PINT, $UNIT_QUART, $UNIT_GALLON],
	$UNIT_QUART => [$UNIT_TEASPOON, $UNIT_FLUID_OUNCES, $UNIT_CUP, $UNIT_PINT, $UNIT_QUART, $UNIT_GALLON],
	$UNIT_GALLON => [$UNIT_TEASPOON, $UNIT_FLUID_OUNCES, $UNIT_CUP, $UNIT_PINT, $UNIT_QUART, $UNIT_GALLON],
	$UNIT_DRY_OUNCES => [$UNIT_POUND],
	$UNIT_POUND => [$UNIT_DRY_OUNCES]
];


//multiple conditions, call with function
do {

	echo "What unit of measurement do you need to convert? (" . implode($acceptableUnits, ", ") . ")? \n";
	"\n";
	$inputUnit = strtolower(trim(fgets(STDIN)));

	if (in_array($inputUnit, $acceptableUnits)) {
		echo "What unit of measurement would you like to convert to? (" . implode($acceptableUnits, ", ") . ")? \n";
		"\n";
		$outputUnit = strtolower(trim(fgets(STDIN)));

		if (in_array($outputUnit, $acceptableConversions[$inputUnit])) {
			do {
				echo "How many" . " " . $inputUnit . "'s do you have?" . PHP_EOL;
				"\n";
				$inputValue = strtolower(trim(fgets(STDIN)));
		}
	} while (!in_array($outputUnit, $acceptableValues));
	}
} while (!in_array($inputUnit, $acceptableValues));


//function to convert to tsp		
function convertToTsp ($inputUnit, $inputValue) {
	switch ($inputUnit) {
		case 'tsp':
			$valueConverted = $inputValue;
			return $valueConverted;
			break;
		case 'tbsp':
			$valueConverted = $inputValue * 3;
			return $valueConverted;
			break;
		case 'flOz':
			$valueConverted = $inputValue * 6;
			return $valueConverted;
			break;
		case 'cp':
			$valueConverted = $inputValue * 48;
			return $valueConverted;
			break;
		case 'pt':
			$valueConverted = $inputValue * 96;
			return $valueConverted;
			break;
		case 'qt':
			$valueConverted = $inputValue * 192;
			return $valueConverted;
			break;
		case 'gal':
			$valueConverted = $inputValue * 768;
			return $valueConverted;
			break;
	}
}
//function to convert to tbsp
function convertToTbsp ($inputUnit, $inputValue) {
		switch ($inputUnit) {
			case 'tsp':
				$valueConverted = $inputValue * 0.333333;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $inputValue;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $inputValue * 2;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $inputValue * 16;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $inputValue * 32;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $inputValue * 64;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $inputValue * 256;
				return $valueConverted;
				break;
		}

}
//function to convert to flOz
function convertToFlOz ($inputUnit, $inputValue) {
		switch ($inputUnit) {
			case 'tsp':
				$valueConverted = $inputValue * 0.166667;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $inputValue * 0.5;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $inputValue;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $inputValue * 8;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $inputValue * 16;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $inputValue * 32;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $inputValue * 128;
				return $valueConverted;
				break;
		}

}
//function to convert to cp
function convertToCp ($inputUnit, $inputValue) {
		switch ($inputUnit) {
			case 'tsp':
				$valueConverted = $inputValue * 0.0208333;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $inputValue * 0.0625;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $inputValue * 0.125;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $inputValue;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $inputValue * 2;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $inputValue * 4;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $inputValue * 16;
				return $valueConverted;
				break;
		}

}
//function to convert to pt
function convertToPt ($inputUnit, $inputValue) {
		switch ($inputUnit) {
			case 'tsp':
				$valueConverted = $inputValue * 0.0208333;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $inputValue * 0.0625;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $inputValue * 0.0625;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $inputValue * 0.5;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $inputValue;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $inputValue * 2;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $inputValue * 8;
				return $valueConverted;
				break;
		}

}
//function to convert to qt
function convertToQt ($inputUnit, $inputValue) {
		switch ($inputUnit) {
			case 'tsp':
				$valueConverted = $inputValue * 0.00520833;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $inputValue * 0.015625;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $inputValue * 0.03125;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $inputValue * 0.25;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $inputValue * 0.5;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $inputValue;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $inputValue * 4;
				return $valueConverted;
				break;
		}

}
//function to convert to gal
function convertToGal ($inputUnit, $inputValue) {
		switch ($inputUnit) {
			case 'tsp':
				$valueConverted = $inputValue * 0.00130208;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $inputValue * 0.00390625;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $inputValue * 0.0078125;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $inputValue * 0.0625;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $inputValue * 0.125;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $inputValue * 0.25;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $inputValue;
				return $valueConverted;
				break;
		}

}
//function to convert to dryOz
function convertToDryOz ($inputUnit, $inputValue) {
		switch ($inputUnit) {
			case 'lb':
				$valueConverted = $inputValue * 16;
				return $valueConverted;
				break;
		}

}
//function to convert to lb
function convertToLb ($inputUnit, $inputValue) {
		switch ($inputUnit) {
			case 'dryOz':
				$valueConverted = $inputValue * 0.0625;
				return $valueConverted;
				break;
		}
}

switch ($outputUnit) {
	case 'tsp':
		$valueConverted = convertToTsp($inputUnit, $inputValue);
		break;
	case 'tbsp':
		$valueConverted = convertToTbsp($inputUnit, $inputValue);
		break;
	case 'flOz':
		$valueConverted = convertToFlOz($inputUnit, $inputValue);
		break;
	case 'cp':
		$valueConverted = convertToCp($inputUnit, $inputValue);
		break;
	case 'pt':
		$valueConverted = convertToPt($inputUnit, $inputValue);
		break;
	case 'qt':
		$valueConverted = convertToQt($inputUnit, $inputValue);
		break;
	case 'gal':
		$valueConverted = convertToGal($inputUnit, $inputValue);
		break;
	case 'dryOz':
		$valueConverted = convertToDryOz($inputUnit, $inputValue);
		break;
	case 'lb':
		$valueConverted = convertToLb($inputUnit, $inputValue);
		break;
	}

echo $inputValue, $inputUnit, ' equals ', round($valueConverted, 2), $outputUnit, PHP_EOL;

