var searchText;
var wait;
var timeWait=2000;
function changeMail(username,mail){
    mail = encodeURIComponent(mail);
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
                wait= setInterval("search(searchText)",timeWait);

			}
		}
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code=18&mail="+mail+"&username="+username);
}

function changeActive(username,active){
    active = encodeURIComponent(active);
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
                wait= setInterval("search(searchText)",timeWait);

			}
		}
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code=15&username="+username+"&active="+active);
}

function changeType(username,type){
    type = encodeURIComponent(type);
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
                wait= setInterval("search(searchText)",timeWait);

			}
		}
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code=16&username="+username+"&type="+type);
}

function changeMax(username,max){
    max = encodeURIComponent(max);
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
                wait= setInterval("search(searchText)",timeWait);

			}
		}
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code=17&username="+username+"&max="+max);
}

function shEdForm(username,mail,activated,retailer,max){
    mail = encodeURIComponent(mail);
    activated = encodeURIComponent(activated);
    retailer = encodeURIComponent(retailer);
    max = encodeURIComponent(max);
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
		xmlhttp.send("code=502&mail="+mail+"&isActivated="+activated+"&isRetailer="+retailer+"&maximum="+max+"&username="+username);
}
function shConForm(mail,fname,sname){
    mail = encodeURIComponent(mail);
    fname = encodeURIComponent(fname);
    sname = encodeURIComponent(sname);
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
		xmlhttp.send("code=501&mail="+mail+"&firstname="+fname+"&sirname="+sname);
}
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
                wait= setInterval("search(searchText)",timeWait);      
			}
		}
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("code=10&textInput="+username);
}

function contactUser(mail){
    alert("contac");
    textInput = encodeURIComponent(document.getElementById('message').value);
    subject = encodeURIComponent(document.getElementById('subject').value);
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
		xmlhttp.send("code=19&textInput="+textInput+"&mail="+mail+"&subject="+subject);
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
        clearInterval(wait);
        searchText=tInput;
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
