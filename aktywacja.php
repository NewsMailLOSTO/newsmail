<?php
     include ('head.php');
    include ('top.php');
include ('db.php');

echo '<div class="col-lg-8 col-md-8">';

$id=$_GET['id'];
$kod = $_GET['kod'];
mysql_select_db($db_database, $db_dodaj);
 

 $quarry=mysql_query("SELECT kod FROM user WHERE email='" . $id ."'");
$rovio = mysql_fetch_assoc($quarry);
$kodbaza = $rovio['kod'];



if ($kod==$kodbaza){
    $aktywacja=mysql_query("UPDATE user SET aktywny=1 WHERE id_user=$id");
}


echo '</div>';
    include ('prawy.php');
    include('foot.php');
?>

