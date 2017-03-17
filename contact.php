<?php 
include ('db.php');
if( isset( $_POST['btn-upload'] ) ){
    $email    = htmlspecialchars($_POST['email']); 
}
mysql_select_db($db_database, $db_dodaj);
$sql=mysql_query("SELECT kod FROM user WHERE email='" . $email ."'");
$row = mysql_fetch_assoc($sql);
$kod = $row['kod'];
echo '<div class=notif-info">' . $kod . '</div>';
$esquel=mysql_query("SELECT id_user FROM user WHERE email='" . $email ."'");
$rov = mysql_fetch_assoc($esquel);
$id = $rov['id_user'];
echo '<div class=notif-info">' . $id . '</div>';

$temat= htmlspecialchars(trim('Losto.aktywacja'));
$wiadomosc= ('Wysłano Ci śmiertelniku link aktywacyjny do Twego konta na Newsmailu, kliknij kod jeśli zakładałeś konto: <a href="http://www.losto.net/newsmail/aktywacja.php?code='.$kod.'&id='.$id.'"> Kliknij tutaj </a>');
mail($email,$temat,$wiadomosc);




?>