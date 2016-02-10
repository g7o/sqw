function deleteUser(username){
    username = encodeURIComponent(username);
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
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code=10&textInput="+username);
}

function contact(mail){
    mail = encodeURIComponent(mail);
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
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code=10&textInput="+mail);
}

function changePassword(username){
    var pwOld=encodeURIComponent(document.getElementById("pw-alt").value);
    var pwNew=encodeURIComponent(document.getElementById("pw-neu").value);
    var pwNewChk=encodeURIComponent(document.getElementById("pw-neu-check").value);
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
				document.getElementById("fehler-hint").innerHTML=xmlhttp.responseText;
                document.getElementById("pw-alt").value="";
                document.getElementById("pw-neu").value="";
                document.getElementById("pw-neu-check").value="";
                
			}
		}
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code=550&username="+username+"&pwOld="+pwOld+"&pwNew="+pwNew+"&pwNewChk="+pwNewChk);
	}

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
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code="+art+"&textInput="+tInput+"&password=0");
	}
    

var timoutNow = 600000; // Timeout 60s
var logoutUrl = 'http://www.htl-hl.ac.at/wi/sqwirrel/backend/logout.php'; // URL to logout page.

var timeoutTimer;

// Start Timer.
function StartTimer() {
    timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
}

// Reset timers.
function ResetTimer() {
    clearTimeout(timeoutTimer);
    StartTimer();
}


// Logout the user.
function IdleTimeout() {
    window.location = logoutUrl;
}
