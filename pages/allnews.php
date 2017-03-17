<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
    include ('../db.php');
   
?>


<div class="col-lg-8 col-md-8">
	
	<?php
	
		$maxRows_Recordset1 = 1000;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
	$pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($db_database, $db) or die(mysql_error($db));
$query_Recordset1 = "SELECT news.* , kat_newsow.*, user.id_user, user.imie "
	    . "FROM `news` "
	    . "LEFT JOIN `kat_newsow` ON news.id_kat_newsow = kat_newsow.id_kat_newsow "
	    . "LEFT JOIN `user` ON news.redaktor = user.id_user "
	    //. "WHERE kat_newsow.id_kat_newsow = " . $kat_id. " "
	    . "ORDER BY data DESC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $db);
if($Recordset1){
	$row_Recordset1 = mysql_fetch_assoc($Recordset1);
	if (isset($_GET['totalRows_Recordset1'])) {
		$totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
	} else {
		$all_Recordset1 = mysql_query($query_Recordset1);
		if(!$all_Recordset1) {
			//echo '<div class="notif-warning">Hmm: ';
			//echo mysql_error();
			//echo '</div>';
		} 
		else
		$totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
	}
	$totalPages_Recordset1 = ceil($totalRows_Recordset1 / $maxRows_Recordset1) - 1;
}
else{
	
	echo ('<p>Invalid query: ' . mysql_error($db) . ' Querry: ' . $query_Recordset1 . '</p>');
}
?> 
    <table>
        <?php do { 
                 
                 if ($row_Recordset1['id_news']>=$totalRows_Recordset1){
                     echo '<tr>';
                        echo '<td align="left"><b>'.$row_Recordset1['id_news'].' </b></td><td> '
				//. 'Dodany: </td><td>'
				.$row_Recordset1['data'].' </td><td>'
				.$row_Recordset1['imie'].' </td><td> '
				.$row_Recordset1['tytul'].' </td><td>'
				//.$row_Recordset1['wstep'].' </td><td>'
				//.substr($row_Recordset1['tresc'],0,150).' </td><td>'
				.$row_Recordset1['nazwa_kategorii'].' </td>'
				.'<td> <a href="' . $krowa . 'pages/deletenews.php?id='.$row_Recordset1['id_news'].'">Usuń</a> </td>'
				.'<td> <a href="' . $krowa . 'pages/editnews.php?id='.$row_Recordset1['id_news'].'">Edytuj</a> </td>';
                       echo '</tr>';
                    } 
                 
        } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); 
		?>
    </table>  
	
	
	
	
	
	
</div>
 <script type="text/javascript" src="<?php echo $krowa;?>js/formy.js"></script>
 
 <?php
    include('../foot.php');
    

?>