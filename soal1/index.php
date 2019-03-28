<?php
	include 'DuplicateString.php';
	$input1 = 'ABCA';
	$input2 = 'ABCDEBE';
	$input3 = 'ABBA';

	$duplicateString = new DuplicateString();

	// INPUT KE 1
	echo 'Input: '.$input1.'<br>Output: ';
	$duplicateString->getDuplicateString($input1);
	echo '<br><br>';

	// INPUT KE 2
	echo 'Input: '.$input2.'<br>Output: ';
	$duplicateString->getDuplicateString($input2);
	echo '<br><br>';

	// INPUT KE 3
	echo 'Input: '.$input3.'<br>Output: ';
	$duplicateString->getDuplicateString($input3);
	echo '<br>';

?>