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

// Breytum JSON streng í php assoiative array.
$colors = json_decode($jsonData, true);
	// fáum þá með print_r($colors);
	/* 	Array ( 
			[red] => #f00 
			[green] => #0f0 
			[blue] => #00f 
			[cyan] => #0ff 
			[magenta] => #f0f 
			[yellow] => #ff0 
			[black] => #000 
		)
	*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>JSON sýnidæmi</title>
	<!-- CSS fyrir töflu (betra samt að hafa css í css skrá) -->
	<style>
		table, th , td {
		    border: 1px solid grey;
		    border-collapse: collapse;
		    padding: 5px;
		}
		table tr:nth-child(odd) {
		    background-color: #f1f1f1;
		}
		table tr:nth-child(even) {
		    background-color: #ffffff;
		}
	</style>
</head>
<body>

	<!-- Búum til töflu með $colors fylki -->
	<table>
		<?php  	        
          foreach ($colors as $key => $value) {
            	echo "<tr><th>", $key , "</th><td>", $value , "</td></tr>";          
          }
      	?>    
    </table>

     <!-- listi og $colors fylki -->
     <h2>List of colors</h2>
	 <ul>
		<?php  	   
          foreach ($colors as $key => $value) {
        	 echo "<li>". $key . ": " . $value . "</li>";
          }
      	?>    
     </ul>


     <!-- listi og $colors fylki með css -->
	 <h2>List of colors</h2>
	 <ul>
		<?php  	  
		  // notum css inline style  
          foreach ($colors as $key => $value) {
            	echo '<li style="color:', $value , '">', $key, '</li>';
          }	
        ?>    
     </ul>
</body>
</html>