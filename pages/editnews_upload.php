<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
    include ('../db.php');
    
    echo('<div class="col-lg-8 col-md-8">');
	
    if (isset($_POST['btn-upload'])) {
	//$redaktor = htmlspecialchars($_POST['redaktor']);
	$redaktor = $_SESSION["id_user"];
    if (empty($redaktor)) {
	$mojerror = 'Nie wpisałeś redaktora <br/>';
    }

    $data = htmlspecialchars($_POST['data']);
    if (empty($data)) {
	$mojerror = $mojerror . 'Nie wpisałeś daty <br/>';
    }
    
    $tytul = htmlspecialchars($_POST['tytul']);
    if (empty($tytul)) {
	$mojerror = $mojerror . 'Nie wpisałeś nazwiska <br/>';
    }

    $wstep = htmlspecialchars($_POST['wstep']);
    if (empty($wstep)) {
	$mojerror = $mojerror . 'Nie wpisałeś wstępu <br/>';
    }

    $tresc = ($_POST['tresc']);
    if (empty($tresc)) {
	$mojerror = $mojerror . 'Nie wpisałeś treści <br/>';
    }

    $kategoria = ($_POST['kategoria']);
    if (empty($kategoria)) {
	$mojerror = $mojerror . 'Nie wybrałeś kategorii<br/>';
    }      
    
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . 'newsmail/images/news/';
    $target_file = $target_dir . basename($_FILES['obrazek']['name']);
    
    if($_FILES['obrazek']['size'] == 0){
	$sqlobrazek = "";
    }
    else{
	if(move_uploaded_file($_FILES['obrazek']['tmp_name'],$target_file)){
	    $sqlobrazek = ", `obrazek` = '".$target_file ."'";
	}
	else{
	    $mojerror = $mojerror . 'Błąd obrazka<br/>';
    }
    
    }
	
    if (empty($mojerror)) {
	mysql_select_db($db_database, $db_dodaj);
	
	$news_id = $_GET['id'];
	
	$sql = "UPDATE news SET `data` = '".$data."', `tytul` = '".$tytul."', `wstep` = '".$wstep."', `tresc` = '".$tresc."', `id_kat_newsow` = '".$kategoria."' " . $sqlobrazek ." WHERE `id_news` = " . $news_id;
	if (mysql_query($sql, $db)) {
	   	    echo '<div class="notif-success">Zaktualizowano</div>';

	} else {
	    echo('<div class=notif-info> Hmm: ' . $sql . '<br>|||||' . $kategoria . '</div>');
	    echo('<div class=notif-info> Hmm2: ' . $news_id . '</div>');
	    echo '<div class="notif-error">Nie poszło: ';
		echo mysql_error();
		echo '</div>';
	}

	echo '</div>';
    } else {

	
	echo '<div class="notif-error">';
		echo ' <a href="' . $krowa . 'pages/addnews.php">Nie dodano bo: <br/>' . $mojerror . '</a>';
		echo '</div>';
    }
}


include ('../foot.php');
?>