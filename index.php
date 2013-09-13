<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#add_user_menu_form
{
	margin-top:20px;
}
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

<style type="text/css">
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

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="css/tabzilla-min.css" rel="stylesheet" />




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bdalni | TEST</title>
</head>
<body>
<a href="" id="tabzilla">Menu</a>
<div style="clear:both"></div>
<!--form id="add_user_menu_form" method="post" action="controle/addUser.php" data-validate="parsley">
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
                <div class="span1"> <input type="submit" class="btn btn-block btn-success" value="Submit" /> </div>
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
<textarea id="Notes" name="Notes" rows="4" data-maxlength="300" placeholder="Notes" data-trigger="keyup" ></textarea>
				</div>
        	<div class="row-fluid">
            
            <div class="span3">
                <input id="PWD" class="PWD" type="password" placeholder="Password"><i id="pwd_info" class="icon-question-sign"></i>
    <span class="help-block">Ce mot de passe n'est pas obligatoire.<br />Il vous permet d'effacer votre publication. </span>

            </div>
          </div>
        
        </div>
    </div>
</div>
</form-->

<div class="container-narrow">

  <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Liste des demandes</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Baddel</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Permutez simplement les classes!</h1>
        <p class="lead">Entrez votre demande de permuttation, et grace à cette application trouvez des permuttations simplement et restez notifié par Email !</p>
        <a class="btn btn-large btn-success" href="#">Postez une demande</a><br /><br />
        <a class="btn btn-mini" href="#">Consulter les demandes</a>

      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span6">
          <h4>Idée</h4>
          <p>Au lieu de chercher porte à porte, placez votre demande ici et l'application va chercher pour vous une possible permutation.</p>

          <h4>Permut de Freeways</h4>
          <p>Meme si l'idée est la même cette application n'est pas un fork de l'application Permut, mais une autre approche pour résoudre le même problème.</p>

          <h4>Copyright</h4>
          <p>Cette application est placée sous licence libre GPLv3. Vous trouverez le code dans le git accompagné. Forkez là, modifier le code et lancer une instance pour votre établissement. Tant que c'est libre amusez vous!</p>
        </div>

        <div class="span6">
          <h4>Principe de fonctionnement</h4>
          <p>Vous pouvez directement consulter une liste des demandes, où placer la votre. Si en plaçant une demande (ou ultériérement) le systeme trouve une demande corréspondante à votre choix vous serez notifé sur le siet et par mail.</p>

          <h4>Bugs, suggestions et améliorations</h4>
          <p>Cette application est en phase de test, si vous remarquez un bug signalez le via le formulaire de contact. <br />Si vous voulez voir une autre fonctionaliter s'ajouter à l'application, Contactez moi.</p>

          <h4>Liens utiles</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <hr>

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