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
                <h1><center><strong> Calcul des éléments de l'escompte </strong></center></h1>
            </div>
            
            <hr>

            <div class="row">
                    <ul class="nav nav-tabs">
                        
                        <li><a href="#escompte1" data-toggle="tab"><h5>escompte</h5></a></li>
                        
                        
                        
                        <li><a href="#val_nom" data-toggle="tab"><h5>Valeur Nominale</h5></a></li>
                        
                     
                        <li><a href="#taux2" data-toggle="tab"><h5>Taux</h5></a></li>
                        
                        
                        <li><a href="#duree2" data-toggle="tab"><h5>Durée</h5></a></li>
                       
                        
                        <li><a href="#valeur_actuel" data-toggle="tab"><h5>Valeur actuel</h5></a></li>
                            
                      
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane <?php if(isset($active_escompte)) echo $active_escompte;?>" id="escompte1"> <?php include 'escompte/escompte.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_valNominale)) echo $active_valNominale;?>" id="val_nom"> <?php include 'escompte/valeur_nominale.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_taux2)) echo $active_taux2;?>" id="taux2"> <?php include 'escompte/taux.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_nbreJour2)) echo $active_nbreJour2;?>" id="duree2"> <?php include 'escompte/nbre_jours.php'; ?> </div>
                        <div class="tab-pane <?php if(isset($active_valActuel)) echo $active_valActuel;?>" id="valeur_actuel"> <?php include 'escompte/valeur_actuel.php'; ?> </div>
                    </div>
            </div>
            
            <br>
        </div>
        <?php
        
        ?>
    </body>
</html>
