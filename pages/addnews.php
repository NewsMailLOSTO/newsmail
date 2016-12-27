<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
   
?>


<div class="col-lg-8 col-md-8">
	<form action="addnews_upload.php" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz()">
		<table class="kupa">
		<tr><td class="tablab">Redaktor:</td><td> <input type='text' name='redaktor' id='redaktor' placeholder='Redaktor' maxlength="32"/> </td></tr>
		<tr><td class="tablab">Tytuł:</td><td> <input type='text' name='tytul' id='tytul' placeholder='Tytuł' maxlength="64"/></td></tr>

		<tr><td class="tablab">Kategoria:</td><td>
			<select name="kategoria" id="kategoria">
				<option value=""></option>
				<option value=1>Sport</option>
				<option value=2>Polska</option>
				<option value=3>Świat</option>
				<option value=4>Kosmos</option>
			</select>
		</tr></td>

		<tr><td class="tablab">Wstęp:</td><td> <input type='text' name='wstep' id='wstep' placeholder='Wstęp' maxlength="64"/></td></tr>
	<!--	<tr><td>Treść:</td><td> <input type='text' name='tresc' id='tresc' placeholder='Treść' maxlength="64"/></td></tr>   -->
		<tr><td class="tablab">Treść:</td><td> <textarea name='tresc' id='tresc' placeholder='Treść' maxlength="64"/></textarea></td></tr>

		</table>

		<br />
		<br />
		<center><div id="rej-button">
		<button type='submit' name='btn-upload'>Dodaj</button>
		<div/></center>
	</form>
</div>
 <script type="text/javascript" src="<?php echo $krowa;?>js/formy.js"></script>
 
 <?php
    include('../foot.php');
    

?>