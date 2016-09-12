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
                <h1><center><strong> Calcul des éléments de l'interêt simple </strong></center></h1>
            </div>
            
            <hr>
            <div class="row">

                    <ul class="nav nav-tabs">
                       
                        <li><a href="#interet" data-toggle="tab"><h5>Interêt</h5></a></li>
                        
                     
                        <li><a href="#capital" data-toggle="tab"><h5>Capital</h5></a></li>


                        <li><a href="#taux1" data-toggle="tab"><h5>Taux</h5></a></li>


                        <li><a href="#nbre_jour1" data-toggle="tab"><h5>Durée</h5></a></li>


                        <li><a href="#valeur_acquise" data-toggle="tab"><h5>Valeur acquise</h5></a></li>


                        <li><a href="#interet_civil" data-toggle="tab"><h5>Interêt civil</h5></a></li>


                        <li><a href="#decompte" data-toggle="tab"><h5>Décompte</h5></a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane <?php if(isset($active_interet)) echo $active_interet;?>" id="interet"><?php include'interet_simple/int_simple.php'; ?></div>
                        <div class="tab-pane <?php if (isset($active_capital))echo $active_capital;?>" id="capital"> <?php include'interet_simple/capital.php'; ?></div>
                        <div class="tab-pane <?php if(isset($active_taux)) echo $active_taux;?>" id="taux1"> <?php include'interet_simple/taux.php'; ?></div>
                        <div class="tab-pane <?php if(isset($active_nbreJour)) echo $active_nbreJour;?>" id="nbre_jour1"> <?php include'interet_simple/nbre_jours.php'; ?></div>
                        <div class="tab-pane <?php if(isset($active_valeurAquise)) echo $active_valeurAquise;?>" id="valeur_acquise"><?php include'interet_simple/valeur_acquise.php'; ?></div>
                        <div class="tab-pane <?php if(isset($active_interetCivil)) echo $active_interetCivil;?>" id="interet_civil"><?php include'interet_simple/interet_civil.php'; ?></div>
                        <div class="tab-pane <?php if(isset($active_decompte)) echo $active_decompte;?>" id="decompte"><?php include'interet_simple/Decompte.php'; ?></div>
                    </div>



                
           
            
            </div>
            
        </div>
         
        
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
