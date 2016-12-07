<?php
    include('head.php');
    include('top.php');
   
?>



<form action="dodaj.dodaj.php" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz()">
            <p>Imię: <input type='text' name='imie' id='imie' placeholder='Imię' maxlength="16"/></p>
            <p>Nazwisko: <input type='text' name='nazwisko' id='nazwisko' placeholder='Nazwisko' maxlength="32"/></p>
            <p>Email: <input type='text' name='email' id='email' placeholder='Email' maxlength="64"/></p>
            <p>Hasło: <input type='password' name='haslo' id='haslo' placeholder='Hasło' maxlength="64"/></p>
            
            
            <br />
            <br />
            <button type='submit' name='btn-upload'>Rejestruj</button>
            
        </form>

 <script type="text/javascript" src="js/formy.js"></script>
 
 <?php
    include('foot.php');
    

?>