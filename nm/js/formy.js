
    function sprawdz_formularz()
    {
        var f=document.forms['form1'];
        
        if(f.imie.value == '')
        {
            alert('Musisz wpisać imię!');
            f.imie.focus();
            return false;
        }
        if(f.nazwisko.value == '')
        {
            alert('Musisz wpisać nazwisko!');
            f.nazwisko.focus();
            return false;
        }
        if(f.email.value == '')
        {
            alert('Musisz wpisać email!');
            f.email.focus();
            return false;
        }
        else{
            var reg = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
            if(reg.test(f.email.value)==false){
                alert('Błędny email');
                return false;
                
            }
        }
         if(f.aktywny.value != '0' && f.aktywny.value !='1')
        {
            alert('Musisz wybrac aktywnosc!');
            f.aktywny.focus();
            return false;
        }
        
       return true;  
    }
    