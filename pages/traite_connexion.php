<<!DOCTYPE html>
<html>
<head>
	<title>traite_connexion</title>
</head>
<body>
	<?php 
		if(isset($_POST['password1'], $_POST['password2']) && $_POST['password1']==$_POST['password2'] && $_POST['password2']=="root")
		{
			header("location:acceuil.php");
		}
		else
		{
                    
			header("location:erreur_connexion.php");
		}


	?>
</body>
</html>>