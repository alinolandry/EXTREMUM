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
                <h1><center><strong> Calcul des éléments de l'interêt composé: Capitalisation </strong></center></h1>
            </div>
            
            <hr>

            <div class="row">
                    <ul class="nav nav-tabs">
                        
                        <li><a href="#val_acquise_cap" data-toggle="tab"><h5>Valeur acquise</h5></a></li>
                        
                        
                        
                        <li><a href="#capital_cap" data-toggle="tab"><h5>Capital</h5></a></li>
                        
                     
                        <li><a href="#duree_cap" data-toggle="tab"><h5> Durée </h5></a></li>
                        
                        
                        <li><a href="#taux_cap" data-toggle="tab"><h5> Taux </h5></a></li>
                       
                        
                        <li><a href="#taux_prop_cap" data-toggle="tab"><h5>Taux proportionnel</h5></a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane <?php if(isset($active_va_cap)) echo $active_va_cap;?>" id="val_acquise_cap"> <?php include 'capitalisation/valeur_acquise_cap.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_capital_cap)) echo $active_capital_cap;?>" id="capital_cap"> <?php include 'capitalisation/capital_cap.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_duree_cap)) echo $active_duree_cap;?>" id="duree_cap"> <?php include 'capitalisation/duree_cap.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_taux_cap)) echo $active_taux_cap;?>" id="taux_cap"> <?php include 'capitalisation/taux_cap.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_taux_prop_cap)) echo $active_taux_prop_cap;?>" id="taux_prop_cap"><?php include 'capitalisation/taux_proportionnel_cap.php'; ?> </div>
                    </div>
            </div>
            
            <br>
        </div>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
