<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
   
?>


<div class="col-lg-8 col-md-8">
	<form action="addkateg_upload.php" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz()">
		<table class="kupa">
		<tr><td class="tablab">Kategoria:</td><td> <input type='text' name='kateg' id='kateg' placeholder='Kategoria' maxlength="32"/> </td></tr>
		</table>
		<center><div id="rej-button">
		<button type='submit' name='btn-upload'>Dodaj</button>
		<div/></center>
	</form>
</div>
 <script type="text/javascript" src="<?php echo $krowa;?>js/formy.js"></script>
 
 <?php
    include('../foot.php');
    

?>