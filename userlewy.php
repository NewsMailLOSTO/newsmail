      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
	    
	    <!-- Kategorie newsów-->          
	    <div class="single_bottom_rightbar">
		<h2>Nawigacja</h2>
		<ul class="small_catg popular_catg wow fadeInDown">
		    <?php 
			if ($_SESSION['kat_uzytkownikow'] == 1 || $_SESSION['kat_uzytkownikow'] == 2 || $_SESSION['kat_uzytkownikow'] == 3){
			    //echo '<div class="notif-info"> Jesteś ' . $_SESSION['kat_uzytkownikow'] . '</div>';
			    echo '<li><h4 class="media-heading"><a href="passedit.php">Zmień hasło </a></h4></li>';
                            echo '<li><h4 class="media-heading"><a href="categoryedit.php">Zmień kategorie </a></h4></li>';
                            
			    
			} 
			else{
			    //echo '<div class="notif-error"> Nie jesteś redaktorem </br> Jesteś ' . $_SESSION['kat_uzytkownikow'] . '</div>';
			}
			
		    ?>
		   
		</ul>
	    </div>
	    
	
        </div>
      </div>
    