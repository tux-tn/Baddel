<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
textarea{resize: none}
body
{
	background-color:#0FF;
}
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
#main
{
	background-color:#F00;
}
</style>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="css/tabzilla-min.css" rel="stylesheet" />




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bdalni | TEST</title>
</head>
<body>
<a href="" id="tabzilla">Menu</a>
<div style="clear:both"></div>
<form id="add_user_menu_form" method="post" action="controle/addUser.php">
<div class="row-fluid">
	<div class="span8 offset2">
		<div class="row-fluid">
        		<div class="span3">
   					 <input type="text" name="Nom" id="nom" required="required" placeholder="Nom">
				</div>
                <div class="span3">
                   	 <input type="text" name="Prenom" id="Prenom" required="required" placeholder="Prenom">

				</div>
                <div class="span3 offset1">
                   	 <input type="text" name="Email" id="Email" required="required" placeholder="Email">

				</div>
        </div>
        
        <div class="row-fluid">
        	<div class="span2">
         		<input type="text" name="ClasseDep" id="ClasseDep" required="required" placeholder="Classe de départ">
        	</div>
        	<div class="span1"><i class="icon-arrow-right"></i></div>
            <div class="span2">
         		<input type="text" id="ClasseDest" name="ClasseDest" required="required" placeholder="Classe demandée">
        	</div>
            <div class="span3 offset2">
<textarea id="Notes" name="Notes" rows="4" placeholder="Notes" ></textarea>
				</div>
        	<div class="row-fluid">
            
            <div class="span3">
                <input id="PWD" class="PWD" type="password" placeholder="Password"><i id="pwd_info" class="icon-question-sign"></i>
    <span class="help-block">Ce mot de passe n'est pas obligatoire.<br />Il vous permet d'effacer votre publication. </span>

            </div>
            <script>
			$('#pwd_info').popover('show')
			</script>
            
            <div class="span2 offset6"><input type="submit" class="btn btn-large btn-success" value="Submit" /></div>
            </div>
        
        </div>
    </div>
</div>
</form>

<div class="row-fluid">
<div id="main" class="span8 offset2">ICI va l'intro</div> 
</div>


<script src="js/tabzilla.js"></script>

<script src="js/jquery-2.0.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>