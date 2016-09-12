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
        <div class="col-lg-12" style="background-color: #75e8f6;border-radius: 10px 10px 10px 10px; opacity: 0.8;" >
            <div class="row">
                <h1><center><strong> Calcul des éléments de l'interêt composé: Actualisation </strong></center></h1>
            </div>
            
            <hr>

            <div class="row">
                    <ul class="nav nav-tabs">
                        
                        <li><a href="#val_actuel_act" data-toggle="tab"><h5>Valeur actuelle</h5></a></li>
                         
                        
                        <li><a href="#val_nom_act" data-toggle="tab"><h5>Valeur nominale</h5></a></li>
                        
                     
                        <li><a href="#duree_act" data-toggle="tab"><h5> Durée </h5></a></li>
                        
                        
                        <li><a href="#taux_act" data-toggle="tab"><h5> Taux </h5></a></li>
                       
                        
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane <?php if(isset($active_va_act)) echo $active_va_act;?>" id="val_actuel_act"> <?php include 'actualisation/val_actuel_act.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_vn_act)) echo $active_vn_act;?>" id="val_nom_act"> <?php include 'actualisation/val_nom_act.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_duree_act)) echo $active_duree_act;?>" id="duree_act"> <?php include 'actualisation/duree_act.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_taux_act)) echo $active_taux_act;?>" id="taux_act"> <?php include 'actualisation/taux_act.php'; ?> </div>
                        
                    </div>
            </div>
            
            <br>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
