<?php
# JSON to PHP parsing með PHP

// JSON strengur í php breytu
$jsonData = '{ "music":
                 [
			     	{
                        "title":"The Magic Flute",
                        "time":1329636600
                    },
				    {   "title":"Vivaldi Four Seasons",
                        "time":1329291000
                    }
			     ]
            }';

/* Notum json_decode() til að breyta JSON string í eitthvað vinnanlegt í php
 * json_decode() skilar annað hvort associative array eða stdClass object
*/ 

// Eftirfarandi skilar stdClass object með tveimur php objectum (með properties, title og time).
// Json_decode() method doesn’t return our JSON as a PHP array; it uses a stdClass object to represent our data.
$concerts_obj = json_decode($jsonData); 
        
    echo "<pre>";
    print_r($concerts_obj);
    echo "</pre>";

    /* Output:
         stdClass Object
        (
            [music] => Array
                (
                    [0] => stdClass Object
                        (
                            [title] => The Magic Flute
                            [time] => 1329636600
                        )

                    [1] => stdClass Object
                        (
                            [title] => Vivaldi Four Seasons
                            [time] => 1329291000
                        )

                )

        )
    */
echo($concerts_obj->music[0]->title);  // úttak: Vivaldi Four Seasons


// En ef við notum true í seinni parameter þá fáum við associative array, 
$concerts_array = json_decode($jsonData, true); 

    echo "<pre>";
    print_r($concerts_array);
    echo "</pre>";
    /* Output: 
       Array
        (
            [music] => Array
                (
                    [0] => Array
                        (
                            [title] => The Magic Flute
                            [time] => 1329636600
                        )

                    [1] => Array
                        (
                            [title] => Vivaldi Four Seasons
                            [time] => 1329291000
                        )

                )

        )
    */


echo $concerts_array["music"][1]["title"];  // úttak: Vivaldi Four Seasons








/* Ítarefni:
    // Hvað ef við erum með sértákn í JSON t.d einfalda gæsalöpp? 
    {"title":"Mozart's Requiem","time":1330196400}

    // Að nota escape á einföldu gæsalöpp skilar invalid JSON skrá skv. http://jsonlint.com/#
    {"title":"Mozart\'s Requiem","time":1330196400}
*/