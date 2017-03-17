<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
   
?>



<div class="col-lg-8 col-md-8">
      <?php if ($_SESSION['kat_uzytkownikow'] == 1 || $_SESSION['kat_uzytkownikow'] == 2){ //To jest początek ifa?>
    

	<form action="addkateg_upload.php" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz()">
		<table class="kupa">
		<tr><td class="tablab">Kategoria:</td><td> <input type='text' name='kateg' id='kateg' placeholder='Kategoria' maxlength="32"/> </td></tr>
		</table>
		<center><div id="rej-button">
		<button type='submit' name='btn-upload'>Dodaj</button>
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