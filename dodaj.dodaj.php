
<?php 

include('head.php');
include('top.php');
include('db.php');
if( isset( $_POST['btn-upload'] ) ){
    $imie     = $_POST['imie'];
    $imie = htmlspecialchars($imie);
    if(empty($imie)){ $mojerror='Nie wpisałeś imienia <br/>'; }
   
    $nazwisko = htmlspecialchars($_POST['nazwisko']);
    if(empty($nazwisko)){ $mojerror=$mojerror.'Nie wpisałeś nazwiska <br/>'; }
   
    $email    = htmlspecialchars($_POST['email']);
    if(empty($email)){ $mojerror=$mojerror.'Nie wpisałeś emaila <br/>'; }
   
    $haslo    = htmlspecialchars($_POST['haslo']);
    if(empty($haslo)){ $mojerror=$mojerror.'Nie wpisałeś hasła <br/>'; }
   
    $aktywny=0;
   
    if(empty($mojerror)){    
    mysql_select_db($db_database, $db_dodaj);
    $sql="INSERT INTO user (imie, nazwisko, email, haslo, kat_uzytkownikow, aktywny) VALUES('$imie', '$nazwisko', '$email', SHA1('$haslo'), '0', '$aktywny'";
    mysql_query($sql, $db_dodaj) or die(mysql_error());
    
    echo '</div>';
    
    }
    else{    
 
    echo ' <a href="pages/login.php">Nie dodano bo: <br/>' . $mojerror . '</a>';
   
}
}
 
include('foot.php');
?>