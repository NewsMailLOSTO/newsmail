<?php 
include('head.php');
 include('top.php');
$imie= htmlspecialchars(trim($_POST['imie']));
$email=htmlspecialchars(trim($_POST['email']));
$temat= htmlspecialchars(trim($_POST['temat']));
$wiadomosc= htmlspecialchars(trim($_POST['wiadomosc']));
$send= $_POST['send'];

$odbiorca = "starwars.maciek@gmail.com";
$kom = "";
$header= "Content-type: text/html; charset=utf-8\r\n Nadawca:$email";
$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$data=date("Y-m-d");
$czas=date("H:i");
$error="";

if(empty($error)){
    $list= "Wiadomosc od: $imie ($mail) z komputera $host o IP $ip dnia $data o godz: $czas Wiadomosc : <br> $wiadomosc";
    
    
}
if(mail($odbiorca,$temat,$list,$mail)){
    $error = "<center><b>Twoja wiadomość została wysłana </b> </center><br />"; $kom= "";
    
    
}
else{
    $error="<center><b>Wystąpił błąð podczas wysyłania wiadomość, spróbuj później </b> </center><br />";
}
?>
<form action="" method="post" name="form2" id="form2" >
    
            <p>Imię i nazwisko: <input type='text' name='imie' id='imie' placeholder='Imię i nazwisko' maxlength="16"/></p>
            <p>Twój Email: <input type='text' name='email' id='email' placeholder='Twój Email' maxlength="64"/></p>
             <p> Temat <input type='text' name='temat' id='temat' placeholder='Temat' maxlength="32"/></p>
             <p>Wiadomosc <textarea  name='wiadomosc' id='wiadomosc' cols="40" rows="10" placeholder='Treść' maxlength="64"/></textarea></p>
            <input type='submit' value="Wyślij" id="send" name='send'/>
            
        </form>


<?php 
include ('foot.php');


?>