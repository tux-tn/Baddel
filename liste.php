

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#add_user_menu_form
{
	margin-top:20px;
}
textarea{resize: none}

#info_base
{
	float:left;
	display:inline;
}
#info_perso
{
	float:left;
	display:inline;
}
ul, li
{
    list-style-type: none;
}
input, textarea
{
	max-width:100%;
	width:auto;
}

del
  body {
        padding-top: 20px;
        padding-bottom: 40px;

      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>



<script src="js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#the_list').dataTable();
			} );
		</script>
        <link href="css/jquery.dataTables.css" rel="stylesheet">
        <link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="css/tabzilla-min.css" rel="stylesheet" />
  <link href='bootstrap/css/darkstrap.css' rel='stylesheet' />




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bdalni | TEST</title>
</head>
<body>
<a href="" id="tabzilla">Menu</a>
<div style="clear:both"></div>


<div class="container-narrow">

  <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="publier.php">Publiez une demande</a></li>
          <li><a href="#">Liste des demandes</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Baddel</h3>
      </div>

      <hr>


<table id="the_list" border="0">
<thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>pwd</th>
            <th>Origine</th>
            <th>Destination</th>
            <th>Notes</th>
        </tr>
    </thead>
    <tbody>


</tbody>
</table>






<hr />  
      <div class="footer">
        <p>© Company 2013</p>
      </div>

    </div>

<script src="js/tabzilla.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/parsley.min.js"></script>
<script type="text/javascript" src="js/charger_table.js"></script>
<script>
$(document).ready(function() {
    $('#the_list').dataTable();
	
	if(window.XMLHttpRequest)
		xhr=new XMLHttpRequest();
		
	xhr.onreadystatechange = function()
	{
		if((xhr.readyState==4) && (xhr.status==200))
		{
					alert('test');	

		
			document.getElementById('the_list').innerHTML = xhr.responseText;
		}
		
	xhr.open('GET','controle/liste.php',true);
	xhr.send(null);
	}

						alert('test2');	

	
} );



</script>
</body>
</html>