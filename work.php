<?php

$name = $_POST['name'];
$text = $_POST['text'];

if($name != "admin" && $name && $text){

$db = "floatstorage_ct";

		if(!$name == ""){

			if(!$text == ""){

				$connection = mysql_connect("localhost", "floatstorage_ct", "Rehpotsirhc95");

				if($connection == true){

					$selecting = mysql_select_db($db);

					$input_befehl = "INSERT INTO new(name, text) VALUES('$name', '$text')";
					$mysql_input = mysql_query($input_befehl);
					
					if($mysql_input == true){
						
						echo "daten erfolgreich eingetragen!";					
					}
				}
			}
		}
	}

?>