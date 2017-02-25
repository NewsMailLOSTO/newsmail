<?php
    include ('db.php');

    $newsy = array();
	$kategorie = array();
	
    
    $maxRows_Recordset1 = 1000;
    $pageNum_Recordset1 = 0;
    if (isset($_GET['pageNum_Recordset1'])) {
	$pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
    }
    $startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

    mysql_select_db($db_database, $db) or die(mysql_error($db));
    $query_Recordset1 = "SELECT * FROM news ORDER BY data DESC";
    $query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
    $Recordset1 = mysql_query($query_limit_Recordset1, $db);
    if ($Recordset1) {
	$row_Recordset1 = mysql_fetch_assoc($Recordset1);
	if (isset($_GET['totalRows_Recordset1'])) {
	    $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
	} else {
	    $all_Recordset1 = mysql_query($query_Recordset1);
	    if (!$all_Recordset1) {
		//echo '<div class="notif-warning">Hmm: ';
		//echo mysql_error();
		//echo '</div>';
	    } else
		$totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
	}
	$totalPages_Recordset1 = ceil($totalRows_Recordset1 / $maxRows_Recordset1) - 1;
    }
    else {

	echo ('<p>Invalid query: ' . mysql_error($db) . ' Querry: ' . $query_Recordset1 . '</p>');
    }
	do {
	    $newsy_kolumny = array();
	    if ($row_Recordset1['id_news'] >= $totalRows_Recordset1) {
		$newsy_kolumny[0] = $row_Recordset1['id_news'];
		$newsy_kolumny[1] = $row_Recordset1['data'];
		$newsy_kolumny[2] = $row_Recordset1['redaktor'];
		$newsy_kolumny[3] = $row_Recordset1['tytul'];
		$newsy_kolumny[4] = $row_Recordset1['wstep'];
		$newsy_kolumny[5] = $row_Recordset1['tresc'];
		$newsy_kolumny[6] = $row_Recordset1['id_kat_newsow'];
		$newsy_kolumny[7] = $row_Recordset1['id_ocena'];
		$newsy_kolumny[8] = $row_Recordset1['wyswietlenia'];
		$newsy_kolumny[9] = $row_Recordset1['ostatnio_czytane'];
		$newsy[] = $newsy_kolumny;
	    }
	} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
	
	echo $newsy[1][2];
	
	
	//--------------------------------------------------------------------------
	
	
	
    $query_Recordset1 = "SELECT * FROM `kat_newsow` WHERE 1";
    $query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
    $Recordset1 = mysql_query($query_limit_Recordset1, $db);
    if ($Recordset1) {
	$row_Recordset1 = mysql_fetch_assoc($Recordset1);
	if (isset($_GET['totalRows_Recordset1'])) {
	    $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
	} else {
	    $all_Recordset1 = mysql_query($query_Recordset1);
	    if (!$all_Recordset1) {
		//echo '<div class="notif-warning">Hmm: ';
		//echo mysql_error();
		//echo '</div>';
	    } else
		$totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
	}
	$totalPages_Recordset1 = ceil($totalRows_Recordset1 / $maxRows_Recordset1) - 1;
    }
    else {

	echo ('<p>Invalid query: ' . mysql_error($db) . ' Querry: ' . $query_Recordset1 . '</p>');
    }
	do {
	    $kategorie_kolumny = array();
	    if ($row_Recordset1['id_news'] >= $totalRows_Recordset1) {
			$kategorie_kolumny[0] = $row_Recordset1['id_kat_newsow'];
			$kategorie_kolumny[1] = $row_Recordset1['nazwa_kategorii'];
			$kategorie[] = $kategorie_kolumny;
	    }
	} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
	
	
	    $newsy_wyswietlenia = $newsy;
	    usort($newsy_wyswietlenia, 'sortByViews');
	    function sortByViews($a, $b){
		return $b[8] - $a[8];
	    }
	    
	    $newsy_czytane = $newsy;
	    usort($newsy_czytane, 'sortByLastRead');
	    function sortByLastRead($a, $b){
		return $b[9] - $a[9];
	    }
	
	 
?>