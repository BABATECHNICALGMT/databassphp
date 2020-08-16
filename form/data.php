<?php

$data = $_GET['dataLoad'];

$a = array('Patna','Gaya');
$b = array('Koderma','Barih');
$c = array('Pokhar','Dharan');
$d = array('Jaypur','Cota');

if ($data == "Bihar") {
	foreach ($a as $pat) {
		echo "<option> $pat </option>";
	}
}
if ($data == "Jharkhand") {
	foreach ($b as $jha) {
		echo "<option> $jha </option>";
	}
}
if ($data == "Nepal") {
	foreach ($c as $nap) {
		echo "<option> $nap </option>";
	}
}
if ($data == "Rajasthan") {
	foreach ($d as $raj) {
		echo "<option> $raj </option>";
	}
}
?>