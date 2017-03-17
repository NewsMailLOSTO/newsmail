<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
    include ('../db.php');
    
    echo('<div class="col-lg-8 col-md-8">');
	
    if (isset($_POST['btn-upload'])) {
	$kateg = htmlspecialchars($_POST['kateg']);
    if (empty($kateg)) {
	$mojerror = 'Nie wpisałeś kategorii <br/>';
    }
    
    if (empty($mojerror)) {
	mysql_select_db($db_database, $db_dodaj);
	
	$kateg_id = $_GET['id'];
	
	$sql = "UPDATE kat_newsow SET `nazwa_kategorii` = '".$kateg."' WHERE `id_kat_newsow` = " . $kateg_id;
	if (mysql_query($sql, $db)) {
	   	    echo '<div class="notif-success">Dodano</div>';

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