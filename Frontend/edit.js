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
