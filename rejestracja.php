<?php
    include('head.php');
    include('top.php');
   $imie= htmlspecialchars(trim($_POST['imie']));
$email=htmlspecialchars(trim($_POST['email']));
$wiadomosc= htmlspecialchars(trim($_POST['wiadomosc']));
$send= $_POST['send'];

$odbiorca = "email";



?>
<div class="col-lg-8 col-md-8">
    <div class="single_category wow fadeInDown">
    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Rejestracja</a> </h2>
	

<form action="dodaj.dodaj.php" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz();">
    
    <table class="kupa">
	<tr><td class="tablab">Imię: </td><td> <input type='text' name='imie' id='imie' placeholder='Imię' maxlength="16"/></td></tr>
	<tr><td class="tablab">Email:</td><td> <input type='text' name='email' id='email' placeholder='Email' maxlength="64"/></td></tr>
	<tr> <td class="tablab">Hasło:</td><td> <input type='password' name='haslo' id='haslo' placeholder='Hasło' maxlength="64"/></td></tr>
	<tr> <td class="tablab">Potwierdzenie hasła:</td><td> <input type='password' name='haslo2' id='haslo2' placeholder='Hasło' maxlength="64"/></td></tr>
	<tr><td></td><td class="tablab"><div id="rej-button">
		    <button type='submit' name='btn-upload'>Rejestruj</button>
                </div>
	    </td></tr>   
    </table>
        
            
            
        </form>

 <script type="text/javascript" src="js/formy.js"></script>
</div>
</div>
 <?php
    include('prawy.php');
    include('foot.php');
    

?>