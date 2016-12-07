<?php
/*
Plik z ustawieniami bazy
Made by Marcin
*/

$db_hostname ="sql.losto.net";
$db_database="00051799_nm";
$db_username="00051799_nm";
$db_password="newsmail357";

$db=mysql_pconnect($db_hostname, $db_username, $db_password) or trigger_error(mysql_error(),E_USER_ERROR);
$db_dodaj= mysql_connect($db_hostname, $db_username, $db_password, $db_database);





?>
