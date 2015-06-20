// JavaScript Document
	function CreateXHR(){
    if (window.XMLHttpRequest){
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }else{
        // code for IE6, IE5
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	return xmlhttp;
	}
	
	
	
	
	
	function valider(){
		obj = CreateXHR();
		obj.onreadystatechange = function (){
        	if (obj.readyState == 4 && obj.status == 200)  {
				document.getElementById('autrevoeux').innerHTML += obj.responseText;
				document.getElementById('autrevoeux').id = "";
        	}
		}
		
		obj.open("GET","test.php");
		obj.send();
	}