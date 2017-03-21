
<?php
// http://thisinterestsme.com/modifying-json-file-php/
 
/* Load the file
 * file_get_contents() reads the whole contents of a file into a single string but doesn’t generate direct output.
*/
$contents = file_get_contents('example.json');
 
//Decode the JSON data into a PHP array.
$contentsDecoded = json_decode($contents, true);

print_r($contentsDecoded);

//Modify the counter variable.
$contentsDecoded['counter']++;
 
//Encode the array back into a JSON string.
$json = json_encode($contentsDecoded);
 
//Save the file.
file_put_contents('example.json', $json);


/*
// Sækjum og skoðum JSON skrá aftur eftir breytingar
$contents_eftir_breytingar = file_get_contents('example.json');

//Decode the JSON data into a PHP array.
$contents_eftir_breytingar_fylki = json_decode($contents_eftir_breytingar, true);

print_r($contents_eftir_breytingar_fylki);
*/