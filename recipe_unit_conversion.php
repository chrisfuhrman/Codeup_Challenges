<?php

//Codeup Challenge: Recipe Unit Conversion

// Create a script to convert units of measure for recipes. It should 
// take in an amount and a unit (using either $argv or fgets(STDIN)) and 
// output that amount converted to another unit of measure. You can either 
// output the converted amount in all the relevant units, or ask the user 
// what unit they would like to convert it to.


	// Fluid Units
// Teaspoon (tsp)
// Tablespoon (Tbsp)
// Fluid Ounce (fl oz)
// Cup (cp)
// Pint (pt)
// Quart (qt)
// Gallon (gal)

	// Dry Units
// Ounce (oz)
// Pound (lb)


fwrite(STDOUT, 'What unit of measurement would you like to convert to (tsp, tbsp, flOz, cp, pt, qt, gal, dryOz, or lb)?  ');
"\n";
$endMeasure = strtolower(trim(fgets(STDIN)));

fwrite(STDOUT, 'What unit of measurement are you converting from (tsp, tbsp, flOz, cp, pt, qt, gal, dryOz, or lb)?  ');
"\n";
$beginMeasure = strtolower(trim(fgets(STDIN)));

fwrite(STDOUT, 'How many units do you have?  ');
"\n";
$valueInitial = strtolower(trim(fgets(STDIN)));

// function getInput($upper = false) {
//     $input = trim(fgets(STDIN));
//     if ($upper) {
//         $input = strtoupper($input);
//     }
//     return $input;
// }


//function to convert to tsp		
function convertToTsp ($beginMeasure, $valueInitial) {
	switch ($beginMeasure) {
		case 'tsp':
			$valueConverted = $valueInitial;
			return $valueConverted;
			break;
		case 'tbsp':
			$valueConverted = $valueInitial * 3;
			return $valueConverted;
			break;
		case 'flOz':
			$valueConverted = $valueInitial * 6;
			return $valueConverted;
			break;
		case 'cp':
			$valueConverted = $valueInitial * 48;
			return $valueConverted;
			break;
		case 'pt':
			$valueConverted = $valueInitial * 96;
			return $valueConverted;
			break;
		case 'qt':
			$valueConverted = $valueInitial * 192;
			return $valueConverted;
			break;
		case 'gal':
			$valueConverted = $valueInitial * 768;
			return $valueConverted;
			break;
	}
}
//function to convert to tbsp
function convertToTbsp ($beginMeasure, $valueInitial) {
		switch ($beginMeasure) {
			case 'tsp':
				$valueConverted = $valueInitial * 0.333333;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $valueInitial;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $valueInitial * 2;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $valueInitial * 16;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $valueInitial * 32;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $valueInitial * 64;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $valueInitial * 256;
				return $valueConverted;
				break;
		}

}
//function to convert to flOz
function convertToFlOz ($beginMeasure, $valueInitial) {
		switch ($beginMeasure) {
			case 'tsp':
				$valueConverted = $valueInitial * 0.166667;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $valueInitial * 0.5;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $valueInitial;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $valueInitial * 8;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $valueInitial * 16;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $valueInitial * 32;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $valueInitial * 128;
				return $valueConverted;
				break;
		}

}
//function to convert to cp
function convertToCp ($beginMeasure, $valueInitial) {
		switch ($beginMeasure) {
			case 'tsp':
				$valueConverted = $valueInitial * 0.0208333;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $valueInitial * 0.0625;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $valueInitial * 0.125;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $valueInitial;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $valueInitial * 2;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $valueInitial * 4;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $valueInitial * 16;
				return $valueConverted;
				break;
		}

}
//function to convert to pt
function convertToPt ($beginMeasure, $valueInitial) {
		switch ($beginMeasure) {
			case 'tsp':
				$valueConverted = $valueInitial * 0.0208333;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $valueInitial * 0.0625;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $valueInitial * 0.0625;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $valueInitial * 0.5;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $valueInitial;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $valueInitial * 2;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $valueInitial * 8;
				return $valueConverted;
				break;
		}

}
//function to convert to qt
function convertToQt ($beginMeasure, $valueInitial) {
		switch ($beginMeasure) {
			case 'tsp':
				$valueConverted = $valueInitial * 0.00520833;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $valueInitial * 0.015625;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $valueInitial * 0.03125;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $valueInitial * 0.25;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $valueInitial * 0.5;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $valueInitial;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $valueInitial * 4;
				return $valueConverted;
				break;
		}

}
//function to convert to gal
function convertToGal ($beginMeasure, $valueInitial) {
		switch ($beginMeasure) {
			case 'tsp':
				$valueConverted = $valueInitial * 0.00130208;
				return $valueConverted;
				break;
			case 'tbsp':
				$valueConverted = $valueInitial * 0.00390625;
				return $valueConverted;
				break;
			case 'flOz':
				$valueConverted = $valueInitial * 0.0078125;
				return $valueConverted;
				break;
			case 'cp':
				$valueConverted = $valueInitial * 0.0625;
				return $valueConverted;
				break;
			case 'pt':
				$valueConverted = $valueInitial * 0.125;
				return $valueConverted;
				break;
			case 'qt':
				$valueConverted = $valueInitial * 0.25;
				return $valueConverted;
				break;
			case 'gal':
				$valueConverted = $valueInitial;
				return $valueConverted;
				break;
		}

}
//function to convert to dryOz
function convertToDryOz ($beginMeasure, $valueInitial) {
		switch ($beginMeasure) {
			case 'lb':
				$valueConverted = $valueInitial * ;
				return $valueConverted;
				break;
		}

}
//function to convert to lb
function convertToLb ($beginMeasure, $valueInitial) {
		switch ($beginMeasure) {
			case 'dryOz':
				$valueConverted = $valueInitial * ;
				return $valueConverted;
				break;
		}
}

