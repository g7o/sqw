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
function changePassword(){
    var pwOld=encodeURIComponent(document.getElementById("pw-alt").value);
    var pwNew=encodeURIComponent(document.getElementById("pw-neu").value);
    var username=encodeURIComponent(document.getElementById("username").innerHTML);
    var pwNewChk=encodeURIComponent(document.getElementById("pw-neu-check").value);
    alert(username);
    alert(pwOld);
    alert(pwNew);
    alert(pwNewChk);
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
		xmlhttp.send("code=2&username="+username+"&pwOld="+pwOld+"&pwNew="+pwNew+"&pwNewChk="+pwNewChk);
	}    
    function clear(){
        alert("FEHLER");
        document.getElementById("ergebnis").innerHTML=" ";
        document.getElementById("hidden-btn").classList.add("btn-hidden");
    }
    function createNotice(){
        var title=encodeURIComponent(document.getElementById('title').value);
        var price=encodeURIComponent(document.getElementById('price').value);
        var piece=encodeURIComponent(document.getElementById('piece').value);
        var minprice=encodeURIComponent(document.getElementById('minprice').value);
        var origPrice=encodeURIComponent(document.getElementById('origPrice').value);
        var categories=encodeURIComponent(document.getElementById('categories').value);
        var actors=encodeURIComponent(document.getElementById('actors').value);
        var date=encodeURIComponent(document.getElementById('date').value);
        var shipping=encodeURIComponent(document.getElementById('shipping').value);
        var payment=encodeURIComponent(document.getElementById('payment').value);
        var datei=encodeURIComponent(document.getElementById('datei').value);
        var username=encodeURIComponent(document.getElementById('login_btn').innerHTML);
        var location=encodeURIComponent(document.getElementById('location').value);
        alert(username);
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
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");	xmlhttp.send("code=3&title="+title+"&piece="+piece+"&price="+price+"&minprice="+minprice+"&origPrice="+origPrice+"&categories="+categories+"&actors="+actors+"&date="+date+"&shipping="+shipping+"&payment="+payment+"&datei="+datei+"&username="+username+"&location="+location);
    }
    function getToken(){
        var token=encodeURIComponent(document.getElementById('token').value);
        var mail=encodeURIComponent(document.getElementById('mail').innerHTML);
        alert(mail);
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
        xmlhttp.send("code=4&token="+token+"&mail="+mail);
    }
    function registration(){
        var vname = encodeURIComponent(document.getElementById('vname').value);
        var nname = encodeURIComponent(document.getElementById('nname').value);
        var uname = encodeURIComponent(document.getElementById('uname').value);
        var mail = encodeURIComponent(document.getElementById('mail').value);
        var birth = encodeURIComponent(document.getElementById('birth').value);
        var street = encodeURIComponent(document.getElementById('street').value);
        var hnumber = encodeURIComponent(document.getElementById('hnumber').value); 
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
		xmlhttp.open("POST","edit.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");	xmlhttp.send("code=1&vname="+vname+"&nname="+nname+"&uname="+uname+"&sex="+sex+"&mail="+mail+"&birth="+birth+"&street="+street+"&hnumber="+hnumber+"&plz="+plz+"&city="+city+"&country="+country+"&picture="+picture+"&password_1="+password_1+"&password_check="+password_check);
}
