<!DOCTYPE HTML>
<html>
<head>
<title>Exemple</title>
</head>
<body>

<?php
		echo "Bonjour, je suis un script PHP !";
		echo "fichier  : index.html";

		echo "Log PHP via error_log";
		error_log("********** from error_log----------")

		echo "Log PHP via syslog";
		syslog("********** from syslog----------")
		

?>

</body>
</html>