<?php
    //fonction de tout mon application


    //Gestion des activation des tab
        $active_chap1 = "active";
        if(isset($_POST['submit1']) || isset($_POST['submit2']) || isset($_POST['submit3']) || isset($_POST['submit4']) || isset($_POST['submit5']) || isset($_POST['submit6']) || isset($_POST['submit7']) || isset($_POST['submit8']))
                {
                    $active_chap1 = "active";
                }
                elseif(isset($_POST['submit20']) || isset($_POST['submit22']) || isset($_POST['submit21']) || isset($_POST['submit28']) || isset($_POST['submit24']))
                {
                    $active_chap1 = "";
                    $active_chap2 = "active";
                }
                elseif(isset($_POST['submit30']) || isset($_POST['submit32']) || isset($_POST['submit31']) || isset($_POST['submit34']) || isset($_POST['submit35']) || isset($_POST['submit36']))
                {
                    $active_chap1 = "";
                    $active_chap3 = "active";
                }
                elseif(isset($_POST['submit40']) || isset($_POST['submit42']) || isset($_POST['submit41']) || isset($_POST['submit44']) || isset($_POST['submit43']))
                {
                    $active_chap1 = "";
                    $active_chap4 = "active";
                }
                
    

    // fonction du chapitre 1 : "LES INTERET SIMPLE"
    
        $active_interet = "active";
        //Calcul en annee
            function interet_simple_annee($c, $t, $n)
            {
            return ($c*$t*$n)/100;
            }

            function capital_simple_annee($i, $t, $n)
            {
                return((100*$i)/($n*$t));
            }
            function taux_simple_annee($c, $i, $n)
            {
                return((100*$i)/($c*$n));
            }
            function nbreJour_simple_annee($i, $c, $t)
            {
                return((100*$i)/($c*$t));
            }




        //Calcul en moi
            
            function interet_simple_moi($c, $t, $n)
            {
            return ($c*$t*$n)/1200;
            }

            function capital_simple_moi($i, $t, $n)
            {
                return((1200*$i)/($n*$t));
            }
            function taux_simple_moi($c, $i, $n)
            {
                return((1200*$i)/($c*$n));
            }
            function nbreJour_simple_moi($i, $c, $t)
            {
                return((1200*$i)/($c*$t));
            }

        //Calcul en jour
           
            function interet_simple_jour($c, $t, $n)
            {
            return ($c*$t*$n)/36000;
            }

            function capital_simple_jour($i, $t, $n)
            {
                return((36000*$i)/($n*$t));
            }
            function taux_simple_jour($c, $i, $n)
            {
                return((36000*$i)/($c*$n));
            }
            function nbreJour_simple_jour($i, $c, $t)
            {
                return((36000*$i)/($c*$t));
            }
            
        //Calcul de la valeur acquise
            
            function valeur_acquise_vc($c, $i)
            {
                return $c + $i;
            }
            function capital_vc($vc, $i)
            {
                return $vc - $i;
            }
            function interet_vc($vc, $c)
            {
                return $vc - $c;
            }
            
        //interet civil
            function interet_civil($c, $t, $n)
            {
                return ($c*$t*$n)/36500;
            }
            
        //fonction du decompte
         
            function decompte($dateDebut, $dateFin)
            {
              $d1 = new DateTime($dateDebut);
              $d2 = new DateTime($dateFin);
              $diff = $d1->diff($d2);
              $nbre_jour = $diff->days;
              return $nbre_jour;
            }
            
            // Traitement de l'interêt simple
            
        if(isset($_POST['submit1']))
            {
             if($_POST['option']=='annee')
                 {
                 $solution = interet_simple_annee($_POST['capital'], $_POST['taux'], $_POST['duree']);
                }
                elseif($_POST['option']=='mois')
                    {
                        $solution = interet_simple_moi($_POST['capital'], $_POST['taux'], $_POST['duree']);

                    }
                elseif($_POST['option']=='jour')
                    {
                        $solution = interet_simple_jour($_POST['capital'], $_POST['taux'], $_POST['duree']);
                    }
                    $active_interet = "active";
            }
            
            
            // Traitement du capital simple
            
        if(isset($_POST['submit2']))
            {
             if($_POST['option']=='annee')
                 {
                 $solution = capital_simple_annee($_POST['interet'], $_POST['taux'], $_POST['duree']);
                 }
                elseif($_POST['option']=='mois')
                    {
                        $solution = capital_simple_moi($_POST['interet'], $_POST['taux'], $_POST['duree']);
                    }
                elseif($_POST['option']=='jour')
                    {
                        $solution = capital_simple_jour($_POST['interet'], $_POST['taux'], $_POST['duree']);
                    }

                 $active_capital = "active"; 
                 $active_interet = "";
            }
                        
                        
             // Traitement du taux 
                        
        if(isset($_POST['submit3']))
            {
             if($_POST['option']=='annee')
                 {
                 $solution = taux_simple_annee($_POST['capital'], $_POST['interet'], $_POST['duree']);
                }
                elseif($_POST['option']=='mois')
                    {
                        $solution = taux_simple_moi($_POST['capital'], $_POST['interet'], $_POST['duree']);
                    }
                elseif($_POST['option']=='jour')
                    {
                        $solution = taux_simple_jour($_POST['capital'], $_POST['interet'], $_POST['duree']);
                    }
                    $active_interet = "";
                    $active_taux = "active";
            }
            
            // Traitement de la durée 
    if(isset($_POST['submit4']))
        {
         if($_POST['option']=='annee')
             {
             $solution = nbreJour_simple_annee($_POST['interet'], $_POST['capital'], $_POST['taux']);
             $option = "ans";
            }
            elseif($_POST['option']=='mois')
                {
                    $solution = nbreJour_simple_moi($_POST['interet'], $_POST['capital'], $_POST['taux']);
                    $option = "mois";
                }
            elseif($_POST['option']=='jour')
                {
                    $solution = nbreJour_simple_jour($_POST['interet'], $_POST['capital'], $_POST['taux']);
                    $option = "jours";
                }
                $active_interet = "";
                $active_nbreJour = "active";
        }
        
        // Traitement de la valeur acquise
        
        if(isset($_POST['submit8']))
            {
            $solution = valeur_acquise_vc($_POST['capital'], $_POST['interet']);
            $active_interet = "";
            $active_valeurAquise = "active";

           }
           
           // Traitement interêt civil
           
           if(isset($_POST['submit6']))
               {
               $solution = interet_civil($_POST['capital'], $_POST['taux'], $_POST['duree']);
               $active_interet = "";
               $active_interetCivil = "active";
               }
           
           // Traitement du décompte
           
        if(isset($_POST['submit7']))
            {
            $solution = decompte($_POST['date_depot'], $_POST['date_echeance']);
            $active_interet = "";
            $active_decompte = "active";
           }
           
           
           
           
           
            
            
            
            
            
    // Fonctions du chapitre 2 : "L' escompte des effets de commerce"
            
        //Calcul en année
            function escompte_annee($v, $t, $n)
            {
                return ($v*$t*$n)/100;
            }
            function valeur_nom_annee($e, $t, $n)
            {
                return (($e*100)/($t*$n));
            }
            function taux_escompte_annee($e, $v, $n) 
            {
                return (($e*100)/($v*$n));
            }
            function nbreJour_escompte_annee($e, $v, $t)
            {
                return (($e*100)/$v*$t);
            }

        // Calcul en mois
            function escompte_moi($v, $t, $n)
            {
                return ($v*$t*$n)/1200;
            }
            function valeur_nom_moi($e, $t, $n)
            {
                return (($e*1200)/($t*$n));
            }
            function taux_escompte_moi($e, $v, $n) 
            {
                return (($e*1200)/($v*$n));
            }
            function nbreJour_escompte_moi($e, $v, $t)
            {
                return (($e*1200)/$v*$t);
            }
            
        // Calcul en jours
            function escompte_jour($v, $t, $n)
            {
                return ($v*$t*$n)/36000;
            }
            function valeur_nom_jour($e, $t, $n)
            {
                return (($e*36000)/($t*$n));
            }
            function taux_escompte_jour($e, $v, $n) 
            {
                return (($e*36000)/($v*$n));
            }
            function nbreJour_escompte_jour($e, $v, $t)
            {
                return (($e*36000)/$v*$t);
            }

        // Calcul de la valeur actuelle commercial
        function valeur_actuelle($v, $e)
        {
            return $v-$e;
        }
        
        // Date d'equivalence des effets
        
        function date_equivalence()
        {
            // je reflechi encore dessus
        }

        // traitement des escomptes
        $active_escompte = "active";
        
        if(isset($_POST['submit20']))
            {
             if($_POST['option']=='annee')
                 {
                 $solution = escompte_annee($_POST['val_nominale'], $_POST['taux'], $_POST['duree']);
                }
                elseif($_POST['option']=='mois')
                    {
                        $solution = escompte_moi($_POST['val_nominale'], $_POST['taux'], $_POST['duree']);
                    }
                elseif($_POST['option']=='jour')
                    {
                        $solution = escompte_jour($_POST['val_nominale'], $_POST['taux'], $_POST['duree']);
                    }
                    
                    $active_escompte = "active";
            }
            
          // Traitement de la valeur nominale
            
            if(isset($_POST['submit21']))
                {
                 if($_POST['option']=='annee')
                    {
                     $solution = valeur_nom_annee($_POST['escompte'], $_POST['taux'], $_POST['duree']);
                    }
                    elseif($_POST['option']=='mois')
                        {
                            $solution = valeur_nom_moi($_POST['escompte'], $_POST['taux'], $_POST['duree']);
                        }
                    elseif($_POST['option']=='jour')
                        {
                            $solution = valeur_nom_jour($_POST['escompte'], $_POST['taux'], $_POST['duree']);
                        }
                        $active_valNominale = "active";
                        $active_escompte = "";
                }
                
            // Traitement du taux des escompte
                
                if(isset($_POST['submit22']))
                    {
                     if($_POST['option']=='annee')
                        {
                         $solution = taux_escompte_annee($_POST['escompte'], $_POST['val_nominale'], $_POST['duree']);
                        }
                        elseif($_POST['option']=='mois')
                            {
                                $solution = taux_escompte_moi($_POST['escompte'], $_POST['val_nominale'], $_POST['duree']);
                            }
                        elseif($_POST['option']=='jour')
                            {
                                $solution = taux_escompte_jour($_POST['escompte'], $_POST['val_nominale'], $_POST['duree']);
                            }
                            $active_taux2 = "active";
                            $active_escompte = "";
                    }
                //Traitement du nombre de jours via l'escompte
                    if(isset($_POST['submit24']))
                       {
                        if($_POST['option']=='annee')
                            {
                            $solution = nbreJour_escompte_annee($_POST['escompte'], $_POST['val_nominale'], $_POST['taux']);
                            $option = "ans";
                            }
                           elseif($_POST['option']=='mois')
                               {
                                   $solution = nbreJour_escompte_moi($_POST['escompte'], $_POST['val_nominale'], $_POST['taux']);
                                   $option = "mois";
                               }
                           elseif($_POST['option']=='jour')
                               {
                                   $solution = nbreJour_escompte_jour($_POST['escompte'], $_POST['val_nominale'], $_POST['taux']);
                                   $option = "jours";
                               }
                               $active_nbreJour2 = "active";
                               $active_escompte = "";
                       }
               
                    // Traitement de la valeur actuel 
                           if(isset($_POST['submit28']))
                                {
                                $solution = valeur_actuelle($_POST['val_nominale'], $_POST['escompte']);
                                $active_valActuel = "active";
                                $active_escompte = "";
                               }

                            $activeChapitre1 = "active";
                            if(isset($_POST['chap2']))
                                {
                                 $activeChapitre2 = "active";
                                 $activeChapitre1 = "";
                                }
                        
                        






