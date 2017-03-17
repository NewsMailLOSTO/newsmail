<?php
    include ('../head.php');
    include ('../top.php');
    include ('adminlewy.php');
    include ('../db.php');
   
?>


<div class="col-lg-8 col-md-8">
    <?php 
	if ($_SESSION['kat_uzytkownikow'] == 1 ){ //To jest początek ifa

	    $id=$_GET['id'];
	    mysql_select_db($db_database, $db_dodaj);
	    $sql="DELETE FROM user WHERE id_user=".$id."";
	    ?>
	    <form action="" method="post" name="form1" id="form1" >
		<h1>Czy na pewno chcesz usunąć tego użytkownika?</h1>
	    <center><div id="rej-button">
		<button type='submit' name='btn-delete'>Usuń</button>
		<div/></center>
	    </form>
	    <?php
		
	    if(isset($_POST['btn-delete'])){

		$result = mysql_query($sql, $db_dodaj);


		if($result){

		    echo '<div class="notif-success"><a href="' . $krowa . 'pages/allusers.php">Usunięto</a></div>';
		}
		else{

		    echo '<div class="notif-error">Nie usunięto</div>';
		}
	    }



	} //tutaj jest koniec, prawie mi z tym źle
	else{
	    echo '<div class="notif-error">Nie jesteś adminem.</div>';
	}
    
    ?>
</div>
 <script type="text/javascript" src="<?php echo $krowa;?>js/formy.js"></script>
 
 <?php
    include('../foot.php');
    

?>