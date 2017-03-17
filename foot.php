</div>
  </section>
</div>

<!-- poczatek foota -->
<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2>Labels</h2>
            <ul class="labels_nav">
		<?php
		    for ($i = 0; $i < count($kategorie); $i++) {
			echo '<li>';
			echo '<a href="kategoria.php?id=' . $kategorie[$i][0] . '">' . $kategorie[$i][1] . '</a>';
			echo '</li>';
		    }
		?>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>O nas</h2>
            <p>Maciej Stosik starwars.maciek@gmail.com
	    </br> Marcin Borysiak marcinez24@gmail.com 
	    </br> Projekt realizowany w ramach zaliczenia przedmiotu "Tworzenie serwisów internetowych", kwiecień 2017
	    </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy; 2017 <a href="index.html">NewsMAIL</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
	      <p>Template BY Wpfreeware <a href="http://losto.net" style="color: #949494;"></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo $krowa;?>assets/js/jquery.min.js"></script> 
<script src="<?php echo $krowa;?>assets/js/bootstrap.min.js"></script> 
<!--
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
-->
</body>
</html>