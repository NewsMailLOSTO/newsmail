
<?php
include ('head.php');
include ('top.php');
include ('db.php');
include ('userlewy.php');
?>

<div class="col-lg-8 col-md-8">

	<?php
	    
	    mysql_select_db($db_database, $db);
$imie=$_SESSION['imie'];
$name=mysql_query("SELECT id_user FROM user WHERE imie='" . $imie ."'",$db);
$prawieid=mysql_fetch_assoc($name);
$id=$prawieid['id_user'];
	    
	    $checkbox= $_SESSION['checkbox']; 
	    $dozaznaczenia=$_SESSION['dozaznaczenia'];
	    
	    print_r( $_SESSION['checkbox'] );
	    
	mysql_select_db($db_database, $db_dodaj);
	//$sql=mysql_query("DELETE * FROM `user_kat_newsow` WHERE id_user = ".$id."");
	
	if(isset($_POST['zmiana'])){
	    echo '<div class="notif-success"> count:kliknięte checkbox:'.$checkbox[0].' </div>';
	    for($i=0;$i<count($kategorie);$i++){
		 echo '<div class="notif-success"> count:kliknięte checkbox:'.$i. ' k =' .$checkbox[$i].' </div>';
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
	}
	    
	?>
    
    <div class="notif-info">Uaktualniono preferencje kategorii</div>
    
</div>
    <?php  
   
include ('foot.php');
?>

