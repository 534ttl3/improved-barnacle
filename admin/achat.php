<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta content="index,follow" name="robots" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.3.2.js"></script>

<title>Admin-Chat</title>





<style>
#textinput{
margin-top:5px;
margin-left:2px;

}

#senddata{
margin-top:5px;


}

.texti{
width:280px;

}


</style>


<body>

<div style=" height:410px; width:285px; padding:5px; border:1px solid black; background:blue; border-radius:3px;" >
<div id="loadchat" style="background:#eee; border:2px solid #444; height:319px; width:280px;">
<p style="font-family:Arial; font-size:15px; margin-left:10px; margin-top:5px; font-weight:bold;">Lade Daten...</p>

<img src="../pics/ajax-loader.gif" style="margin-left:10px;"/> 




<script type="text/javascript">

var auto_refresh = setInterval(
function ()
{
$('#loadchat').load('../process.php');
}, 1000); // refresh every 10000 milliseconds


</script>





</div>





<form name="form" method="POST" action="achat.php">
	
	<input id="textinput" type="text" name="name" value="admin" placeholder="Name" />
	<div id="hello">
	<input id="textinput" class="texti" type="text" name="text" placeholder="Text" />
	</div>
	<input id="senddata" type="submit" value="posten" />

	
	
</form>


<?php

if(isset($_POST['name'])){

	if(isset($_POST['text'])){
	
		$name = $_POST['name'];
		$text = $_POST['text'];
		
		if($name != ""){
		
			if($text != ""){
			
				$connection = mysql_connect("localhost", "floatstorage_ct", "Rehpotsirhc95");
				
				if($connection == true){
					
					$db = "floatstorage_ct";
					$selection = mysql_select_db($db);
					
					if($selection == true){
						
						$mysql_input_befehl = "INSERT INTO new(name, text) VALUES('$name', '$text')";
						$mysql_input = mysql_query($mysql_input_befehl);
						
						/*if($mysql_input == true){
						
							echo "daten erfolgreich in die datenbank <b>".$db."</b> eingetragen";					
						}*/
					}
				}
			}
		}
	}
}

?>


</div>




</body>
</html>