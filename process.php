<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta content="index,follow" name="robots" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.3.2.js"></script> <!-- für scroll zum boden -->
<title>Chat-Process</title>



</head>
<style>


p{

position:static;
margin-bottom:5px;
margin-left:5px;
font-family:Arial, sans-serif;
max-width:272px;
}

p div{
max-width:240px;


}

#chat > p{
height:auto;
max-height:300px;
font-size:13;
margin-top:-4px;
border-top:none;
border-bottom:2px solid grey;
}

	
b{
font-family:Arial, sans-serif;
color:#777;	
}

</style>







<body>


<div id="chat" style=" width:280px; height:319px; position:static; background-color:(0,0,0,0.5); border-right:1px solid #777; overflow:auto;">


<?php


//mysql

$db = 'floatstorage_ct';

$connection = mysql_connect("localhost", "floatstorage_ct", "Rehpotsirhc95");

if($connection == true){

	//echo 'verbindung zur db hergestellt!';

	$selecting = mysql_select_db($db);

		if($selecting == true){
			//echo 'die Datenbank konnte ausgewaehlt werden!';

	

			// ausgeben aus tabelle chat
			
			$mysql_befehl = "SELECT text,name FROM new";
			$mysql_content = mysql_query($mysql_befehl);
			
			while($into = mysql_fetch_array($mysql_content)){
			
				if($into['name'] == "admin"){
					echo "<p style='color:blue; max-width:250px;'><b style='color:blue;'>".$into['name'].":</b><br />".$into['text']."</p>";
				}
				else{
					echo "<p style='max-width:250px;'><b>".$into['name'].":</b><br />".$into['text']."</p>";
				}
			}
		}
		else
		{
			//echo 'es konnte keine verbindung zur datenbank hergestellt werden!';
		}
}

?>



</div>






<script type="text/javascript">

$("#chat").attr({ scrollTop: $("#chat").attr("scrollHeight")}, 1000);

</script>





</body>
</html>
