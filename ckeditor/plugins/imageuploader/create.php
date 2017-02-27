<?php

// Including the check_permission file, don't delete the following row!
require(dirname(__FILE__) . '/check_permission.php');

if(isset($_POST["username"]) or isset($_POST["password"])){
    $tmpusername = strip_tags($_POST["username"]);
    $tmpusername = htmlspecialchars($tmpusername, ENT_QUOTES);
    $tmppassword = md5($_POST["password"]);
    $data = '$username = "'.$tmpusername.'"; $password = \''.$tmppassword.'\';'.PHP_EOL;
    $fp = fopen(dirname(__FILE__) . '/pluginconfig.php', 'a');
    fwrite($fp, $data);
    unlink(dirname(__FILE__) . "/new.php");
    unlink(dirname(__FILE__) . "/create.php");
    header("Location: imgbrowser.php");
} 

