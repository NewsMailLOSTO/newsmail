
    function sprawdz_formularz()
    {
        var f=document.forms['form1'];
	var myerror = '';
	if(f.kateg.value == '')
        {
            //alert('Musisz wpisać redaktora!');
            myerror += 'Musisz wpisać nazwę kategorii! </br>';
            //f.redaktor.focus();
            //return false;
        }
	
        if(myerror != ''){
	    document.getElementById("message").innerHTML = "<div class=\"notif-warning\"></br>" + myerror + "</div>";//<div class=\"notif-info\"></br>" + CKEDITOR.instances.tresc.getData().length + "</div>";

	    return false;
	}
        
       return true;  
    }
    