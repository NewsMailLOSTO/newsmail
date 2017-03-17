<?php
    include ('head.php');
    include ('top.php');
    include ('db.php');


    $news_id = $_GET['id'];

    mysql_select_db($db_database, $db) or die(mysql_error($db)); 
    //$query = mysql_query("SELECT * FROM `news` WHERE `id_news`= " . $news_id, $db);
    
			    
    $query = mysql_query("SELECT ROUND(AVG(ocena),1) as rating FROM ocena WHERE id_news=" . $news_id, $db);
    if ($query) {
	$row = mysql_fetch_assoc($query);
	$ocena = $row['rating'];
	if($ocena == NULL){
			$ocena = "Brak ocen";
	}
	
    }else {
	echo '<div class="notif-warning">' . mysql_error() . '</div>';
    }   
    if ($_SESSION['signed_in'] == true){ 
		    
	$query = mysql_query("SELECT user.id_user, ocena.* FROM `user` LEFT JOIN `ocena` ON ocena.id_user = user.id_user WHERE user.id_user = " . $_SESSION['id_user'] . ' AND ocena.id_news = ' . $news_id , $db);
	$row = mysql_fetch_assoc($query);
	if ($query) {
	    if($row == NULL){
			    //echo '<div class="notif-info">Brak ocen</div>"';
	    }
	    else{
	    $ocenione = true;
	}
	} else {
	    echo '<div class="notif-warning">' . mysql_error() . '</div>';
	}   
    }

    $query = mysql_query("SELECT news.* , kat_newsow.*, user.id_user, user.imie  "
	    . "FROM `news` "
	    . "LEFT JOIN `kat_newsow` ON news.id_kat_newsow = kat_newsow.id_kat_newsow "
	    . "LEFT JOIN `user` ON news.redaktor = user.id_user "
	    . "WHERE `id_news`= " . $news_id . " "
	    . "ORDER BY data DESC", $db);
    if ($query) {
	$row = mysql_fetch_assoc($query);
    } else {
	echo '<div class="notif-warning">' . mysql_error() . '</div>';
    }    
    
    $query = mysql_query("UPDATE news SET wyswietlenia = wyswietlenia + 1, ostatnio_czytane = '" . time() . "' WHERE id_news = " . $news_id, $db);
    if ($query) {
    } else {
	echo '<div c'
	. 'lass="notif-warning">' . mysql_error() . '</div>';
    }    
    
    //echo '<div class="notif-info">' .time() . '</div>';
?>
<div class="col-lg-8 col-md-8">
    <div class="content_bottom_left">
	<!-- Ostatnio dodane -->        
	<div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#"><?php echo $row['tytul']; ?></a> </h2>
            
		<ul class="fashion_catgnav">
		    <li>
			<div class="catgimg2_container"> <a href="artykul.php?id=<?php echo $news_id ?>"><img alt="" src="<?php echo $row['obrazek'] ?>"></a> </div>
			<div class="comments_box"> 
			    <span class="meta_date"><?php echo $row['data']; ?></span>
			    <span class="meta_comment"><a href="#"><?php echo $row['nazwa_kategorii']; ?></a></span>
			    <span class="meta_more"><?php echo $row['imie'];  ?></span>   
			    <span class="meta_views"><?php echo $row['wyswietlenia'];  ?></span> 
			    <span class="meta_rating"><?php echo $ocena;  ?></span> 
			    
			    
			    
			    <h4><?php echo $row['wstep']; ?></h4>
			    <p><?php echo $row['tresc']; ?></p>
			</div>
			

		    </li>
		</ul>
            <h2> 
		<span class="bold_line">
		    <span></span>				    
		</span> 
		<span class="solid_line"></span>
		<a class="title_text" href="#">Podobał się artykuł? Oceń go!</a> 
	    </h2>
	    
	    <?php 
		if ($_SESSION['signed_in'] == true){ //to jest jakiś sposób
		    if($ocenione){
			echo '<div class="notif-info">Już oceniłeś ten artykuł</div>'; 
		    }
		    else{
	    ?>
	    
	    <form action="" method="post" name="form1" id="form1">
		<table class="kupa">
		<tr><td class="tablab">Kategoria:</td><td>
			<select name="ocena" id="ocena">
				<option value="" disable="disabled">Wybierz ocenę</option>
				<option value="1">1</option> 
				<option value="2">2</option> 
				<option value="3">3</option> 
				<option value="4">4</option> 
				<option value="5">5</option> 
			</select>
		    </td></tr>
		</table>
		
		<center><div id="rej-rate">
		<button type='submit' name='btn-rate'>Oceń</button>
		<div/></center>
	    </form>
	    <?php
		    
		
	    
		if (isset($_POST['ocena'])) {
		    if (empty($_POST['ocena'])) {
			echo '<div class="notif-error">Nie wybrałeś oceny</div>';
		    }
		    else{
			$rating = htmlspecialchars($_POST['ocena']);

			$sql="INSERT INTO `ocena` VALUES(''," . $rating . ", '".$row['id_news']."','".$_SESSION['id_user']."','".time()."')";

			mysql_select_db($db_database, $db_dodaj);	
			if(isset($_POST['btn-rate'])){

			    $result = mysql_query($sql, $db_dodaj);


			    if($result){

				echo '<div class="notif-success">Oceniono!</div>';
			    }
			    else{

				echo '<div class="notif-error">Nie oceniono</div>';
				echo '<div class="notif-warning">' . mysql_error() . '</div>';
			    }
			}
		    }
		}
	    }		
	   
		} //koniec signed_in
	else{
	    echo '<center><h3><a href="' . $krowa . 'login.php">Zaloguj się aby ocenić</a></h3></center>';
	    
	}
	    ?>
	</div>


    </div>
</div>

<?php
    include ('prawy.php');
    include('foot.php');
?>