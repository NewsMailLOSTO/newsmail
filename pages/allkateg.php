<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
    include ('../db.php');
   
?>


<div class="col-lg-8 col-md-8">
	
    <?php
	echo '<table>';
	for ($i = 0; $i < count($kategorie); $i++) {
	    echo '<tr>';
	    echo '<td><h4 class="media-heading"><a href="' . $krowa . 'kategoria.php?id=' . $kategorie[$i][0] . '">' . $kategorie[$i][1] . '</a></h4></td>';
	    echo '<td> <a href="' . $krowa . 'pages/deletekateg.php?id=' . $kategorie[$i][0] . '">Usuń</a> </td>';
	    echo '<td> <a href="' . $krowa . 'pages/editkateg.php?id=' . $kategorie[$i][0] . '">Edytuj</a> </td>';
	    echo '</tr>';
	}
	echo '</table>';
    ?>

	
	
	
	
	
</div>
 <script type="text/javascript" src="<?php echo $krowa;?>js/formy.js"></script>
 
 <?php
    include('../foot.php');
    

?>