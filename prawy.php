      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
	    
			<!-- Kategorie newsów-->          
			<div class="single_bottom_rightbar">
				<h2>Kategorie newsów</h2>
				<ul class="small_catg popular_catg wow fadeInDown">
					<?php
						for($i = 0; $i < count($kategorie); $i++){
							echo '<li>';
							echo '<h4 class="media-heading"><a href="?id=' . $kategorie[$i][0] . '">' . $kategorie[$i][1] . '</a></h4>';	
							echo '</li>';
						}
					?>
				</ul>
			</div>
	    
	  <!-- Karty -->          
          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Popularne</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Ostatnio czytane</a></li>
            </ul>
            <div class="tab-content">
		
		
		<!-- Popularne -->
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_wyswietlenia[0][0]; ?>"><?php echo $newsy_wyswietlenia[0][3]; ?></a></h4>
                        <p><?php echo $newsy_wyswietlenia[0][4]; ?></p>
                      </div>
                    </div>
                  </li>
		  
		  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_wyswietlenia[1][0]; ?>"><?php echo $newsy_wyswietlenia[1][3]; ?></a></h4>
                        <p><?php echo $newsy_wyswietlenia[1][4]; ?></p>
                      </div>
                    </div>
                  </li>
		  
		  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_wyswietlenia[2][0]; ?>"><?php echo $newsy_wyswietlenia[2][3]; ?></a></h4>
                        <p><?php echo $newsy_wyswietlenia[2][4]; ?></p>
                      </div>
                    </div>
                  </li>
		  
		  
                </ul>
              </div>
		
		
		<!-- Ostatnio czytane -->
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                  
		<li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_czytane[0][0]; ?>"><?php echo $newsy_czytane[0][3]; ?></a></h4>
                        <p><?php echo $newsy_czytane[0][4]; ?></p>
                      </div>
                    </div>
                  </li>
		  
		  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_czytane[1][0]; ?>"><?php echo $newsy_czytane[1][3]; ?></a></h4>
                        <p><?php echo $newsy_czytane[1][4]; ?></p>
                      </div>
                    </div>
                  </li>
		  
		  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_czytane[2][0]; ?>"><?php echo $newsy_czytane[2][3]; ?></a></h4>
                        <p><?php echo $newsy_czytane[2][4]; ?></p>
                      </div>
                    </div>
                  </li>    
		    
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    