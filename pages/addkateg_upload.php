<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
    include ('../db.php');
    
    echo('<div class="col-lg-8 col-md-8">');
	
    if (isset($_POST['btn-upload'])) {
	$kateg = htmlspecialchars($_POST['kateg']);
    if (empty($kateg)) {
	$mojerror = 'Nie wpisałeś redaktora <br/>';
    }
    if (empty($mojerror)) {
	mysql_select_db($db_database, $db_dodaj);
	$sql = "INSERT INTO kat_newsow VALUES ('','$kateg')";
	if (mysql_query($sql, $db_dodaj)) {
	   	    echo '<div class="notif-success">Dodano kategorię</div>';

	} else {
		echo('<div class=notif-info> Hmm: ' . $sql . '<br>' . $kategoria . '</div>');
	    echo '<div class="notif-error">Nie poszło: ';
		echo mysql_error();
		echo '</div>';
	}

	echo '</div>';
    } else {

	echo ' <a href="' . $krowa . 'pages/addkateg.php">Nie dodano bo: <br/>' . $mojerror . '</a>';
    }
}


include ('../foot.php');
?>