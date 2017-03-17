      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
	    
			<!-- Kategorie newsów-->          
			<div class="single_bottom_rightbar">
				<h2>Kategorie newsów</h2>
				<ul class="small_catg popular_catg wow fadeInDown">
					<?php
						for($i = 0; $i < count($kategorie); $i++){
							echo '<li>';
							echo '<h4 class="media-heading"><a href="kategoria.php?id=' . $kategorie[$i][0] . '">' . $kategorie[$i][1] . '</a></h4>';	
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
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo $newsy_wyswietlenia[0][15]; ?>" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_wyswietlenia[0][0]; ?>"><?php echo $newsy_wyswietlenia[0][3]; ?></a></h4>
                        <span class="meta_date"><?php echo $newsy_wyswietlenia[0][1]; ?></span> 
			  <span class="meta_comment"><a href=<?php echo '"' . $krowa . 'kategoria.php?id=' . $newsy_wyswietlenia[0][6] . '">' . $newsy_wyswietlenia[0][10]; ?></a></span>
			  <span class="meta_more"><?php echo $newsy_wyswietlenia[0][11];  ?></span> 
			  <span class="meta_views"><?php echo $newsy_wyswietlenia[0][12];  ?></span> 
			  <span class="meta_rating"><?php echo $newsy_wyswietlenia[0][13];  ?></span>
			<!--<p><?php echo $newsy_wyswietlenia[0][4]; ?></p>-->
                      </div>
                    </div>
                  </li>
		  
		  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo $newsy_wyswietlenia[1][15]; ?>" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_wyswietlenia[1][0]; ?>"><?php echo $newsy_wyswietlenia[1][3]; ?></a></h4>
                        <span class="meta_date"><?php echo $newsy_wyswietlenia[1][1]; ?></span> 
			  <span class="meta_comment"><a href=<?php echo '"' . $krowa . 'kategoria.php?id=' . $newsy_wyswietlenia[1][6] . '">' . $newsy_wyswietlenia[1][10]; ?></a></span>
			  <span class="meta_more"><?php echo $newsy_wyswietlenia[1][11];  ?></span> 
			  <span class="meta_views"><?php echo $newsy_wyswietlenia[1][12];  ?></span> 
			  <span class="meta_rating"><?php echo $newsy_wyswietlenia[1][13];  ?></span>
                      </div>
                    </div>
                  </li>
		  
		  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo $newsy_wyswietlenia[2][15]; ?>" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_wyswietlenia[2][0]; ?>"><?php echo $newsy_wyswietlenia[2][3]; ?></a></h4>
                        <span class="meta_date"><?php echo $newsy_wyswietlenia[2][1]; ?></span> 
			  <span class="meta_comment"><a href=<?php echo '"' . $krowa . 'kategoria.php?id=' . $newsy_wyswietlenia[2][6] . '">' . $newsy_wyswietlenia[2][10]; ?></a></span>
			  <span class="meta_more"><?php echo $newsy_wyswietlenia[2][11];  ?></span> 
			  <span class="meta_views"><?php echo $newsy_wyswietlenia[2][12];  ?></span> 
			  <span class="meta_rating"><?php echo $newsy_wyswietlenia[2][13];  ?></span>
                      </div>
                    </div>
                  </li>
		  
		  
                </ul>
              </div>
		
		
		<!-- Ostatnio czytane -->
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                   <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo $newsy_czytane[0][15]; ?>" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_czytane[0][0]; ?>"><?php echo $newsy_czytane[0][3]; ?></a></h4>
                        <span class="meta_date"><?php echo $newsy_czytane[0][1]; ?></span> 
			  <span class="meta_comment"><a href=<?php echo '"' . $krowa . 'kategoria.php?id=' . $newsy_czytane[0][6] . '">' . $newsy_czytane[0][10]; ?></a></span>
			  <span class="meta_more"><?php echo $newsy_czytane[0][11];  ?></span> 
			  <span class="meta_views"><?php echo $newsy_czytane[0][12];  ?></span> 
			  <span class="meta_rating"><?php echo $newsy_czytane[0][13];  ?></span>
			<!--<p><?php echo $newsy_czytane[0][4]; ?></p>-->
                      </div>
                    </div>
                  </li>
		  
		  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo $newsy_czytane[1][15]; ?>" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_czytane[1][0]; ?>"><?php echo $newsy_czytane[1][3]; ?></a></h4>
                        <span class="meta_date"><?php echo $newsy_czytane[1][1]; ?></span> 
			  <span class="meta_comment"><a href=<?php echo '"' . $krowa . 'kategoria.php?id=' . $newsy_czytane[1][6] . '">' . $newsy_czytane[1][10]; ?></a></span>
			  <span class="meta_more"><?php echo $newsy_czytane[1][11];  ?></span> 
			  <span class="meta_views"><?php echo $newsy_czytane[1][12];  ?></span> 
			  <span class="meta_rating"><?php echo $newsy_czytane[1][13];  ?></span>
                      </div>
                    </div>
                  </li>
		  
		  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo $newsy_czytane[2][15]; ?>" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="artykul.php?id=<?php echo $newsy_czytane[2][0]; ?>"><?php echo $newsy_czytane[2][3]; ?></a></h4>
                        <span class="meta_date"><?php echo $newsy_czytane[2][1]; ?></span> 
			  <span class="meta_comment"><a href=<?php echo '"' . $krowa . 'kategoria.php?id=' . $newsy_czytane[2][6] . '">' . $newsy_czytane[2][10]; ?></a></span>
			  <span class="meta_more"><?php echo $newsy_czytane[2][11];  ?></span> 
			  <span class="meta_views"><?php echo $newsy_czytane[2][12];  ?></span> 
			  <span class="meta_rating"><?php echo $newsy_czytane[2][13];  ?></span>
                      </div>
                    </div>
                  </li>
		  
		    
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    