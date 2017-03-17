      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
	    
	    <!-- Kategorie newsów-->          
	    <div class="single_bottom_rightbar">
		<h2>Nawigacja</h2>
		<ul class="small_catg popular_catg wow fadeInDown">
		    <?php 
			if ($_SESSION['kat_uzytkownikow'] == 1 || $_SESSION['kat_uzytkownikow'] == 2){
			    //echo '<div class="notif-info"> Jesteś ' . $_SESSION['kat_uzytkownikow'] . '</div>';
			    echo '<li><h4 class="media-heading"><a href="addnews.php">Dodaj news </a></h4></li>';
			    echo '<li><h4 class="media-heading"><a href="allnews.php">Wszystkie newsy </a></h4></li>';
			    echo '<li><h4 class="media-heading"><a href="addkateg.php">Dodaj kategorię </a></h4></li>';
			    echo '<li><h4 class="media-heading"><a href="allkateg.php">Wszystkie kategorie </a></h4></li>';
			    if ($_SESSION['kat_uzytkownikow'] == 1){
				echo '<li><h4 class="media-heading"><a href="allusers.php">Wszyscy użytkownicy </a></h4></li>';
			    } 
			    
			}			
			else{
			    
			}
			
		    ?>
		    
		    
		</ul>
	    </div>
	    
	  <!-- Karty --> 
	  <!--
          <div class="single_bottom_rightbar"> 
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Popularne</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Ostatnio czytane</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
	  -->
        </div>
      </div>
    