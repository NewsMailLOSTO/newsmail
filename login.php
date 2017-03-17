
<?php
include ('head.php');
include('top.php');
include('db.php');
mysql_select_db($db_database, $db_dodaj);


if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
    echo 'Jesteś już zalogowany.';
}
else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {
        ?>
<div class="col-lg-8 col-md-8">
    <div class="single_category wow fadeInDown">
    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Logowanie</a> </h2>
	<form method="post" action="">
	    <table class="kupa">
		<tr><td class="tablab">Nazwa użytkownika:</td><td><input type="text" name="imie" /></td> </tr>
		<tr><td class="tablab">Hasło:</td><td><input type="password" name="haslo" /></td> </tr>
		<tr><td></td><td class="tablab"><input type="submit" name="login" value="Zaloguj" /></td></tr>
	    </table>
	    
         </form>
</div>
</div>
	 <?php
    }
    else
    {
        //echo "'www.losto.net/newsmail/historia.php?imie='.'$imie'";
        $errors = array(); 
         
        if(!isset($_POST['imie']))
        {
            $errors[] = 'Nazwa użytkownika nie może być pusta.';
        }
         
        if(!isset($_POST['haslo']))
        {
            $errors[] = 'Hasło nie może być puste.';
        }
        $imie=$_POST['imie'];
        $kk=mysql_query("SELECT aktywny FROM user WHERE imie='" . $imie ."'");
        $aktywacja=  mysql_fetch_assoc($kk);
        
       // echo '<div class="notif-info">' . "SELECT aktywny FROM user WHERE imie='" . $imie ."'" . '</div>';

        
       
        if($aktywacja['aktywny']==0){
            $errors[] = 'Konto nie zostało aktywowane';
        } 
        
        if(!empty($errors)) 
        {
            echo 'Coś popsułeś przy wypełnianiu pól.';
            echo '<ul>';
            foreach($errors as $key => $value) 
            {
                echo '<li>' . $value . '</li>'; 
            }
            echo '</ul>';
        }
        else
        {
           
            $sql = "SELECT 
                        id_user,
                        imie,
                        kat_uzytkownikow
                    FROM
                        user
                    WHERE
                        imie= '" . mysql_real_escape_string($_POST['imie']) . "'
                    AND
                        haslo = '" . sha1($_POST['haslo']) . "'";
                         
            $result = mysql_query($sql,$db);
            if(!$result)
            {
               
                echo 'Logowanie się nie powiodło, spróbuj później.';
                echo mysql_error(); 
            }
            else
            {
                
                if(mysql_num_rows($result) == 0)
                {
                    echo 'Podałeś złe hasło lub login.';
                }
                else
                {
                 
                    $_SESSION['signed_in'] = true;
                     
                  
                    while($row = mysql_fetch_assoc($result))
                    {
                        $_SESSION['id_user']    = $row['id_user'];
                        $_SESSION['imie']  = $row['imie'];
                        $_SESSION['kat_uzytkownikow'] = $row['kat_uzytkownikow'];
                    }
                    echo 'Witaj, ' . $_SESSION['imie'] . '.  <a href="index.php"> Strona główna </a>.';
                    
                    
                }
            }
            
            include('historia.php');
        }
    }
  
}
  include ('prawy.php');
include ('foot.php');
?>