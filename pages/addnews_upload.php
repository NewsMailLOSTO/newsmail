<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
    include ('../db.php');
    
    echo('<div class="col-lg-8 col-md-8">');
	
    if (isset($_POST['btn-upload'])) {
	$redaktor = htmlspecialchars($_POST['redaktor']);
    if (empty($redaktor)) {
	$mojerror = 'Nie wpisałeś redaktora <br/>';
    }

    $tytul = htmlspecialchars($_POST['tytul']);
    if (empty($tytul)) {
	$mojerror = $mojerror . 'Nie wpisałeś nazwiska <br/>';
    }

    $wstep = htmlspecialchars($_POST['wstep']);
    if (empty($wstep)) {
	$mojerror = $mojerror . 'Nie wpisałeś wstępu <br/>';
    }

    $tresc = htmlspecialchars($_POST['tresc']);
    if (empty($tresc)) {
	$mojerror = $mojerror . 'Nie wpisałeś treści <br/>';
    }

    $kategoria = ($_POST['kategoria']);
    if (empty($kategoria)) {
	$mojerror = $mojerror . 'Nie wybrałeś kategorii<br/>';
    }    
	
		
    echo('<div class=notif-info> Hmm: ' . $db_hostname . '</div>');
	
    if (empty($mojerror)) {
	mysql_select_db($db_database, $db_dodaj);
	$sql = "INSERT INTO news VALUES ('','', '$redaktor', '$tytul', '$wstep','$tresc', '$id_kat_newsow', '')";
	if (mysql_query($sql, $db_dodaj)) {
	   	    echo '<div class="notif-success">Dodano</div>';

	} else {
		
	    echo '<div class="notif-error">Nie poszło: ';
		echo mysql_error();
		echo '</div>';
	}

	echo '</div>';
    } else {

	echo ' <a href="pages/login.php">Nie dodano bo: <br/>' . $mojerror . '</a>';
    }
}


include ('../foot.php');
?>