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

<!-- tafla með gengisupplýsingum -->
<table>
     <tr>
        <th>land</th>
        <th>gengi</th>
  
      </tr>
      <?php
          // vinnum með gögnin úr objectinu $json_object

           // $jsonArray->results er vísun í property, results 
           // results er fylki sem geymir objects.  
           // -> er notað til að vísa í property og aðferðir í object.
           foreach ($json_object->results as $value) {

            // $value er sætistala í result fylki sama og [0],[1] osfrv.
            // $value->shortName er vísun í shortName property í objecti (nafnlaust).
            // shortName skilar gildi.
            echo "<tr><td>", $value->shortName, "</td>","<td>", $value->value, "</td></tr>";              
          }           
      ?>
</table>
</body>
</html>