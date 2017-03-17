<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
  
    
    
    $news_id = $_GET['id'];

    mysql_select_db($db_database, $db) or die(mysql_error($db)); 
    //$query = mysql_query("SELECT * FROM `news` WHERE `id_news`= " . $news_id, $db);
    $query = mysql_query("SELECT news.* , kat_newsow.* "
	    . "FROM `news` "
	    . "LEFT JOIN `kat_newsow` ON news.id_kat_newsow = kat_newsow.id_kat_newsow "
	    . "WHERE `id_news`= " . $news_id . " "
	    . "ORDER BY data DESC", $db);
    if ($query) {
	$row = mysql_fetch_assoc($query);
    } else {
	echo '<div class="notif-warning">' . mysql_error() . '</div>';
    }    
    //$query = mysql_query("UPDATE news SET wyswietlenia = wyswietlenia + 1, ostatnio_czytane = '" . time() . "' WHERE id_news = " . $news_id, $db);
    
    
?>


<div class="col-lg-8 col-md-8">
   
    <?php if ($_SESSION['kat_uzytkownikow'] == 1 || $_SESSION['kat_uzytkownikow'] == 2){ //To jest początek ifa?>
    
	<form action="editnews_upload.php?id=<?php echo $news_id; ?>" enctype="multipart/form-data" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz()" oninput="return sprawdz_formularz()">
		<table class="kupa">
		    <tr><td class="tablab">Redaktor:</td><td> <?php echo $_SESSION['imie']; ?> </td> <td rowspan="6" id="message"></td> </tr>
		   
		    <tr><td class="tablab">Data:</td><td> <input type='datetime-local' name='data' id='data' placeholder='Data' value="<?php echo date("Y-m-d\TH:i:s", strtotime($row['data'])); ?>"/></td></tr>
		    <tr><td class="tablab">Tytuł:</td><td> <input type='text' name='tytul' id='tytul' placeholder='Tytuł' maxlength="128" value="<?php echo $row['tytul']; ?>"/></td></tr>

		<tr><td class="tablab">Kategoria:</td><td>
			<select name="kategoria" id="kategoria" >
				<option value="" disable="disabled">Wybierz kategorię</option>
				<?php
				    for($i = 0; $i < count($kategorie); $i++){
							echo '<option value="' . $kategorie[$i][0] . '" ';
							if($row['id_kat_newsow'] == $kategorie[$i][0]){
							    echo 'selected';
							}
							
							echo '>';
							echo $kategorie[$i][1];	
							echo '</option>';
						}
				?>
			</select>
		</tr></td>	
		<input type="hidden" name="MAX_FILE_SIZE" value="5000000"
		<tr><td class="tablab">Obrazek:</td><td> <input type='file' name='obrazek' id='obrazek' placeholder='Obrazek'/></td></tr>
		    
		<tr><td class="tablab">Wstęp:</td><td> <input type='text' name='wstep' id='wstep' placeholder='Wstęp' maxlength="128" value="<?php echo $row['wstep']; ?>"/></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td class="tablab">Treść:</td><td colspan="4"> <textarea name='tresc' id='tresc' placeholder='Treść'/><?php echo $row['tresc']; ?></textarea></td></tr>
		
		<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'tresc', {
		    //extraPlugins: 'imageuploader'
		    //filebrowserBrowseUrl: '<?php echo $krowa;?>ckeditor/plugins/imageuploader/imgbrowser.php',
		    //filebrowserUploadUrl: '<?php echo $krowa;?>ckeditor/plugins/imageuploader/imgbrowser.php'
		    
		});
		
		CKEDITOR.instanced.tresc.updateElement();
		</script>
		
		</table>
 
		<br />
		<br />
		<center><div id="rej-button">
		<button type='submit' name='btn-upload'>Zaktualizuj</button>
		<div/></center>
	</form>
    <?php 
	} //tutaj jest koniec, prawie mi z tym źle
	else{
	    echo '<div class="notif-error">Nie jesteś redaktorem.</div>';
	}
    
    ?>
</div>
 <script type="text/javascript" src="<?php echo $krowa;?>js/formy_news.js"></script>
 
 <?php
    include('../foot.php');
    

?>