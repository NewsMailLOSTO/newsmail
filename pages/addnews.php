<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
   
?>


<div class="col-lg-8 col-md-8">
	<form action="addnews_upload.php" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz()">
	Ugh
		<table class="kupa" border=1px>
		<tr><td>Redaktor:</td><td> <input type='text' name='redaktor' id='redaktor' placeholder='Redaktor' maxlength="32"/> </td></tr>
		<tr><td>Tytuł:</td><td> <input type='text' name='tytul' id='tytul' placeholder='Tytuł' maxlength="64"/></td></tr>

		<tr><td>Kategoria:</td><td>
			<select name="kategoria" id="kategoria">
				<option value=""></option>
				<option value="sport">Sport</option>
				<option value="polska">Polska</option>
				<option value="swiat">Świat</option>
				<option value="kosmos">Kosmos</option>
			</select>
		</tr></td>

		<tr><td>Wstęp:</td><td> <input type='text' name='wstep' id='wstep' placeholder='Wstęp' maxlength="64"/></td></tr>
	<!--	<tr><td>Treść:</td><td> <input type='text' name='tresc' id='tresc' placeholder='Treść' maxlength="64"/></td></tr>   -->
		<tr><td>Treść:</td><td> <textarea name='tresc' id='tresc' placeholder='Treść' maxlength="64"/></textarea></td></tr>

		</table>

		<br />
		<br />
		<center><div id="rej-button">
		<button type='submit' name='btn-upload'>Rejestruj</button>
		<div/></center>
	</form>
</div>
 <script type="text/javascript" src="<?php echo $krowa;?>js/formy.js"></script>
 
 <?php
    include('../foot.php');
    

?>