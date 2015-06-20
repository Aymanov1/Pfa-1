function CreateXHR()
{
    if (window.XMLHttpRequest)
    {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                    if (xmlhttp.responseText == 'true2') {
                        document.getElementById('user').style.borderColor = "";
                        document.getElementById('password').style.borderColor = "";
                        window.open("enseignement.php","_self");
                    } else if(xmlhttp.responseText == 'true1'){
                        document.getElementById('user').style.borderColor = "";
                        document.getElementById('password').style.borderColor = "";
                        window.open("adminEnsiegnant.php","_self");
                    }else {
                        document.getElementById('user').style.borderColor = "red";
                        document.getElementById('password').style.borderColor = "red";
                    }
                }//else alert("internal problem");
    }
    user = document.getElementById('user').value;
    pw = document.getElementById('password').value;
    $request = "check.php";
    xmlhttp.open('POST', $request, true);

    vars = "var1=" + user + "&var2=" + pw;

    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(vars);

}

function subjects(){
    if (window.XMLHttpRequest)
    {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                   if(document.getElementById("check11").checked === true){
                       document.getElementById("div11").innerHTML = xmlhttp.responseText;
                   }
                   else document.getElementById("div11").innerHTML = "";
                }
    }
   
    xmlhttp.open("GET","subject.php");

    xmlhttp.send(null);

}   

