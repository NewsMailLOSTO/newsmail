<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
    include ('../db.php');
    
    echo('<div class="col-lg-8 col-md-8">');
	
    if (isset($_POST['btn-upload'])) {
	$ranga = htmlspecialchars($_POST['ranga']);
    if (empty($ranga)) {
	$mojerror = 'Nie wybrałeś kategorii użytkownika <br/>';
    }
    
    if (empty($mojerror)) {
	mysql_select_db($db_database, $db_dodaj);
	
	$user_id = $_GET['id'];
	
	$sql = "UPDATE user SET `kat_uzytkownikow` = '".$ranga."' WHERE `id_user` = " . $user_id;
	if (mysql_query($sql, $db)) {
	   	    echo '<div class="notif-success">Zmieniono</div>';

	} else {
	    echo('<div class=notif-info> Hmm: ' . $sql . '<br>|||||' . $ranga . '</div>');
	    echo('<div class=notif-info> Hmm2: ' . $user_id . '</div>');
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