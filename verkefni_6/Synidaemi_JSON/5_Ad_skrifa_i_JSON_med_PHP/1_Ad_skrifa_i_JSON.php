<?php
// JSON strengur í php breytu
$jsonData =	'{
	    "red":"#f00",
	    "green":"#0f0",
	    "blue":"#00f",
	    "cyan":"#0ff",
	    "magenta":"#f0f",
	    "yellow":"#ff0",
	    "black":"#000"
	}';

// breytum í php fylki
$json_array = json_decode($jsonData, true);

// skrifum í/ uppfærum fylki, bætum við einum lit.
$purple = "#800080";
$json_array["purple"] = $purple;

// breytum php fylki aftur í JSON 
$jsonData = json_encode($json_array);

// Skoðum breytinguna
echo $jsonData;
?>