<!DOCTYPE HTML>
<html>
<head>
<title>PHP LOG TEST</title>
</head>
<body>

<?php
    echo "Bonjour, je suis un Script PHP !         ******         ";
    echo "fichier  : index.html         *******      ";

    echo "Log PHP via error_log        *******       ";
    Error_log("********** from error_log(mess)----------");
    Error_log("********** from error_log(mess,3,'/var/log/httpd/access_log')----------",3,'/var/log/httpd/access_log');

    echo "Log PHP via syslog       *********       FIN";
    syslog(0,"********** from syslog 0----------");    # LOG_EMERG
    syslog(1,"********** from syslog 1----------");    # LOG_ALERT
    syslog(2,"********** from syslog 2----------");    # LOG_CRIT
    syslog(3,"********** from syslog 3----------");    # LOG_ERR
    syslog(4,"********** from syslog 4----------");    # LOG_WARNING
    syslog(5,"********** from syslog 5----------");    # LOG_NOTICE
    syslog(6,"********** from syslog 6----------");    # LOG_INFO
    syslog(7,"********** from syslog 7----------");    # LOG_DEBUG

?>

</body>
</html>