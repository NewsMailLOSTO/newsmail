<?php
	include('head.php');
	include('top.php');
?>
<form action="session.php" method="post" name="form2" id="form2" >
	<table class="kupa">
		<tr><td>Email </td><td> <input type='text' name='email' id='email' placeholder='email'maxlength="32"/></td></tr>
		<tr> <td> hasło</td><td> <input type='text' name='hasło' id='hasło' placeholder='hasło' maxlength="32"/> </td></tr>
	</table>
	<br />
            <br />
            <div id="rej-button">
            <button type='submit' name='btn-upload'>Zaloguj</button>
                <div/>
</form>
<?php
	include('foot.php');
?>