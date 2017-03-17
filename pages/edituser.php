<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
  
    
    
    $user_id = $_GET['id'];

    mysql_select_db($db_database, $db) or die(mysql_error($db)); 
    $query = mysql_query("SELECT * FROM `user` WHERE `id_user`= " . $user_id, $db);
    if ($query) {
	$row = mysql_fetch_assoc($query);
    } else {
	echo '<div class="notif-warning">' . mysql_error() . '</div>';
    }    
?>


<div class="col-lg-8 col-md-8">
   
    <?php if ($_SESSION['kat_uzytkownikow'] == 1){ //To jest początek ifa?>
    
	<form action="edituser_upload.php?id=<?php echo $user_id; ?>" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz()" oninput="return sprawdz_formularz()">
		<table class="kupa">
		<tr>
		    <td class="tablab">Kategoria użytkownika:</td>
		    <td>
		    <select name="ranga" id="ranga" >
				<option value="" disable="disabled">Wybierz kategorię</option>
				<option value="1" >Admin</option>
				<option value="2" >Redaktor</option>
				<option value="3" >Użytkownik</option>
		    </select>
		    </td>
		</tr>
		</table>
 
		<br />
		<br />
		<center><div id="rej-button">
		<button type='submit' name='btn-upload'>Zaktualizuj</button>
		<p id="message"></p>
		<div/></center>
	</form>
    <?php 
	} //tutaj jest koniec, prawie mi z tym źle
	else{
	    echo '<div class="notif-error">Nie jesteś adminem.</div>';
	}
    
    ?>
</div>
 <script type="text/javascript" src="<?php echo $krowa;?>js/formy_kateg.js"></script>
 
 <?php
    include('../foot.php');
    

?>