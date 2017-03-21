<?php
// https://daylerees.com/code-smart-json/
# Að breyta PHP Fylki í JSON

// Fylki
$concerts = [  
		["title" => "The Magic Flute", "time" => 1329636600],  
		["title" => "Vivaldi Four Seasons", "time" => 1329291000]  
];

// json_encode() til að breyta í JSON
$concerts_json = json_encode($concerts);

echo $concerts_json;

/* úttakið er strengur: 

[{"title":"The Magic Flute","time":1329636600},{"title":"Vivaldi Four Seasons","time":1329291000}]

*/
