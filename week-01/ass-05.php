<?php
	/**
	 * This solution uses the associative array to set up
	 * predefined rules that we would learn in chapter 5.
	 */
	$pricings = [
		[ 'unit' => 5,           'price' => 10, 'isWhole' => true ],
		[ 'unit' => 5,           'price' =>  3, 'isWhole' => false ],
		[ 'unit' => 5,           'price' =>  5, 'isWhole' => false ],
		[ 'unit' => PHP_INT_MAX, 'price' => 10, 'isWhole' => false ],
	];

	echo "Input usage unit: ";
	fscanf(STDIN, "%d", $unit);

	$price = 0;
	for($i = 0; $unit > 0; $i++) {
		$unitCal = ($unit > $pricings[$i]['unit'])? $pricings[$i]['unit'] : $unit;
		$price += ($pricings[$i]['isWhole'])? $pricings[$i]['price'] : $unitCal * $pricings[$i]['price'];
		$unit -= $unitCal;
	}

	printf("price of electricity bill = %d\n", $price);
