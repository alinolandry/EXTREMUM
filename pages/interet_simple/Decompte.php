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
            <legend> Veuillez remplir les champs pour éffectuer le décompte</legend>
            <div class="form-group">
                <div class="col-lg-5">
                    <div class="row form-group">
                        <div class="col-lg-5">
                            <label> Date de dépôt : </label>
                        </div>
                        <div class="col-lg-7">
                            <input type="date" name="date_depot" placeholder="AAAA-MM-JJ" class="form-control" required>
                        </div>
                    </div>
                    <br><br>
                    <div class="row form-group">
                        <div class="col-lg-5">
                            <label> Date de d'échéance : </label>
                        </div>
                        <div class="col-lg-7">
                            <input type="date" name="date_echeance" placeholder="AAAA-MM-JJ" class="form-control" required>
                        </div>
                    </div>
                    <small>NB: Le format de date est: AAAA-MM-JJ. Exemple: 2015-05-30</small>
                </div>   
                    
                <div class="form-group col-lg-2 col-lg-offset-1">
                    <input type="submit" name="submit7" value="Solution" class="form-control btn btn-success"><br><br><br>
                    <input type="reset" name="" value="Recommencer" class="form-control btn btn-primary">
                </div>
                <?php 
                    if(isset($_POST['submit7']))
                             {
                                echo '<div class="col-lg-4 btn btn-success">
                                        <h4>Le nombre de jour décompté est:</h4>
                                        <h3>'.$solution.' jours</h3> 
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
