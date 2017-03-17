<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
  
    
    
    $kateg_id = $_GET['id'];

    mysql_select_db($db_database, $db) or die(mysql_error($db)); 
    $query = mysql_query("SELECT * FROM `kat_newsow` WHERE `id_kat_newsow`= " . $kateg_id, $db);
    if ($query) {
	$row = mysql_fetch_assoc($query);
    } else {
	echo '<div class="notif-warning">' . mysql_error() . '</div>';
    }    
?>


<div class="col-lg-8 col-md-8">
   
    <?php if ($_SESSION['kat_uzytkownikow'] == 1 || $_SESSION['kat_uzytkownikow'] == 2){ //To jest początek ifa?>
    
	<form action="editkateg_upload.php?id=<?php echo $kateg_id; ?>" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz()" oninput="return sprawdz_formularz()">
		<table class="kupa">
		<tr>
		    <td class="tablab">Nazwa kategorii:</td>
		    <td> <input type='text' name='kateg' id='kateg' placeholder='Kategoria' maxlength="128" value="<?php echo $row['nazwa_kategorii']; ?>"/>
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
	    echo '<div class="notif-error">Nie jesteś redaktorem.</div>';
	}
    
    ?>
</div>
 <script type="text/javascript" src="<?php echo $krowa;?>js/formy_kateg.js"></script>
 
 <?php
    include('../foot.php');
    

?>