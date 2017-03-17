
<?php 

include('head.php');
include('top.php');
include('db.php');
if( isset( $_POST['btn-upload'] ) ){
    $imie     = $_POST['imie'];
    $imie = htmlspecialchars($imie);
    if(empty($imie)){ $mojerror='Nie wpisałeś swojego niku <br/>'; }
   
   
    $email    = htmlspecialchars($_POST['email']);
    if(empty($email)){ $mojerror=$mojerror.'Nie wpisałeś emaila <br/>'; }
   
    $haslo    = htmlspecialchars($_POST['haslo']);
    if(empty($haslo)){ $mojerror=$mojerror.'Nie wpisałeś hasła <br/>'; }
   
    $aktywny=0;
   $kategoria=3;
    if(empty($mojerror)){    
    mysql_select_db($db_database, $db_dodaj);
    $data=date('Y-m-d H:i:s');
    $kod=SHA1($email.$data);

    
    
    $sql="INSERT INTO user VALUES ('','$imie', '$email', SHA1('$haslo'), '$kategoria', '$aktywny', '$kod','$data')";
    
    if(mysql_query($sql, $db_dodaj))
    {
      echo '<div id="rej"> "Dodałem" </div>';   
    }else{
    
       echo '<div id=rej2> "Nie poszło" </div>';
    }
    echo '</div>';
    }
    else{    
    echo ' <a href="pages/login.php">Nie dodano bo: <br/>' . $mojerror . '</a>';
}

include('contact.php');
}
include('foot.php');
?>
