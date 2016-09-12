<!DOCTYPE html>
<html>
<head>
	<title>error connexion </title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
</head>
<body>

    <!debut de l'application!>
    
    <div class="container" style="background-image: url(../img/background.jpg);">
        
        <!entete de l'application!>
        
        <header style="opacity: 0.9;"> 
            <div class="row">
                <div class="col-lg-12" style="background-color: #75e8f6;margin-bottom: 25px; border-radius: 10px 10px 10px 10px; box-shadow: 0px 0px 0px 15px goldenrod; opacity: 0.8;">
                    <br>
                    <h1 style="font-size: 100px;color: blue;"><center><strong> EXTREMUM V.1.0 </strong></center></h1>
                    <br>
                    <span style="text-align: right;"><h2>Application de maths financière</h2></span>
                    <br>
                </div>
            </div>
        </header>
        
        <!fin de la zone d'entete!>
        
        <br><br><br><br><br><br><br><br><br>
        

        <!debut de la zone d'erreur!>
        
        <div class="row">
            <div class="col-lg-4 col-lg-push-8" style="background-color: #75e8f6;margin-bottom: 25px; border-radius: 10px 10px 10px 10px; box-shadow: 0px 0px 0px 15px goldenrod; opacity: 0.8;">
                <form class="form-group-lg" method="post" action="traite_connexion.php">
                    <h2> Connexion <h2>
                    <hr>
                    <div class="form-group has-error has-feedback">
                                    <input type="password" id="idError" class="form-control" name="password1" placeholder="Entrer le password" required><br>
                                    <span class="help-block" style="font-size: 14px;"><center><span class="alert alert-danger"> Mot de passe incorect ou pas identique</span></center> </span><br>
                                    <input type="password" id="idError" class="form-control" name="password2" placeholder="Confirmer le password" required><br>
                                    <span class="glyphicon gycophicon-remove form-control-feedback"></span>

                             </div>

                    <hr>
                    <center>
                        <button type="submit" class="btn btn-info">
                            <img src="../img/connexion.jpg" width="90" height="50">
                         </button>
                    </center>
                </form>
            </div>
        </div>
        
        <!fin de la zone d'erreur!>

</body>
</html>