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
            <legend> Veuillez remplir les champs pour le calcul de la durée </legend>
            <div class="form-group">
                <div class="col-lg-5">
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <label> Interêt : </label>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="interet" placeholder="Entrer la valeur de l'interêt" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">        
                            <label> Capital : </label>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="capital" placeholder="Entrer la valeur du capital" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <label> Taux :</label>
                            
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="taux" placeholder="Entrer la valeur du taux" class="form-control" required><br>
                            <small>cocher l'option de calcul</small>
                            <span class="col-lg-4">Années<input type="radio" name="option" value="annee" class="form-control" required></span>
                            <span class="col-lg-4">Mois<input type="radio" name="option" value="mois" class="form-control" required></span>
                            <span class="col-lg-4">Jours<input type="radio" name="option" value="jour" class="form-control" required></span>
                        </div>
                    </div>   
                </div>
                <div class="form-group col-lg-2 col-lg-offset-1">
                    <input type="submit" name="submit4" value="Solution" class="form-control btn btn-success"><br><br><br>
                    <input type="reset" name="" value="Recommencer" class="form-control btn btn-primary">
                </div>
                <?php 
                    if(isset($_POST['submit4']))
                        {
                          echo '<div class="col-lg-4 btn btn-success">
                                        <h4>La durée est de </h4>
                                        <h3>'.$solution.' '.$option.' </h3> 
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
