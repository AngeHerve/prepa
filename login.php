<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Single - Serenity Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logofivciciom.jpg" rel="icon">





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

  <!-- ======= Header ======= -->
  <?php include ('header_con.php'); ?>


  <main id="main">

 
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3" style="margin: auto;">
            <!-- <button id="switchButton1" onclick="toggleInterface(1)">CONNEXION PAR TELEPHONE</button>
            <button id="switchButton2" onclick="toggleInterface(2)">CONNEXION PAR E-MAIL</button> -->
            
          </div>
          
          

          <div class="col-lg-6 entries interface visible" id="interface1">
            <div class=" wow fadeInUp" data-wow-delay="0.5s">
              <br>
              <div style="width: 150px;height: 75px;margin:auto">
                <img src="assets/img/logo.jpg" alt="" class="img-fluid">
              </div>
              <br> <br>
              <h2 class="mb-4 text-center" style="color:#05496E; font-weight:700;">PREPABEPCBAC</h2>
              <br>
              <div class="iconn" >
                <h3>connexion par :</h3>
                <a id="switchButton1" onclick="toggleInterface(1)" href="#" class="d-inline-flex  align-items-center rounded 
                  overflow-hidden border" style="border:2px solid #05496E;">
                  <span class="btn-lg-square" style="width: 35px; height: 35px;background-color:#05496E;">
                      <i class="bi bi-telephone-fill text-white" style="font-size: 25px;margin-left: 5px;"></i>
                  </span>
                  <span class="text fs-5 fw-medium mx-4">TELEPHONE</span>
                </a>
                <a id="switchButton2" onclick="toggleInterface(2)" href="#"  class="d-inline-flex align-items-center rounded 
                  overflow-hidden border " style="border:2px solid #05496E;">
                  <span class="btn-lg-square" style="width: 35px; height: 35px;background-color:#05496E;">
                      <i class="bi bi-envelope-fill text-white" style="font-size: 25px;margin-left: 5px;"></i>
                  </span>
                  <span class="text fs-5 fw-medium mx-4">ADRESSE MAIL</span>
                </a>
              </div>
              <br>
              <form action="login_phone.php" method ="POST" >
                  <div class="row g-3">
                    <div class="col-sm-12">
                        <div class="form-floating">
                            <input type="tel" class="form-control"
                            name="telephone_" id="accountNumber" maxlength="14" oninput="formatAccountNumber(this)" required>
                            <label for="name">Votre num. de téléphone (01 23 45 67 89)</label>
                        </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row g-3">
                    <div class="col-sm-12">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="motpasse" placeholder="Votre mot de passe" name="password_" 
                            required minlength="8" >
                            <label for="motpasse">Votre mot de passe</label>
                        </div>
                    </div>
                  </div>
                  <br>
                  <div class="col-12 text-center">
                      <button class="btn  w-100 py-3" style="background-color:#05496E; color:#fff" name="phone" type="submit">Se connecter</button>
                  </div>
                  <p></p>
                </form>
                <div class="text-center">
                  Vous n'avez pas de compte,
                  <a class="small" href="register.php">Créer votre compte!</a>                </div>
                </div>
          </div>

          <div class="col-lg-6 entries interface hidden" id="interface2">
            <div class=" wow fadeInUp" data-wow-delay="0.5s">
              <br>
              <div style="width: 150px;height: 75px;margin:auto">
                <img src="assets/img/logo.jpg" alt="" class="img-fluid">
              </div>
              <br><br>
              <h2 class="mb-4 text-center" style="color:#05496E; font-weight:700;">PREPABEPCBAC</h2>
              <br>
              <div class="iconn">
              <h3>connexion par :</h3>
                <a id="switchButton1" onclick="toggleInterface(1)" href="#" class="d-inline-flex align-items-center rounded  
                  overflow-hidden border " style="border:2px solid #05496E;">
                  <span class="btn-lg-square" style="width: 35px; height: 35px;background-color:#05496E;">
                      <i class="bi bi-telephone-fill text-white" style="font-size: 25px;margin-left: 5px;"></i>
                  </span>
                  <span class=" text fs-5 fw-medium mx-4">TELEPHONE</span>
                </a>
                <a id="switchButton2" onclick="toggleInterface(2)" href="#"  class="d-inline-flex align-items-center rounded 
                  overflow-hidden border " style="border:2px solid #05496E;">
                  <span class="btn-lg-square" style="width: 35px; height: 35px; background-color:#05496E;">
                      <i class="bi bi-envelope-fill text-white" style="font-size: 25px;margin-left: 5px;"></i>
                  </span>
                  <span class="text fs-5 fw-medium mx-4">ADRESSE MAIL</span>
                </a>
              </div>
              <br>
              <form action="login_email.php" method="post">
                <div class="row g-3">
                    <div class="col-sm-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" placeholder="Saisir adresse mail" name="email_" required>
                            <label for="name">Votre adresse mail</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="mail" placeholder="Votre mot de passe" name="password_"
                            required minlength="8">
                            <label for="mail">Votre mot de passe</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 text-center">
                    <button class="btn w-100 py-3" style="background-color:#05496E; color:#fff" type="submit" name="mail">Se connecter</button>
                </div>
                <p></p>
              </form>
                <div class="text-center">
                  Vous n'avez pas de compte,
                  <a class="small" href="register.php">Créer votre compte!</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3">

            </div>

        </div>

      </div>
    </section><!-- End Blog Single Section -->

    <style>
      .interface {
        display: none;
      }
      .visible {
        display: block;
      }
      .hidden {
        display: none;
      }
      @media (min-width: 301px) and (max-width: 451px) {
          .text {
          display: none;
        }

        .iconn { 
          margin-left: 80px;
        }
        #switchButton1
        {
          margin-right: 60px;
        }
              }
        @media screen and (max-width: 300px) {
          .text {
          display: none;
        }
        .iconn { 
          margin-left: 50px;
        }
        #switchButton1
        {
          margin-right: 40px;
        }
              }
    </style>

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
-
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script>
  function toggleInterface(interfaceNumber) {
    var interface1 = document.getElementById("interface1");
    var interface2 = document.getElementById("interface2");

    if (interfaceNumber === 1) {
      interface1.classList.remove("hidden");
      interface1.classList.add("visible");
      interface2.classList.remove("visible");
      interface2.classList.add("hidden");
    } else if (interfaceNumber === 2) {
      interface2.classList.remove("hidden");
      interface2.classList.add("visible");
      interface1.classList.remove("visible");
      interface1.classList.add("hidden");
    }
  }

  function validateForm() {

    var telephone = document.forms["myForm"]["telephone_"].value;
    var motdepasse = document.forms["myForm"]["password_"].value;
    

    // vérifier que le champ email est un email valide
     if ( telephone == '') {
      $('#message1').html('Veuillez entrer un numéro de téléphone.');
      return false;
    }        
        else {
            // Sinon, effacez le message d'erreur
            $('#message1').html('');
          }


    // vérifier que le champ mot de passe est suffisamment long
     if (motdepasse.length < 8) {
      $('#message3').html('Le mot de passe doit contenir au moins 8 caractères.');
      return false;
    }
    else {
        // Sinon, effacez le message d'erreur
        $('#message3').html('');
      }
   
    }

function isValidEmail(email) {
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function formatAccountNumber(input) {
    // Retirez tous les espaces de l'entrée de l'utilisateur
    const unformatted = input.value.replace(/\s/g, '');

    // Utilisez une expression régulière pour ajouter un espace tous les 4 caractères
    const formatted = unformatted.replace(/(\d{2})/g, '$1 ');

    // Mettez à jour la valeur de l'élément <input> avec le numéro de compte formaté
    input.value = formatted.trim();
}

</script>