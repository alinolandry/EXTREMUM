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
        <div class="">
            <form class="well" action="acceuil.php" method="post">
            <legend> Veuillez remplir les champs pour le calcul de la valeur acquise</legend>
            <div class="form-group">
                <div class="col-lg-5">
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <label> Valeur nominale : </label>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="val_nominale" placeholder="Entrer la valeur nominale" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">        
                            <label> Escompte : </label>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="escompte" placeholder="Entrer la valeur de l'escompte" class="form-control" required>
                        </div>
                    </div>
                       
                </div>
                <div class="form-group col-lg-2 col-lg-offset-1">
                    <input type="submit" name="submit28" value="Solution" class="form-control btn btn-success"><br><br><br>
                    <input type="reset" name="" value="Recommencer" class="form-control btn btn-primary">
                </div>
                <?php 
                    if(isset($_POST['submit28']))
                        {
                            echo '<div class="col-lg-4 btn btn-success">
                                        <h4>La valeur actuelle est:</h4>
                                        <h3>'.$solution.' FCFA</h3> 
                                       </div>';
                        }
                ?>
                
                <br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </form>
            <br><br><br>
            
    </div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>

