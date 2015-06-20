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

function type_mat() {
   xmlhttp = CreateXHR();

    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            //alert(xmlhttp.responseText);
            document.getElementById('matiere1').innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open("GET", "refreshtypmat.php?c=" + document.getElementById('section').value + "&q=" + document.getElementById('groupe').value + "&a=" document.getElementById('matiere').value);

    xmlhttp.send();
}

function submit() {
    var grp = document.getElementById('groupe');
    var sct = document.getElementById('section');
    var mat = document.getElementById('matiere');
    var typmat = document.getElementById('typemat');
    var datshow = document.getElementById('datashow');
    if (grp.selectedIndex <= 0 || sct.selectedIndex <= 0 || typmat.selectedIndex <= 0 || mat.selectedIndex <= 0) {
        alert("vous devez terminer votre selection");
    }
    else {
        grp.disabled = true;
        sct.disabled = true;
        typmat.disabled = true;
        mat.disabled = true;
        datshow.disabled = true;
        getElementById('com').disabled = true;
        getElementById("valider").value = "modifier";
        getElementById("valider").onclick = "modifier()";
        //parent.valider();
    
    xmlhttp = CreateXHR();

    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           // parent.valider();
        }
    }

    xmlhttp.open("GET", "submit.php?c=" + document.getElementById('section').value + "&q=" + document.getElementById('groupe').value + "&a=" + document.getElementById('matiere').value + "&p=" + document.getElementById('typemat').value);

    xmlhttp.send();
	}
}

