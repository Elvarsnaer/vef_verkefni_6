<?php

  $json = file_get_contents(H:\Önn 4\VEF2A3U\verkefni_6\jsonskra.json);
  
  // fáum út með print_r($json);
  /*
      {
        "results": [
          {
            "shortName": "USD",
            "longName": "Bandarískur dalur",
            "value": 121.515,
            "askValue": 121.88,
            "bidValue": 121.15,
            "changeCur": -0.40857,
            "changePer": 0
          },
          {
            "shortName": "EUR",
            "longName": "Evra",
            "value": 162.185,
            "askValue": 162.67,
            "bidValue": 161.7,
            "changeCur": 0.09845,
            "changePer": "0.00"
          }
        ]
      }
  */

  // fáum php object 
  $json_object = json_decode($json);
  
  // Skoðum hvað við höfum
  echo "<pre>";
  print_r($json_object);
  echo "</pre>";
  /*
    stdClass Object(
      [results] => Array
          (
              [0] => stdClass Object
                  (
                      [shortName] => ISK
                      [longName] => Íslensk króna
                      [value] => 1
                      [askValue] => 1
                      [bidValue] => 1
                      [changeCur] => 0
                      [changePer] => 0.00
                  )

              [1] => stdClass Object
                  (
                      [shortName] => USD
                      [longName] => Bandarískur dalur
                      [value] => 114.565
                      [askValue] => 114.91
                      [bidValue] => 114.22
                      [changeCur] => -0.130367
                      [changePer] => 0
                  )
          )

      )
  */
?>

<!DOCTYPE html>
<html>
<head>
	<title>JSON sýnidæmi</title>
</head>
<body>

<h1>mynd 1</h1>
<picture>$jsonobject</picture>

</body>
</html>