<?php
    include ('head.php');
    include ('top.php');
    include ('db.php');


    $kat_id = $_GET['id'];
    
    $maxRows_Recordset1 = 1000;
    $pageNum_Recordset1 = 0;
    if (isset($_GET['pageNum_Recordset1'])) {
	$pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
    }
    $startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

    mysql_select_db($db_database, $db) or die(mysql_error($db));
    $query_Recordset1 = "SELECT news.* , kat_newsow.* "
	    . "FROM `kat_newsow` "
	    . "LEFT JOIN `news` ON news.id_kat_newsow = kat_newsow.id_kat_newsow "
	    . "WHERE kat_newsow.id_kat_newsow = " . $kat_id. " "
	    . "ORDER BY data DESC";
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
    
    echo '<div class="col-lg-8 col-md-8">
    <div class="content_bottom_left">
    <ul>';
    
	do {
	    
	    if ($row_Recordset1['id_kat_newsow'] >= $totalRows_Recordset1) {
				
		 echo '<li>';
		   echo '<div class="catgimg2_container"> <a href="artykul.php?id=' . $row_Recordset1['id_news'] . '"><img alt="" src="images/390x240x1.jpg"></a> </div>';
		   echo '<h2 class="catg_titile"><a href="artykul.php?id=' . $row_Recordset1['id_news'] . '">' . $row_Recordset1['tytul'] . '</a></h2>';
		   echo '<div class="comments_box"> <span class="meta_date">' . $row_Recordset1['data'] . '</span> <span class="meta_comment"><a href="#">' . $row_Recordset1['nazwa_kategorii'] . '</a></span>';
		   echo '<p>' . $row_Recordset1['wstep'] . '</p>';
		   echo '</div>';

		echo '</li>';
		
	    }
	} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
	
	echo '</ul>';
	echo '</div>';
	echo '</div>';
	
	 include ('prawy.php');
	?>
