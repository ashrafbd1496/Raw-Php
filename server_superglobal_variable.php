<?php 

echo "<pre>";
// print_r($_SERVER);

echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>"; 
echo $_SERVER['HTTP_HOST'] . "<br>"; 
echo $_SERVER['HTTP_REFERER'] . "<br>"; 
echo $_SERVER['HTTP_USER_AGENT']. "<br>"; 
 
//our necessary attributes- 
// [server_software],

// [script_name],
// [server_name],
// [request_uri],
// [php_self]- meaning we are in which file,


// to know more about the $_SERVER checkout the link
// https://www.w3schools.com/php/php_superglobals_server.asp

 ?>