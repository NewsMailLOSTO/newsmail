
    function sprawdz_formularz()
    {
        var f=document.forms['form1'];
	var myerror = '';
	if(f.redaktor.value == '')
        {
            //alert('Musisz wpisać redaktora!');
            myerror += 'Musisz wpisać redaktora! </br>';
            //f.redaktor.focus();
            //return false;
        }
	else{
	    var reg = /^[0-9]*$/
	    if(reg.test(f.redaktor.value)==false){
		    //alert('Błędny redaktor');
		    myerror += 'Błędny redaktor </br>' ;
		    //return false;

	       }
        }
        if(f.tytul.value == '')
        {
            //alert('Musisz wpisać tytuł!');
            myerror += 'Musisz wpisać tytuł! </br>';
            //f.tytul.focus();
            //return false;
        }
        if(f.wstep.value == '')
        {
            //alert('Musisz wpisać wstęp!');
            myerror += 'Musisz wpisać wstęp! </br>';
            //f.wstep.focus();
            //return false;
        }  
	if(!f.kategoria.value)
        {
            //alert('Musisz wybrać kategorię!');
            myerror += 'Musisz wybrać kategorię! </br>';
            //f.kategoria.focus();
            //return false;
        }
	
	
	if( (CKEDITOR.instances.tresc.getData().length < 15) == true)
        { 
            //alert('Musisz wpisać treść!');
            myerror += 'Musisz wpisać treść! </br>';
            //f.tresc.focus();
            //return false;
        }  
        if(myerror != ''){
	    document.getElementById("message").innerHTML = "<div class=\"notif-warning\"></br>" + myerror + "</div>";//<div class=\"notif-info\"></br>" + CKEDITOR.instances.tresc.getData().length + "</div>";

	    return false;
	}
        
       return true;  
    }
    