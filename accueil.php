<?php

session_start();

if(!isset($_SESSION['logged_in']))
{
    header('location:login.php');
    exit();
}
$_SESSION['id'];
$_SESSION['nom'];
$_SESSION['class'];

include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PREPABEPCBAC - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Serenity - v4.10.1
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <?php include ('header.php') ?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="accueil.php">Dashboard</a></li>
          <!-- <li> <?php echo $_SESSION['class'].' , '.$_SESSION['nom']; ?></li> -->
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-4">

            <div class="sidebar ">
              
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
                        <option value="mathC"selected >Mathématiques serie C</option>
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
                        <option selected  value="mathD" >Mathématiques serie C/D</option>
                        <option  value="physicsD">Physiques&amp;Chimies serie C/D</option>
                    </select>
                    <label for="service">Choisir la matière/le niveau</label>
                    </div>
                <?php } ?>
              </div>
        <br>
              <div class="chpitres">
                <h2>CHAPITRES</h2>
                <div class='lien1'>
                  <!-- MATH 3EME -->
                  <a class="moi"  href="math_3eme/geometrie.php" > <p class="chapter math3 btn btn-sm 
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Géométrie</p></a>
                  <a class="moi" href="math_3eme/racines_carres.php" > <p class="chapter math3 btn btn-sm
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Racines carrés</p> </a>
                  <a class="moi" href="math_3eme/applications_affines.php"> <p class="chapter math3 btn btn-sm 
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Applications affines</p> </a>
                  <a class="moi" href="math_3eme/calcul_litéral.php"> <p class="chapter math3 btn btn-sm 
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Calcul litéral</p> </a>
                  <a class="moi" href="math_3eme/calcul_numerique.php"> <p class="chapter math3 btn btn-sm
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Calcul numérique</p> </a>
                  <a class="moi" href="math_3eme/equations_inéquations.php"> <p class="chapter math3 btn btn-sm 
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Equations et inéquations</p> </a>
                  <a class="moi" href="math_3eme/Sys_equations_inéquations.php"> <p class="chapter math3 btn btn-sm
                  " style='background-color:#FFE4B5; color:#05496E;font-weight:600;'>Systemes d'équations et d'inéquations</p> </a>
                </div>

                  <!-- PHYSIQUES 3EME -->
                <div class="lien2">
                  <a class="moi" href="phy_chim_3eme/lentille.php"> <p class="chapter physics3 btn btn-sm" style="background-color:#ADD8E6; color:#05496E;font-weight:600;">Lentilles</p> </a>
                  <a class="moi" href="phy_chim_3eme/mecanique.php"> <p class="chapter physics3 btn btn-sm" style="background-color:#ADD8E6; color:#05496E;font-weight:600;">Mécaniques</p> </a>
                  <a class="moi" href="phy_chim_3eme/electricite.php"> <p class="chapter physics3 btn btn-sm" style="background-color:#ADD8E6; color:#05496E;font-weight:600;">Electricités</p> </a>
                  <a class="moi" href="phy_chim_3eme/chimie.php"> <p class="chapter physics3 btn btn-sm" style="background-color:#ADD8E6; color:#05496E;font-weight:600;">Chimies</p> </a>
                </div>

                  <!-- MATH SERIE C -->
                <div class="lien3">
                  <a class="moi" href="math_Tte_C/geometries.php"> <p class="chapter mathC btn btn-sm" style="background-color:#90EE90; color:#05496E;font-weight:600;">Géométrie</p> </a>
                  <a class="moi" href="math_Tte_C/fonctions.php"> <p class="chapter mathC btn btn-sm" style="background-color:#90EE90; color:#05496E;font-weight:600;">Fonctions</p> </a>
                  <a class="moi" href="math_Tte_C/arithmetiques.php"> <p class="chapter mathC btn btn-sm" style="background-color:#90EE90; color:#05496E;font-weight:600;">Arithmétiques</p> </a>
                </div>

                  <!-- MATH SERIE C/D -->  
                <div class="lien4">
                  <a class="moi" href="math_Tte_C_D/"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Géométries</p> </a>
                  <a class="moi" href="math_Tte_C_D/fonctions.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Fonctions</p> </a>
                  <a class="moi" href="math_Tte_C_D/probabilites.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Probabilités</p> </a>
                  <a class="moi" href="math_Tte_C_D/suites_num.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Suites Numériques</p> </a>
                  <a class="moi" href="math_Tte_C_D/statistiques.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Statistiques</p> </a>
                  <a class="moi" href="math_Tte_C_D/nomb_complexes.php"> <p class="chapter mathD btn btn-sm" style="background-color:#E6E6FA; color:#05496E;font-weight:600;">Nombres Complexes</p> </a>
                </div>

                <div class="lien5">
                  <!-- PHYSIQUES C/D -->
                  <a class="moi" href="phy_chim_tle_C_D/mecanique.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Mécaniques</p> </a>
                  <a class="moi" href="phy_chim_tle_C_D/electricite.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Electricités</p> </a>
                  <a class="moi" href="phy_chim_tle_C_D/electro_magnetique.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Electro-magnétique</p> </a>
                  <a class="moi" href="phy_chim_tle_C_D/chim_gene.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Chimie Générales</p> </a>
                  <a class="moi" href="phy_chim_tle_C_D/chim_mine.php"> <p class="chapter physicsD btn btn-sm" style="background-color:#E0FFFF; color:#05496E;font-weight:600;">Chimie Minérales</p> </a>
                </div>
              </div>
            </div>

          </div><!-- End blog sidebar -->

          <style>
            @media screen and (max-width: 991px) {
              .sidebar {
                display: flex;
                flex-direction: column;
              }


              .choix {
                /* Set both sections to take full width of the container */
                width: 60%;
                margin: auto;
              }

              .choix h2,
              .chpitres h2 {
                /* You may want to adjust styles for the headings */
                font-size: 15px;
              }

              .choix .form-floating .form-select,

              .chpitres .moi .chapter {
                /* You may want to adjust styles for the form and chapter links */
                font-size: 15px;
              }

              .lien1, .lien2, .lien3, .lien4, .lien5{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
              }
              .lien1 .moi, .lien2 .moi, .lien3 .moi, .lien4 .moi, .lien5 .moi {
                margin-right: 10px;
              }
            }
          </style>

          <div class="col-lg-8 entries">

            <article class=" entry-single">

              <h2 class="entry-title">
                <p>EXERCICES</p>
              </h2>
              
              <div class="entry-content" >

                <div class=" product ">
                  <div class=" ">
                      
                      <div class=" row fadeInUp" data-wow-delay="0.5s">
                          <a href="" class="d-block product-item rounded col-lg-4 col-sm-4 col-6" style="margin-bottom:15px;">
                              <img src="assets/img/icons/stat.png" class='img-fluid' alt="" style="width:250px;height:130px;">
                              <div class="bg-white exo shadow-sm  p-3 position-relative mt-n3 mx-1" style='margin-top:30px;'>
                                  <h6 class="text-info" style="font-size:17px;">Se former à la persistance des données avec Python</h6>
                                  <span class="text-body" style="font-size: 14px;">Adobe InDesign CC 2023 : De Débutant à Avancé Adobe InDesign CC 2023 : De Débutant à Avancé</p></span>
                              </div>
                          </a>

                          <a href="" class="d-block product-item rounded col-lg-4 col-sm-4 col-6" style="margin-bottom:15px;">
                              <img src="assets/img/icons/stat.png" class='img-fluid' alt="" style="width:250px;height:130px;">
                              <div class="bg-white shadow-sm  p-3 position-relative mt-n3 mx-1" style='margin-top:30px;'>
                                  <h6 class="text-info" style="font-size:17px;">Se former à la persistance des données avec Python</h6>
                                  <span class="text-body" style="font-size: 14px;">Adobe InDesign CC 2023 : De Débutant à Avancé Adobe InDesign CC 2023 : De Débutant à Avancé</p></span>
                              </div>
                          </a>
                          
                          <a href="" class="d-block product-item rounded col-lg-4 col-sm-4 col-6" style="margin-bottom:15px;">
                              <img src="assets/img/icons/stat.png" class='img-fluid' alt="" style="width:250px;height:130px;">
                              <div class="bg-white shadow-sm  p-3 position-relative mt-n3 mx-1" style='margin-top:30px;'>
                                  <h6 class="text-info" style="font-size:17px;">Se former à la persistance des données avec Python</h6>
                                  <span class="text-body" style="font-size: 14px;">Adobe InDesign CC 2023 : De Débutant à Avancé Adobe InDesign CC 2023 : De Débutant à Avancé</p></span>
                              </div>
                          </a>

                          <a href="" class="d-block product-item rounded col-lg-4 col-sm-4 col-6" style="margin-bottom:15px;">
                              <img src="assets/img/icons/stat.png" class='img-fluid' alt="" style="width:250px;height:130px;">
                              <div class="bg-white shadow-sm  p-3 position-relative mt-n3 mx-1" style='margin-top:30px;'>
                                  <h6 class="text-info" style="font-size:17px;">Se former à la persistance des données avec Python</h6>
                                  <span class="text-body" style="font-size: 14px;">Adobe InDesign CC 2023 : De Débutant à Avancé Adobe InDesign CC 2023 : De Débutant à Avancé</p></span>
                              </div>
                          </a>
                      </div>
                  </div>
                </div>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Serenity</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


