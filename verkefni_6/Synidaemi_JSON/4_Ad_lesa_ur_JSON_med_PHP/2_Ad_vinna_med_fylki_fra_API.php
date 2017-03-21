<?php
  
  // slóð á API, sem skilar JSON
  $url ="http://apis.is/currency/arion";          
  
  // JSON sótt úr API.
  $json = file_get_contents($url);
  
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

  // Við fáum multidimensional associative array (key/value)
  $json_array = json_decode($json, true);
  
  echo "<pre>";
  print_r($json_array);
  echo "</pre>";
  /* 
    Array
    (
        [results] => Array
            (
                [0] => Array
                    (
                        [shortName] => ISK
                        [longName] => Íslensk króna
                        [value] => 1
                        [askValue] => 1
                        [bidValue] => 1
                        [changeCur] => 0
                        [changePer] => 0.00
                    )

                [1] => Array
                    (
                        [shortName] => USD
                        [longName] => Bandarískur dalur
                        [value] => 114.585
                        [askValue] => 114.93
                        [bidValue] => 114.24
                        [changeCur] => -0.112985
                        [changePer] => 0
                    )
              )
      )
  */
/*
Útskýringar:
        $json_array er multidimensional array (þ.e. geymir undirfylki)
        $json_array er key/value fylki 
        $json_array geymir fylkið results 
        results fylkið (venjulegt fylki) geymir nokkur fylki (nafnlaus)
        Þessi nafnlausu fylki eru key/value fylki og hvert þeirra geymir gengis upplýsingar 
*/
// sækjum results fylkið yfir í $currencies, til einföldunar        
$currencies = $json_array["results"]; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>JSON sýnidæmi</title>
</head>
<body>

<!-- tafla með gengisupplýsingum -->
<table>
     <tr>
        <th>land</th>
        <th>gengi</th>
      </tr>
      <?php
      // vinnum með gögnin úr fylkinu $currencies 
         // fyrir hvert og eitt fylki (key/value) í $currencies; usd, eur osfrv. 
         foreach ($currencies as $value) {
          // $value er sætisnúmer fyrir hvert og eitt fylki
          // $value["shortName"] er vísun í key, sem skilar gildi.
          echo    "<tr>",
                      "<td>", 
                          $value["shortName"],  
                      "</td>",
                       "<td>", 
                          $value["value"],
                      "</td>",      
                  "</tr>";
        }           
      ?>
</table>
</body>
</html>