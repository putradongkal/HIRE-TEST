<?php
include 'BubleShort.php';

$bubleShort = new bubleShort();

$array = array(1,5,3,4,2,6,7,8,9,-1,0);
echo "Original Array : ";
echo implode(', ',$array );
echo "<br>Buble Sort Array :";
echo implode(', ',$bubleShort->bubbleSort($array));
?>