function Ajax1($page,$div,$var,$val,$timer){
//alert ( $div);
var xmlHttp;
	try{	
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (e){
		    try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
				alert("No AJAX!?");
				return false;
			}
		}
	}


xmlHttp.onreadystatechange=function(){
	if(xmlHttp.readyState==4){
           
		document.getElementById($div).innerHTML=xmlHttp.responseText;
		setTimeout('Ajax1("'+$page+'","'+$div+'","'+$var+'","'+$val+'",'+$timer+')',$timer);
	}
}
xmlHttp.open("GET",$page+'?'+$var+'='+$val,true);
xmlHttp.send('null');
}