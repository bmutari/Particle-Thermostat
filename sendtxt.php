<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<title>Send TXT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
	//Spark Info
	$device_id = "54ff72066667515144481467";
	$access_token = "5d1d3c7879662d0abf9ac81723837f901d02b67a";
	$func = "txt";
	$result = "";

	// Listen for the submit button
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// get the text to be sent from the form
		$text=$_POST["text"];

		// Initiate curl object
		$ch = curl_init();
		// Set the url
		curl_setopt($ch, CURLOPT_URL,"https://api.spark.io/v1/devices/" . $device_id . "/" . $func);
		// Set the data to send
		curl_setopt($ch, CURLOPT_POSTFIELDS,"access_token=" . $access_token . "&params=" . $text);
		// Turn SSL off
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Mute the execute output
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		// Finally.. execute the curl call and store the responce in a variable
		$result=curl_exec($ch);
		// Close the curl resource
		curl_close($ch);
	}
?>

<form method=POST>
	Text to send: <input type="text" name="text"><br>
	<input type="Submit" name="Submit" value="Submit">
</form>
<br>
Responce from server: <?php echo($result);?>

</body>
</html>