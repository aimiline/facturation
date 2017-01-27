<?php
require "vendor/autoload.php";

$facturation =[
	[
	'prix'=>12,
	'descriptif'=>"test"
	],
	[
	'prix'=>5,
	'descriptif'=>"test"
	],
	[
	'prix'=>30,
	'descriptif'=>"test"
	],
	[
	'prix'=>13,
	'descriptif'=>"test"
	]
];



$var =new \MIM\facture();
$result=$var->calcul($facturation);
echo $result;