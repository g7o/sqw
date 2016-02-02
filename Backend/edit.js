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
    
    function check(){
        var pw1=document.getElementById("pw-neu").value;
        var pw2=document.getElementById("pw-neu-check").value;
        if(pw1 == pw2){
            alert("korrekt");
        } else {
            alert("fehler");
        }
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
