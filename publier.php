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
<link href="" rel="stylesheet">

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
</div>

<form id="add_user_menu_form" method="post" action="controle/addUser.php" data-validate="parsley">
<div class="row-fluid">
	<div class="span8 offset2">
		<div class="row-fluid">
        		<div class="span3">
   					 <input type="text" data-type="alphanum" name="Nom" id="nom" required="required" placeholder="Nom">
				</div>
                <div class="span3">
                   	 <input type="text" data-type="alphanum" name="Prenom" id="Prenom" required="required" placeholder="Prenom">

				</div>
                <div class="span3 offset1">
                   	 <input  name="Email" id="Email" required="required" placeholder="Email" data-trigger="keyup"  type="email" >

				</div>
                <div class="span1"> <input type="submit" class="btn btn-success" value="Submit" /> </div>
        </div>
        
        <div class="row-fluid">
        	<div class="span2">
         		<input type="text" name="ClasseDep" id="ClasseDep" required="required" placeholder="Classe de départ">
        	</div>
        	<div class="span1"><i class="icon-arrow-right icon-white"></i></div>
            <div class="span2">
         		<input type="text" id="ClasseDest" name="ClasseDest" required="required" placeholder="Classe demandée">
        	</div>
            <div class="span3 offset2">
<textarea id="Notes" name="Notes" rows="4" data-maxlength="300" placeholder="Notes" data-trigger="keyup" ></textarea>
				</div>
        	<div class="row-fluid">
            
            <div class="span3">
                <input id="PWD" class="PWD" type="password" placeholder="Password"><i id="pwd_info" class="icon-question-sign icon-white"></i>
    <span class="help-block">Ce mot de passe n'est pas obligatoire.<br />Il vous permet d'effacer votre publication. </span>

            </div>
          </div>
        
        </div>
    </div>
</div>
</form>

<div class="container-narrow">
<hr />
<h1>HOW TO </h1>
Entrez votre nom, prenom, classe actuelle et la classe dont vous desirez faire la permuttation.<br /><br />
Tapez votre Email pour recevoir les notifications si une offre correspond à vos besoins.<br />
Utiliser l'espace note pour donner plus de détails si necessaire.
<br />
Vous pouvez taper un mot de passe afin de pouvoir ultériérement effacer votre offre.
<br /><br /><br />
<p>Les notes et le mot de passe ne sont pas des champs obligatoires.</p>
  
      <div class="footer">
        <p>© Company 2013</p>
      </div>

    </div>

<script src="js/tabzilla.js"></script>

<script src="js/jquery-2.0.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/parsley.min.js"></script>

</body>
</html>