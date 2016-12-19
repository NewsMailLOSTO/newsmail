<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
    
    
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
    
    
    if (empty($mojerror)) {
	mysql_select_db($db_database, $db_dodaj);
	$sql = "INSERT INTO news VALUES ('','$data', '$redaktor', '$tytul', '$wstep','$tresc', '$id_kat_newsow', '$user_id_user')";
	if (mysql_query($sql, $db_dodaj)) {
	    echo "Dodałem";
	} else {

	    echo "Nie poszło";
	}

	echo '</div>';
    } else {

	echo ' <a href="pages/login.php">Nie dodano bo: <br/>' . $mojerror . '</a>';
    }
}


include ('../foot.php');
?>