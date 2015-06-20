// JavaScript Document
function CreateXHR() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    return xmlhttp;
}

function section() {
	xmlhttp = CreateXHR();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('section1').innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open("GET", "refresh.php?q=" + document.getElementById('groupe').value);

    xmlhttp.send();
}

function matiere() {
    xmlhttp = CreateXHR();

    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            //alert(xmlhttp.responseText);
            document.getElementById('matiere1').innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open("GET", "refreshmat.php?c=" + document.getElementById('section').value + "&q=" + document.getElementById('groupe').value);

    xmlhttp.send();

}

function submit() {
    var grp = document.getElementById('groupe');
    var sct = document.getElementById('section');
    var mat = document.getElementById('matiere');
    var typmat = document.getElementById('typemat');
    var datshow = document.getElementById('datashow');
	var com = document.getElementById('com');	
    if (grp.selectedIndex <= 0 || sct.selectedIndex <= 0 || typmat.selectedIndex <= 0 || mat.selectedIndex <= 0) {
        alert("vous devez terminer votre selection");
    }
    else {
    xmlhttp = CreateXHR();

    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			grp.disabled = true;
        sct.disabled = true;
        typmat.disabled = true;
        mat.disabled = true;
        datshow.disabled = true;
        com.disabled = true;
		alert(xmlhttp.responseText);
        document.getElementById("valider").value = "modifier";
        document.getElementById("valider").onclick = "modifier()";
           parent.valider();
        }
    }

    xmlhttp.open("GET", "submit.php?c=" + sct.value + "&q=" + grp.value + "&a=" + mat.value + "&p=" + typmat.value + "&d=" + datshow.checked + "&l=" + com.value);

    xmlhttp.send();
	}
}

function modifier(){
	alert("dfsdds");
    var grp = document.getElementById('groupe');
    var sct = document.getElementById('section');
    var mat = document.getElementById('matiere');
    var typmat = document.getElementById('typemat');
    var datshow = document.getElementById('datashow');
	var com = document.getElementById('com');
		grp.disabled = false;
			sct.disabled = false;
			typmat.disabled = false;
			mat.disabled = false;
			datshow.disabled = false;
			com.disabled = false;
			document.getElementById("valider").value = "valider";
			document.getElementById("valider").onclick = "submit())";
	}
