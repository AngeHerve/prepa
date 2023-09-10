<div class="sidebar " style='background-color:#f6f7f870'>
              
              <div class="choix">
                <h2>MATIERES</h2>
                <?php 
                if ($_SESSION['class'] == '3eme') { ?>
                 
                    <div class="form-floating">
                    <select class="form-select sercice" name="subject-type" id="subject-type-select" >
                        <option value="math3" selected>Mathématiques 3eme</option>
                        <option value="physics3">Physiques&amp;Chimies 3eme</option>
                        <option disabled value="mathC" >Mathématiques serie C</option>
                        <option disabled value="mathD" >Mathématiques serie C/D</option>
                        <option disabled value="physicsD">Physiques&amp;Chimies serie C/D</option>
                    </select>
                    <label for="service">Choisir la matière/le niveau</label>
                    </div>
                <?php }
                elseif ($_SESSION['class'] == 'tleC') { ?>
                  
                    <div class="form-floating">
                    <select class="form-select sercice" name="subject-type" id="subject-type-select" >
                        <option disabled value="math3" >Mathématiques 3eme</option>
                        <option disabled value="physics3">Physiques&amp;Chimies 3eme</option>
                        <option selected value="mathC" >Mathématiques serie C</option>
                        <option  value="mathD" >Mathématiques serie C/D</option>
                        <option  value="physicsD">Physiques&amp;Chimies serie C/D</option>
                    </select>
                    <label for="service">Choisir la matière/le niveau</label>
                    </div>
                <?php }
                elseif ($_SESSION['class'] == 'tleD') { ?>
                    
                    <div class="form-floating">
                    <select class="form-select sercice" name="subject-type" id="subject-type-select" >
                        <option disabled value="math3" >Mathématiques 3eme</option>
                        <option disabled value="physics3">Physiques&amp;Chimies 3eme</option>
                        <option disabled value="mathC" >Mathématiques serie C</option>
                        <option selected value="mathD" >Mathématiques serie C/D</option>
                        <option  value="physicsD">Physiques&amp;Chimies serie C/D</option>
                    </select>
                    <label for="service">Choisir la matière/le niveau</label>
                    </div>
                <?php } ?>
                
                
              </div>
                   
                    <br>
              <div class="chpitres">
                <h2>CHAPITRES</h2>
                <p class="moi">(*) En cours de dévéloppement</p>

                <div class='lien1'>
                  <!-- MATH 3EME -->
                  <a class="moi"  href="geometrie.php" > <p class="chapter math3 btn btn-sm 
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Géométrie</p></a>
                  <a class="moi " href="racines_carres.php" > <p class="chapter math3 btn btn-sm
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Racines carrés</p> </a>
                  <a class="moi disabled-link" href="applications_affines.php" > <p class="chapter math3 btn btn-sm 
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Applications affines *</p> </a>
                  <a class="moi disabled-link" href="calcul_litéral.php" > <p class="chapter math3 btn btn-sm 
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Calcul litéral *</p> </a>
                  <a class="moi disabled-link" href="calcul_numerique.php"> <p class="chapter math3 btn btn-sm
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Calcul numérique *</p> </a>
                  <a class="moi disabled-link" href="equations_inéquations.php"> <p class="chapter math3 btn btn-sm 
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Equations et inéquations *</p> </a>
                  <a disabled class="moi disabled-link" href="Sys_equations_inéquations.php" > <p class="chapter math3 btn btn-sm
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Systemes d'équations et d'inéquations *</p> </a>

                </div>

                <!-- PHYSIQUES 3EME -->
                <div class="lien2">
                  <a class="moi disabled-link" href="../phy_chim_3eme/lentille.php"> <p class="chapter physics3 btn btn-sm" style="background-color:#ADD8E6; color:#05496E;font-weight:600;">Lentilles *</p> </a>
                  <a class="moi " href="../phy_chim_3eme/mecanique.php"> <p class="chapter physics3 btn btn-sm" style="background-color:#ADD8E6; color:#05496E;font-weight:600;">Mécaniques</p> </a>
                  <a class="moi disabled-link" href="../phy_chim_3eme/electricite.php"> <p class="chapter physics3 btn btn-sm" style="background-color:#ADD8E6; color:#05496E;font-weight:600;">Electricités *</p> </a>
                  <a class="moi" href="../phy_chim_3eme/chimie.php"> <p class="chapter physics3 btn btn-sm" style="background-color:#ADD8E6; color:#05496E;font-weight:600;">Chimies</p> </a>
                </div>

                  <!-- MATH SERIE C -->
                <div class="lien3">
                  <a class="moi disabled-link" href="../math_Tte_C/geometries.php"> <p class="chapter mathC btn btn-sm" style="background-color:#90EE90; color:#05496E;font-weight:600;">Géométrie *</p> </a>
                  <a class="moi disabled-link" href="../math_Tte_C/fonctions.php"> <p class="chapter mathC btn btn-sm" style="background-color:#90EE90; color:#05496E;font-weight:600;">Fonctions *</p> </a>
                  <a class="moi disabled-link" href="../math_Tte_C/arithmetiques.php"> <p class="chapter mathC btn btn-sm" style="background-color:#90EE90; color:#05496E;font-weight:600;">Arithmétiques *</p> </a>
                </div>

                  <!-- MATH SERIE C/D -->  
                  <div class="lien4">
                  <a class="moi" href="../math_Tte_C_D/"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Géométries</p> </a>
                  <a class="moi" href="../math_Tte_C_D/fonctions.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Fonctions</p> </a>
                  <a class="moi" href="../math_Tte_C_D/probabilites.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Probabilités</p> </a>
                  <a class="moi disabled-link" href="../math_Tte_C_D/suites_num.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Suites Numériques *</p> </a>
                  <a class="moi disabled-link" href="../math_Tte_C_D/statistiques.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Statistiques *</p> </a>
                  <a class="moi disabled-link" href="../math_Tte_C_D/nomb_complexes.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Nombres Complexes *</p> </a>
                </div>

                <div class="lien5">
                  <!-- PHYSIQUES C/D -->
                  <a class="moi" href="../phy_chim_tle_C_D/mecanique.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Mécaniques</p> </a>
                  <a class="moi disabled-link" href="../phy_chim_tle_C_D/electricite.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Electricités *</p> </a>
                  <a class="moi disabled-link" href="../phy_chim_tle_C_D/electro_magnetique.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Electro-magnétique *</p> </a>
                  <a class="moi" href="../phy_chim_tle_C_D/chim_gene.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Chimie Générales</p> </a>
                  <a class="moi" href="../phy_chim_tle_C_D/chim_mine.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Chimie Minérales</p> </a>
                </div>
              </div>
            </div>

            <style>
              .disabled-link {
                  pointer-events: none; /* Disable mouse events */
                  opacity: 0.6; /* Set the opacity to make it look disabled */
                  cursor: not-allowed; /* Show a "not-allowed" cursor on hover */
                }
            </style>