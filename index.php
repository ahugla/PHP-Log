<!DOCTYPE HTML>
<html>
<head>
<title>Exemple</title>
</head>
<body>

<?php
	echo "Bonjour, je suis un Script PHP !         ******         ";
    echo "fichier  : index.html         *******      ";

    echo "Log PHP via error_log        *******       ";
    Error_log("********** from error_log----------");

    echo "Log PHP via syslog       *********       FIN";
    syslog("********** from syslog----------");
?>

</body>
</html>