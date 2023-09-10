
<?php

include('../connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Single - Serenity Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Collapse -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="../sets/vendor/aos/aos.css" rel="stylesheet">
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

  <?php include ('header_con.php') ?>


  <main id="main">
                  <?php
                    if(isset($_GET['id'])){
                        if (is_numeric($_GET['id'])) {
                            # code...
                        
                        $pre =(int)$_GET['id'];
               
                    $req = mysqli_query($conn,"SELECT * FROM `proba_td` WHERE id_td = $pre");
                    $count1 = mysqli_num_rows($req);
                    if ($count1 == 1) {
                    while($row = mysqli_fetch_assoc($req)){
                  ?>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="../index.php">Home</a></li>
          <li><a href="g_probabilites.php?id=<?= $row['id_td']?>"><?= $row['titre']; ?></a></li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
        
          <div class="col-lg-8 col-12 entries">

            <blockquote class="col-md-8" style="margin: auto; padding: 25px;">
              <p>
                <?= $row['titre']; ?>
              </p>
            </blockquote>

            <article class="entry entry-single" style="margin-top: 20px;background-color: #f6f7f870;">

              <h2 class="entry-title">
                
              </h2>

              <div class="entry-content">
                <p>
                  
                  <?= $row['exercice']?>
                </p>

                <button type="button" class="btn btn-danger" style=" color:#ffff;" data-toggle="collapse" data-target="#demo">
                CORRECTION
                </button>
                <div id="demo" class="collapse">
                <br>
                  <?= $row['correction']?>
                </div>
                
              </div>

            </article><!-- End blog entry -->

            

          </div><!-- End blog entries list -->

          <div class="col-lg-4 col-12">

            <div class="sidebar" style="background-color:#f6f7f870;">

              <form action="">
                <h3 class="sidebar-title">Note l'exercice :</h3>
                <div class="sidebar-item search-form">
                  <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"></label>
                  </div>
                  <p id="rating-message"></p>

                </div><!-- End sidebar search formn-->

                <style>
                  .rating {
                    display: inline-block;
                    unicode-bidi: bidi-override;
                    direction: rtl;
                  }

                  .rating > input {
                    display: none;
                  }

                  .rating > label:before {
                    content: '\2605';
                    margin: 5px;
                    font-size: 24px;
                  }

                  .rating > input:checked ~ label:before {
                    color: gold;
                  }

                </style>

                <h3 class="sidebar-title">Commentaire sur l'exercice :</h3>
                <div class="sidebar-item categories">
                  <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
              </form>

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
      <?php
                
              } 
          } else {?>
              <div class="card shadow h-100 py-2">
                  <div class="text-uppercase font-weight-bold text-center text-blue ">aucun résultat trouvé.</div>
              </div>
              <?php } 
          } else {?>
              <div class="card shadow h-100 py-2">
                  <div class="text-uppercase font-weight-bold text-center text-blue ">aucun résultat trouvé.</div>
              </div>
              <?php
              }
              }         
              ?>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <?php include ('../footer.php'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
        $('input[type="radio"]').click(function() {
          var ratingValue = $(this).val();
          $('#rating-message').text('Votre note :' + ratingValue + ' étoiles.');
        });

  </script>