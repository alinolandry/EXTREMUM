<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <div class="row">
            <div class="col-lg-6 col-lg-offset-6" style="background-color: #75e8f6;margin-bottom: 25px; border-radius: 10px 10px 10px 10px; box-shadow: 0px 0px 0px 15px goldenrod;  height: 380px; width: 500px; opacity: 0.8;">
                <form class="form-group-lg" method="post" action="traite_connexion.php">
                    <h2> Connexion <h2>
                    <hr>
                    <input type="password" class="form-control" name="password1" placeholder="Entrer le password" required><br>
                    <input type="password" class="form-control" name="password2" placeholder="Confirmer le password" required><br>
                    <hr>
                    <center>
                        <button type="submit" class="btn btn-info">
                            <img src="../img/connexion.jpg" width="90" height="50">
                         </button>
                    </center>
                    </form>
            </div>
        </div>
        <?php
        
        ?>
    </body>
</html>
