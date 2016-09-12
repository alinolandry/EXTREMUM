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
            <form class="well" method="post" action="acceuil.php">
            <legend> Veuillez remplir les champs pour le calcul du taux </legend>
            <div class="form-group">
                <div class="col-lg-5">
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <label> Valeur actuelle : </label>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="val_act" placeholder="Entrer la valeur actuelle" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">        
                            <label> Valeur Nominale : </label>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="val_nom" placeholder="Entrer la valeur Nominale" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <label> Durée :</label>
                            
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="duree" placeholder="Entrer la valeur de la duree" class="form-control" required><br>
                            
                        </div>
                    </div>   
                </div>
                <div class="form-group col-lg-2 col-lg-offset-1">
                    <input type="submit" name="submit42" value="Solution" class="form-control btn btn-success"><br><br><br>
                    <input type="reset" name="" value="Recommencer" class="form-control btn btn-primary">
                </div>
                <?php 
                    if(isset($_POST['submit42']))
                        {
                            echo '<div class="col-lg-4 btn btn-success">
                                <h4>La valeur du taux est:</h4>
                                <h3>'.$solution.'</h3> %
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
