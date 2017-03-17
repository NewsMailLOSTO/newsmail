<!--
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
-->


<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="<?php echo $krowa;?>index.php">News<strong>MAIL</strong> <span>Serwis newsów</span></a></div>
         
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="<?php echo $krowa;?>index.php">Home</a></li>
            <!--<li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Archives</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $krowa;?>pages/archive-main.html">Archive</a></li>
                <li><a href="<?php echo $krowa;?>pages/archive1.html">Archive 1</a></li>
                <li><a href="<?php echo $krowa;?>pages/archive2.html">Archive 2</a></li>
                <li><a href="<?php echo $krowa;?>pages/archive3.html">Archive 3</a></li>
              </ul>
            </li>-->
            
            
          
		<div class="header_top_right">
                    <ul class="nav navbar-nav custom_nav" >
                        
			<?php 
			if ($_SESSION['signed_in'] == true){
			    echo '<li><a href="' . $krowa . 'user.php">' . $_SESSION['imie'] . '</a></li>;';
			    
			    if ($_SESSION['kat_uzytkownikow'] == 1){			    
				echo '<li><a href="' . $krowa . 'pages/admin.php">Admin</a></li>;';
			    }
			    
			    if ($_SESSION['kat_uzytkownikow'] == 2){			    
				echo '<li><a href="' . $krowa . 'pages/admin.php">Redaktor</a></li>;';
			    }
			    
			    echo '<li><a href="' . $krowa . 'logout.php">Logout</a></li>';   
			}
			else{
			    echo '<li><a href="' . $krowa . 'login.php">Login</a></li>;';
			    echo '<li><a href="' . $krowa . 'rejestracja.php">Rejestracja</a></li>  ';
			    
			}
			?>
			
                       
                       
		   </ul>
		</div>
	    
          </ul>
	    
        </div>
      </div>
    </nav>
  </div>
    
  <!-- poczatek contentu -->
  
     <section id="mainContent">
    <div class="content_bottom">
	