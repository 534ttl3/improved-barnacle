<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta content="index,follow" name="robots" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
<title>Chat</title>


<script>

function clear_form_elements(ele) {
	 
	    $(ele).find(':input').each(function() {
	        switch(this.type) {
	            case 'password':
	            case 'select-multiple':
	            case 'select-one':
	            case 'text':
	            case 'textarea':
	                $(this).val('');
	                break;
	            case 'checkbox':
	            case 'radio':
	                this.checked = false;
	        }
	    });
	 
	}

</script>

<script>

	function get(){
		$.post('http://floatstorage.bplaced.net/chat/work.php', { name: form.name.value, text: form.text.value });
	
	
	}


</script>

<script>
$(document).ready(function(){
alert("Der Chat ist noch beta. Der Name des Administrators: 'admin'");
});

</script>

</head>

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

<div style=" height:410px; width:285px; padding:5px; border:1px solid black; background:#000; border-radius:3px;" >
<div id="loadchat" style="background:#eee; border:2px solid #444; height:319px; width:280px;">
<p style="font-family:Arial; font-size:15px; margin-left:10px; margin-top:5px; font-weight:bold;">Lade Daten...</p>

<img src="pics/ajax-loader.gif" style="margin-left:10px;"/> 




<script type="text/javascript">

var auto_refresh = setInterval(
function ()
{
$('#loadchat').load('http://floatstorage.bplaced.net/chat/process.php');
}, 3000); // refresh every 10000 milliseconds


</script>





</div>

<form name="form">
	
	<input id="textinput" type="text" name="name" placeholder="Name" style="float:left;" />
	<div id="hello">
	<input id="textinput" class="texti" type="text" name="text" placeholder="Text" />
	</div>
	<input id="senddata" type="button" value="posten" onClick="get(); clear_form_elements('#hello');">

	
	
</form>


</div>




</body>
</html>