<?php

session_start();

if(!isset($_SESSION['logged_in']))
{
    header('location:../login.php');
    exit();
}
$_SESSION['id'];
$_SESSION['nom'];

include('../connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PREPABEPCBAC - Geometrie</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../assets/img/logofivciciom.jpg" rel="icon">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
        <li><a href="../accueil.php">Dashboard</a></li>
        <li><a href="geometrie.php">Geometrie</a></li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-4">

          <?php include ('menu.php') ?>

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
              
              <div class="entry-content">
                <div class="product">
                    <div class="row fadeInUp " data-wow-delay="0.5s">
                      <?php
                        $req = mysqli_query($conn, "SELECT * FROM `anal_3eme` LIMIT 10"); 
                        while ($row = mysqli_fetch_assoc($req)) {
                        ?>
                      <div class="col-lg-4 col-sm-4 col-6" style="display: none;">
                        <a href="exercices/geometrie.php?id=<?= $row['id_ana']?>" class="d-block product-item rounded " style="margin-bottom: 15px;">
                            <img src="../assets/img/icons/stat.png" class='img-fluid' alt="" style="width:250px;height:130px;">
                              <?php
                              $row['titre'];
                              $limite_caracteres = 40;
                              if (strlen($row['titre']) > $limite_caracteres) {
                                  $titre = substr($row['titre'], 0, $limite_caracteres) . "...";
                              } else {
                                  $titre = $row['titre'];
                              }
                            ?>
                              <h6 style="font-size:17px;color:#05496E; font-weight:600;"><?php echo $titre;?> </h6>
                          
                            <?php
                              $row['descr'];
                              $lim_caracteres = 60;
                              if (strlen($row['descr']) > $lim_caracteres) {
                                  $descrp = substr($row['descr'], 0, $lim_caracteres) . "...";
                              } else {
                                  $descrp = $row['descr'];
                              }
                            ?>
                            <p class='text-dark' style="font-size: 14px;">
                              <?php echo $descrp;?>
                            </p>
                        </a>
                      </div>
                      <?php
                        }
                        ?>
                    </div>
                </div>
              </div>

            <div class="load-wrap text-center">
              <button id="voirPlusBtn" class=" btn-lg " style='color:#fff;background-color:#05496E; padding:10px 20px;'>Voir plus</button>
            </div>

            </article><!-- End blog entry -->
           

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include ('../footer.php'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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


        // voir plus
        $(document).ready(function(){
    $('.col-lg-4').slice(0,4).show()
    $('.btn-lg').on('click',function(){
        $('.col-lg-4:hidden').slice(0,3).slideDown('show')
        if($('.col-lg-4:hidden').length ==0 ){
            // $(this).text('Plus d\'exercices pour le moment');
            $(".btn-lg").fadeOut(); 
        }
        return false;
    });
    });
    </script>