<script>
  const subjectTypeSelect = document.getElementById('subject-type-select');
  const math_3_Chapters = document.querySelectorAll('.chapter.math3');
  const physics_3_Chapters = document.querySelectorAll('.chapter.physics3');
  const math_C_Chapters = document.querySelectorAll('.chapter.mathC');
  const math_D_Chapters = document.querySelectorAll('.chapter.mathD');
  const physics_C_Chapters = document.querySelectorAll('.chapter.physicsC');
  const physics_D_Chapters = document.querySelectorAll('.chapter.physicsD');



  // Masquer tous les chapitres au chargement de la page
  //  MATH 3EME 
  math_3_Chapters.forEach(function(chapter) {
    chapter.style.display = 'block';
  });
  physics_3_Chapters.forEach(function(chapter) {
    chapter.style.display = 'none';
  });
  math_C_Chapters.forEach(function(chapter) {
    chapter.style.display = 'none';
  });

  math_D_Chapters.forEach(function(chapter) {
    chapter.style.display = 'none';
  });
  physics_D_Chapters.forEach(function(chapter) {
    chapter.style.display = 'none';
  });

  subjectTypeSelect.addEventListener('change', function() {
    if (subjectTypeSelect.value === 'math3') {
       //  MATH 3EME 
  math_3_Chapters.forEach(function(chapter) {
  chapter.style.display = 'block';
  });
  physics_3_Chapters.forEach(function(chapter) {
    chapter.style.display = 'none';
  });
  math_C_Chapters.forEach(function(chapter) {
    chapter.style.display = 'none';
  });
  math_D_Chapters.forEach(function(chapter) {
    chapter.style.display = 'none';
  });
  physics_D_Chapters.forEach(function(chapter) {
    chapter.style.display = 'none';
  });


    } else if (subjectTypeSelect.value === 'physics3') {
      // PHYSIQUES 3EME
    math_3_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    physics_3_Chapters.forEach(function(chapter) {
      chapter.style.display = 'block';
    });
    math_C_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    math_D_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    physics_D_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    }

    else if (subjectTypeSelect.value === 'mathC') {
      // MATH SERIE C
      math_3_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    physics_3_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    math_C_Chapters.forEach(function(chapter) {
      chapter.style.display = 'block';
    });
    math_D_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    physics_D_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    }

    else if (subjectTypeSelect.value === 'mathD') {
      // MATH SERIE D
      math_3_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    physics_3_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    math_C_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    math_D_Chapters.forEach(function(chapter) {
      chapter.style.display = 'block';
    });
    physics_D_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    }


    else if (subjectTypeSelect.value === 'physicsD') {
      // PHYSIQUES D
      math_3_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    physics_3_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    math_C_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    math_D_Chapters.forEach(function(chapter) {
      chapter.style.display = 'none';
    });
    physics_D_Chapters.forEach(function(chapter) {
      chapter.style.display = 'block';
    });
    }
  });

  
    // document.addEventListener('DOMContentLoaded', function() {
    //     hideAllElements();
    // });

    function hideAllElements() {
        var elements = document.querySelectorAll('#content div');
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = 'none';
        }
    }

    function showElements(className) {
        hideAllElements();
        var elements = document.querySelectorAll('#content .' + className);
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = 'block';
        }
    }
</script>