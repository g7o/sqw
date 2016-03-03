 	function search(tInput){
		document.getElementById('inText').value="";
		var art = document.getElementById('art').value;
		if (tInput==""){
				document.getElementById("ergebnis").innerHTML="Kein Suchbegriff eingegeben!";
            document.getElementById("hidden-btn").classList.remove("btn-hidden");
				return;
		}
		if (window.XMLHttpRequest){
			//IE7+, Chrome, Firefox, Safari, Opera
			xmlhttp=new XMLHttpRequest();
		}
		else{
			//IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("ergebnis").innerHTML=xmlhttp.responseText;
                document.getElementById("hidden-btn").classList.remove("btn-hidden");
			}
		}
		xmlhttp.open("POST","editTest.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code="+art+"&textInput="+tInput+"&password=0");
	}
    
    function clear(){
        alert("FEHLER");
        document.getElementById("ergebnis").innerHTML=" ";
        document.getElementById("hidden-btn").classList.add("btn-hidden");
    }
    function registration(){
        
        var vname = encodeURIComponent(document.getElementById('vname').value);
        var nname = encodeURIComponent(document.getElementById('nname').value);
        var uname = encodeURIComponent(document.getElementById('uname').value);
        var mail = encodeURIComponent(document.getElementById('mail').value);
        var birth = encodeURIComponent(document.getElementById('birth').value);
        var street = encodeURIComponent(document.getElementById('street').value);
        var hnumber = encodeURIComponent(document.getElementById('hnumber').value);
        var snumber = encodeURIComponent(document.getElementById('snumber').value);
        var tnumber = encodeURIComponent(document.getElementById('tnumber').value);   
        var plz = encodeURIComponent(document.getElementById('plz').value);
        var city = encodeURIComponent(document.getElementById('city').value);
        var country = encodeURIComponent(document.getElementById('country').value);
        var sex = encodeURIComponent(document.getElementById('sex').value);                
        var picture = encodeURIComponent(document.getElementById('datei').value);
        var password_1 = encodeURIComponent(document.getElementById('password_1').value);
        var password_check = encodeURIComponent(document.getElementById('password_check').value);
		if (window.XMLHttpRequest){
			//IE7+, Chrome, Firefox, Safari, Opera
			xmlhttp=new XMLHttpRequest();
		}
        
		else{
			//IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200 ){
                document.getElementById("ergebnis").innerHTML=xmlhttp.responseText;
			}
		}        
		xmlhttp.open("POST","editRegistration.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");	xmlhttp.send("code=1&vname="+vname+"&nname="+nname+"&uname="+uname+"&sex="+sex+"&mail="+mail+"&birth="+birth+"&street="+street+"&hnumber="+hnumber+"&snumber="+snumber+"&tnumber="+tnumber+"&plz="+plz+"&city="+city+"&country="+country+"&picture="+picture+"&password_1="+password_1+"&password_check="+password_check);
}
