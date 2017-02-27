<?php
include('head.php');
include('top.php');
include('db.php');

echo '<h3>Logowanie</h3>';

//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
    echo 'Jesteś już zalogowany.';
}
else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {
        /*the form hasn't been posted yet, display it
          note that the action="" will cause the form to post to the same page it is on */
        echo '<form method="post" action="">
            Nazwa użytkownika: <input type="text" name="imie" />
            Hasło: <input type="password" name="haslo">
            <input type="submit" value="Zaloguj" />
         </form>';
    }
    else
    {
        /* so, the form has been posted, we'll process the data in three steps:
            1.  Check the data
            2.  Let the user refill the wrong fields (if necessary)
            3.  Varify if the data is correct and return the correct response
        */
        $errors = array(); /* declare the array for later use */
         
        if(!isset($_POST['imie']))
        {
            $errors[] = 'Nazwa użytkownika nie może być pusta.';
        }
         
        if(!isset($_POST['haslo']))
        {
            $errors[] = 'Hasło nie może być puste.';
        }
         
        if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
        {
            echo 'Coś popsułeś przy wypełnianiu pól.';
            echo '<ul>';
            foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
            {
                echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            }
            echo '</ul>';
        }
        else
        {
            //the form has been posted without errors, so save it
            //notice the use of mysql_real_escape_string, keep everything safe!
            //also notice the sha1 function which hashes the password
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
                //something went wrong, display the error
                echo 'Something went wrong while signing in. Please try again later.';
                echo mysql_error(); //debugging purposes, uncomment when needed
            }
            else
            {
                //the query was successfully executed, there are 2 possibilities
                //1. the query returned data, the user can be signed in
                //2. the query returned an empty result set, the credentials were wrong
                if(mysql_num_rows($result) == 0)
                {
                    echo 'You have supplied a wrong user/password combination. Please try again.';
                }
                else
                {
                    //set the $_SESSION['signed_in'] variable to TRUE
                    $_SESSION['signed_in'] = true;
                     
                    //we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
                    while($row = mysql_fetch_assoc($result))
                    {
                        $_SESSION['id_user']    = $row['id_user'];
                        $_SESSION['imie']  = $row['imie'];
                        $_SESSION['kat_uzytkownikow'] = $row['kat_uzytkownikow'];
                    }
                    echo 'Witaj, ' . $_SESSION['imie'] . '. <a href="index.php">Tu masz stronę</a>.';
                    
                    echo print_r($_SESSION['imie']);
                }
            }
        }
    }
}
 
include ('foot.php');
?>