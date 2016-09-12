<html>
    <head>
            <meta charset="UTF-8">
            <title>acceuil</title>
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
            <?php include 'fonction.php';?>
    </head>
    <body>
	<!debut de l'application!>
    
        <div class="container" style="background-image: url(../img/background.jpg);">

            <!entete de l'application  !>

            <header style="opacity: 0.9;"> 
                <div class="row">
                    <div class="col-lg-12" style="background-color: #75e8f6;margin-bottom: 25px; border-radius: 10px 10px 10px 10px; box-shadow: 0px 0px 0px 15px goldenrod; opacity: 0.8;">
                        <br>
                        <h1 style="font-size: 50px;color: blue;"><center><strong> EXTREMUM V.1.0 </strong></center></h1>
                        <br>
                        <span style="text-align: right;"><h2>Application de maths financière</h2></span>
                       
                    </div>
                </div>
            </header>

            <!--fin de la zone d'entete-->
            <br>
            <!--deput des fonctionnalités de l'application!-->
            <div class="row">
                    <div class="col-lg-3">
                            
                        <!--menu de navigation!-->
                        
                        <?php 
                            include 'menu.php';
                        ?>

                    </div>

                    <div class="col-lg-9">

                            <!--corps de l'application!-->
                            <div class="tab-content">
                                <div class="tab-pane <?php if(isset($active_chap1)) echo $active_chap1;?>" id="interet_simple">
                                    <?php include 'chapitre1.php';?>
                                </div>
                                <div class="tab-pane <?php if(isset($active_chap2)) echo $active_chap2;?>" id="escompte">
                                
                                    <?php include 'chapitre2.php';?>
                                    
                                </div>
                                <div class="tab-pane <?php if(isset($active_chap3)) echo $active_chap3;?>" id="chap3">
                                    
                                    <?php include 'chapitre3.php'; ?>
                                
                                </div>
                                <div class="tab-pane <?php if(isset($active_chap4)) echo $active_chap4;?>" id="chap4">
                                    
                                    <?php include 'chapitre4.php'; ?>
                                
                                </div>
                            </div>
                                
                    </div>
    
            </div>
        </div>
    
    
    
            <!-- appel des scripts javascript -->
            
            <script src="../js/jquery.js"></script>
            <script src="../js/tab.js"></script>
            
            
            
            
            
            
    </body>
</html>