switch ($endMeasure) {
	case 'tsp':
		$valueConverted = convertToTsp($beginMeasure, $valueInitial);
		break;
	case 'tbsp':
		$valueConverted = convertToTbsp($beginMeasure, $valueInitial);
		break;
	case 'flOz':
		$valueConverted = convertToFlOz($beginMeasure, $valueInitial);
		break;
	case 'cp':
		$valueConverted = convertToCp($beginMeasure, $valueInitial);
		break;
	case 'pt':
		$valueConverted = convertToPt($beginMeasure, $valueInitial);
		break;
	case 'qt':
		$valueConverted = convertToQt($beginMeasure, $valueInitial);
		break;
	case 'gal':
		$valueConverted = convertToGal($beginMeasure, $valueInitial);
		break;
	case 'dryOz':
		$valueConverted = convertToDryOz($beginMeasure, $valueInitial);
		break;
	case 'lb':
		$valueConverted = convertToLb($beginMeasure, $valueInitial);
		break;
	}

echo $valueConverted . 'test' . PHP_EOL;
echo $valueInitial, $beginMeasure, ' equals ', round($valueConverted, 2), $endMeasure, PHP_EOL;

// The loop!
// do {

//     // Show the menu options
//     echo "What unit would you like to convert to?\n 
//     tsp, tbsp, fl_oz, cp, pt, qt, gal"
//     fwrite)

//     // Get the input from user
//     // Use trim() to remove whitespace and newlines
//     $input = getInput(true);

//     // Check for actionable input
//     if ($input == 'N') {
//         // Ask for entry
//         echo 'Enter item: ';
//         // Add entry to list array
//         $items[] = getInput();
//     } elseif ($input == 'R') {
//         // Remove which item?
//         echo 'Enter item number to remove: ';
//         // Get array key
//         $key = getInput();
//         //The $key-- brings the index value back to the actual index value
//         $key--;
//         // Remove from array
//         unset($items[$key]);
//         // reindex numerical array
//         $items = array_values($items);
//     }
// // Exit when input is (Q)uit
// } while ($input != 'Q');
// // tbsp conversion
// tsp = $tbsp * 
// tbsp = $tbsp;
// fl_oz = $tbsp * 
// cp = $tbsp * 
// pt = $tbsp *
// qt = $tbsp * 
// gal = $tbsp * 

// // fl_oz conversion
// tsp = $fl_oz
// tbsp * 
// fl_oz = $fl_oz; 
// cp = 
// pt = 
// qt =  * 
// gal =  * 

// // Cup conversion
// tsp = $cp * 48;
// tbsp = $cp * 16;
// fl_oz = $cp * 8;
// $cp = $cp;
// pt = $cp * 0.5;
// qt = $cp * 0.25;
// gal = $cp * 0.0625;

// // pint conversion
// tsp = $pt
// tbsp
// fl_oz = 
// $pt = $pt;
// $qt = $
// // Quart (qt)

// // Gallon (gal)



// // oz to lb
// lb = $oz * 16;

// // lb to oz
// oz = $lb * 0.0625;









