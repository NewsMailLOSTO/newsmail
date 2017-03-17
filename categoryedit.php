
<?php
include ('head.php');
include ('top.php');
include ('db.php');
include ('userlewy.php');
mysql_select_db($db_database, $db);
$imie=$_SESSION['imie'];
$name=mysql_query("SELECT id_user FROM user WHERE imie='" . $imie ."'",$db);
$prawieid=mysql_fetch_assoc($name);
$id=$prawieid['id_user'];

?>
<form method="post" action="">
<div class="col-lg-8 col-md-8">

<?php
    

 $query = 'SELECT * FROM user_kat_newsow WHERE id_user='.$id;
 $res = mysql_query($query,$db);


$zaznaczone = array(); // tabela która trzyma id kategorii które są zaznaczone
while($row = mysql_fetch_assoc($res)){
    $zaznaczone[] = $row['id_kat_newsow']; //jeśli nie będzie to zgodnie z zapytaniem nic się nie pojawi i tak

} 

//tworzenie formularza przesunięte na dół, bo najpierw muimy sprawdzić czy jest zaznaczony 
$checkbox = array();
for($i = 0; $i < count($kategorie); $i++){
    $dozaznaczenia[$i] = "";
   for($j = 0; $j < count($zaznaczone); $j++){
       if($zaznaczone[$j] == $kategorie[$i][0]){   //jako, że zaznaczone trzyma id kategorii a nie id tabeli to musimy sprawdzić wszystko
	$dozaznaczenia[$i] = "checked";
       } 
   }
   
   echo '<h4 class="media-heading"><input type="checkbox" name="checkbox'.$i.'" id="checkbox" '.$dozaznaczenia[$i].' value="1">' . $kategorie[$i][1] . '</h4></br>';
   $checkbox[] = $_POST['checkbox'.$i];
}


   // Po pobraniu id_kat_newsow sprawdzam 
   if($row!=NULL){
        //checkbox.$row enable; 
   }
   
 
   // Jeśli checkbox.$row jest zaznaczony to dodaj w rekord w bazie 
   // else usuń rekord 
   // i teraz nie wiem czy ma być jakiś przycisk czy nie, zobaczy się jak działąją te checkboxy 
   // alles
   // teraz zrob wysylanie maili, zainkluduj zapewne gdzieś w dodawaniu funkcję, która będzie wysyłać na podane emaile powiadomienia o nowym newse z linkiem do niego
   ?>
    <form action="" method="post" name="form2" id="form2">
     <tr><td></td><td class="tablab"><input action type="submit" name="zmiana" value="Zmiana" /></td></tr>
    </form>
    <?php
	mysql_select_db($db_database, $db_dodaj);
	$sql=mysql_query("DELETE * FROM `user_kat_newsow` WHERE id_user = ".$id."");
	
	if(isset($_POST['zmiana'])){
	    //echo '<div class="notif-success"> count:kliknięte </div>';
	    for($i=0;$i<count($kategorie);$i++){
		if( isset($checkbox[$i])){
		    if($dozaznaczenia[$i] == "" ){
			//echo '<div class="notif-info">'. $kategorie[$i][1] . '--' . $checkbox[$i] . '</div>';
			$sql=mysql_query("INSERT INTO `user_kat_newsow` VALUES('','".$id."','".$kategorie[$i][0]."')");		    
		    }
		}
		else{
		     //echo '<div class="notif-info">'. $kategorie[$i][1] . '--' . $checkbox[$i] . '</div>';
		    $sql=mysql_query("DELETE FROM `user_kat_newsow` WHERE id_kat_newsow=".$kategorie[$i][0] ." AND id_user = ".$id."");
		}
	    }
	    echo '<META HTTP-EQUIV="Refresh" Content="0; URL="' . $krowa. 'categoryedit.php">';
	}
	    
	?>
</div>
    <?php  
   
include ('foot.php');
?>

