// JavaScript Document

function Charger_table()
{


	if(window.XMLHttpRequest)
		xhr=new XMLHttpRequest();
		
	xhr.onreadystatechange = function()
	{
		if((xhr.readyState==4) && (xhr.status==200))
		{		alert('test');	

		
			document.getElementById('the_list').innerHTML = xhr.responseText;
		}
		
	xhr.open('GET','../controle/liste.php',false);
	xhr.send(null);
	}
}