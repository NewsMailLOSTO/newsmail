<?php
    include('head.php');
    include('top.php');
   
?>



<form action="dodaj.dodaj.php" method="post" name="form1" id="form1" onsubmit="return sprawdz_formularz()">

    <table class="kupa" border=1px><tr><td>Imię: </td><td> <input type='text' name='imie' id='imie' placeholder='Imię' maxlength="16"/></td></tr>
	<tr> <td> Nazwisko:</td><td> <input type='text' name='nazwisko' id='nazwisko' placeholder='Nazwisko' maxlength="32"/> </td></tr>
	<tr><td>   Email:</td><td> <input type='text' name='email' id='email' placeholder='Email' maxlength="64"/></td></tr>
	<tr> <td>      Hasło:</td><td> <input type='password' name='haslo' id='haslo' placeholder='Hasło' maxlength="64"/></td></tr>

    </table>

    <br />
    <br />
    <div id="rej-button">
	<button type='submit' name='btn-upload'>Rejestruj</button>
	<div/>
</form>

 <script type="text/javascript" src="js/formy.js"></script>
 
 <?php
    include('foot.php');
    

?>