// Fonctions du chapitre 3 : "Interêt composé : CAPITALISATION"
                                    
        // Fonctions de traitement
        function valeur_acquise_cap($c, $t, $n)
            {
                $i = $t/100;
                $cn = $c*pow(1+$i,$n);
                return $cn;
    
        }
            
        function capital_cap($va, $t, $n)
            {
                $i = $t/100;
                $c = $va/pow(1+$i,$n);
                return $c;
        }
        
        function duree_cap($va, $c, $t)
            {
                $i = $t/100;
                $n = log10($va/$c) / log10(1+$i);
                return $n;
        }
            
        function taux_cap($va, $c, $n) 
            {  
            $racineemecap = pow($va/$c, 1/$n);
            $resulta = ($racineemecap - 1)*100;
            return $resulta;
            }
        
        function taux_equivalent_cap($t, $op)
             {
            // problème très grave au secour
        }
        
        function taux_proportionnel_cap($t,$op)
            {
            return $t/$op;
        }
        
        // Operations de traitement et de Calcul
        $active_va_cap = "active";
        if(isset($_POST['submit30']))
            {
                $solution = valeur_acquise_cap($_POST['capital'], $_POST['taux'], $_POST['duree']);
                $active_va_cap = "active";
                
            }
         
        if(isset($_POST['submit31']))
            {
                $solution = capital_cap($_POST['valeur_acquise'], $_POST['taux'], $_POST['duree']);
                $active_va_cap = "";
                $active_capital_cap = "active";
                
            }
            
        if(isset($_POST['submit32']))
            {
                $solution = taux_cap($_POST['valeur_acquise'], $_POST['capital'], $_POST['duree']);
                $active_va_cap = "";
                $active_taux_cap = "active";
                
            }
            
        if(isset($_POST['submit34']))
            {
                $solution = duree_cap($_POST['valeur_acquise'], $_POST['capital'], $_POST['taux']);
                $active_va_cap = "";
                $active_duree_cap = "active";
            }
        if(isset($_POST['submit35']))
            {
                // problème de conception
            }
        
            
         if(isset($_POST['submit36']))
                    {
                     if($_POST['option']=='semestre')
                        {
                         $solution = taux_proportionnel_cap($_POST['taux'],2);
                        }
                        elseif($_POST['option']=='trimestre')
                            {
                                $solution = taux_proportionnel_cap($_POST['taux'],4);
                            }
                        elseif($_POST['option']=='bimestre')
                            {
                                $solution = taux_proportionnel_cap($_POST['taux'],6);
                            }
                        elseif($_POST['option']=='mensuel')
                        {
                            $solution = taux_proportionnel_cap($_POST['taux'],12);
                        }
                       $active_va_cap = "";
                       $active_taux_prop_cap = "active";    
                    }
                    
                    
   
  // FONCTIONS DU CHAPITRE 4 : INTERET COMPOSE : ACTUALISATION 
                    
     // Fonctions de traitement
        function valeur_actuel_act($vn, $t, $n)
            {
                $i = $t/100;
                $va = $vn*pow(1+$i,-$n);
                return $va;
    
        }
            
        function valeur_nominale_act($va, $t, $n)
            {
                $i = $t/100;
                $vn = $va/pow(1+$i,-$n);
                return $vn;
        }
        
        function duree_act($va, $vn, $t)
            {
                $i = $t/100;
                $n = -(log10($va/$vn) / log10(1+$i));
                return $n;
        }
            
        function taux_act($va, $vn, $n) 
            {  
            $racineemeact = pow($va/$vn, 1/-$n);
            $resulta = ($racineemeact - 1)*100;
            return $resulta;
            }
            
            
            
         // Operation de traitement du chapitre 4
            
             $active_va_act = "active";
        if(isset($_POST['submit40']))
            {
                $solution = valeur_actuel_act($_POST['val_nom'], $_POST['taux'], $_POST['duree']);
                $active_va_act = "active";
                
            }
         
        if(isset($_POST['submit41']))
            {
                $solution = valeur_nominale_act($_POST['val_act'], $_POST['taux'], $_POST['duree']);
                $active_va_act = "";
                $active_vn_act = "active";
                
            }
            
        if(isset($_POST['submit42']))
            {
                $solution = taux_act($_POST['val_act'], $_POST['val_nom'], $_POST['duree']);
                $active_va_act = "";
                $active_taux_act = "active";
                
            }
            
        if(isset($_POST['submit44']))
            {
                $solution = duree_act($_POST['val_act'], $_POST['val_nom'], $_POST['taux']);
                $active_va_act = "";
                $active_duree_act = "active";
            }


// Suite des fonctions  