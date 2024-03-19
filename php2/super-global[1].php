<?php

// $_GLOBAL
// $_SERVER
// $_SESSION
// $_COOKIE
// $_GET
// $_POST
// $_REQUEST
// $_FILES
// $_ENV

echo "<pre>";

//echo $_SERVER["HTTP_USER_AGENT"];
echo $_SERVER["REMOTE_ADDR"];
echo $_SERVER["MIBDIRS"];
echo "<br>";
echo $_SERVER["MYSQL_HOME"];
echo "<br>";
echo $_SERVER["OPENSSL_CONF"];
echo "<br>";
echo $_SERVER["PHP_PEAR_SYSCONF_DIR"];
echo "<br>";
echo $_SERVER["PHPRC"];
echo "<br>";
echo $_SERVER["TMP"];
echo "<br>";
echo $_SERVER["HTTP_HOST"];
echo "<br>";
echo $_SERVER["HTTP_CONNECTION"];
echo "<br>";
echo $_SERVER["HTTP_CACHE_CONTROL"];
echo "<br>";
echo $_SERVER["HTTP_SEC_CH_UA"];
echo "<br>";
echo $_SERVER["HTTP_SEC_CH_UA_MOBILE"];
echo "<br>";


print_r($_SERVER);


?>