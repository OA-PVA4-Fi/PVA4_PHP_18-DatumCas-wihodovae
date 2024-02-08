<?php

//1  1)
$today = strtotime("today");

// 2)
$aktualniDatum = date("Y-m-d");

// 3)
$aktualniDatum = date("YYYY-MM-DD");

// 4)
$aktualniCas = date("H:m:s");

// 5)
$aktualniDatumACas = date("Y-m-d H:i:s");

// 6)
$aktualniDatumACas = date("j, n, Y H:i");


//2 1)
$aktualniDatum = date("Y-m-d");

// 2)
$zitrejsiDatum = date("Y-m-d", strtotime("+1 day"));

// 3)
$prvniDenNasledujicihoMesice = date("Y-m-01", strtotime("+1 month"));

// 4)
$posledniDenNasledujicihoMesice = date("Y-m-t", strtotime("+1 month"));

// 5)






?>