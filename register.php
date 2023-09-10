<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PREPABEPCBAC - Inscription</title>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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

          <div class="col-lg-2" >
            
          </div>
          
          

          <div class="col-lg-8 entries interface visible" id="interface1">
            <div class=" wow fadeInUp" data-wow-delay="0.5s">
              <br>
              <div style="width: 150px;height: 75px;margin:auto">
                <img src="assets/img/logo.jpg" alt="" class="img-fluid">
              </div>
              <br><br>
              <h2 class="mb-4 text-center" style="color:#05496E; font-weight:700;">PREPABEPCBAC</h2>
                  
                <form name="myForm" action='register_insert.php' method="post" onsubmit="return validateForm()">
                  <div class="row g-3">
                    <div class="col-sm-4" style="margin: auto;">
                      <div class="form-floating">
                        <select class="form-select" name="subject-type" id="classe" >
                          <option value="3eme" selected> 3eme</option>
                          <option value="tleC" >Terminale C</option>
                          <option value="tleD" >Terminale D</option>
                        </select>
                        <label for="classe">Selectionner votre niveau</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="nom" id="name" placeholder="Votre numéro de téléphone">
                            <label for="name">Votre nom</label>
                        </div>
                        <div id="message1" style="color:red;"></div>

                    </div>
                    <div class="col-sm-6">
                      <div class="form-floating">
                          <input type="text" class="form-control" name="pnoms" id="prenoms_" placeholder="Votre mot de passe">
                          <label for="prenoms_">vos prénoms</label>
                      </div>
                      <div id="message2" style="color:red;"></div>

                  </div>
                  </div>
                  <br>
                  <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="email" id="mail" placeholder="Votre mot de passe">
                            <label for="mail">Votre adresse mail</label>
                        </div>
                        <div id="message3" style="color:red;"></div>

                    </div>
                    <div class="col-sm-6">
                      <div class="form-floating">
                          <input type="tel" class="form-control" name="phone"
                          oninput="formatAccountNumber(this)" id="accountNumber" maxlength="14" >
                          <label for="telephone">Votre num. de téléphone (01 23 45 67 89)</label>
                      </div>
                      <div id="message4" style="color:red;"></div>

                    </div>
                    
                  </div>
                  <br>
                  <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="password" class="form-control" name="motpasse" id="motpasse" placeholder="Votre mot de passe">
                            <label for="motpasse">Votre mot de passe</label>
                        </div>
                        <div id="message5" style="color:red;"></div>

                    </div>
                    <div class="col-sm-6">
                      <div class="form-floating">
                          <input type="password" class="form-control" name="cmotpasse" id="cmotpasse" placeholder="Votre mot de passe">
                          <label for="cmotpasse">Votre mot de passe</label>
                      </div>
                      <div id="message6" style="color:red;"></div>

                    </div>
                  </div>
                  
                  <br>
                  <div class="row g-3">
                    <div class="col-sm-4" style="margin: auto;">
                      <div class="form-floating">
                        <div id="message7" style="color:red;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                      <button class="btn w-100 py-3" style="background-color:#05496E; color:#fff"  name="inscrire" type="submit">S'enregistrer</button>
                  </div>
                </form>
                <br>
                <div class="text-center">
                  Vous avez un compte,
                  <a class="small" href="login.php">Connectez-vous!</a>
                </div>
            </div>
          </div>

            <div class="col-lg-2">

            </div>

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
  function isValidEmail(email) {
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
  function validateForm() {

    var nom = document.forms["myForm"]["nom"].value;
    var prenoms = document.forms["myForm"]["pnoms"].value;
    var email = document.forms["myForm"]["mail"].value;
    var telephone = document.forms["myForm"]["phone"].value;
    var motdepasse = document.forms["myForm"]["motpasse"].value;
    var motdepasse_confirm = document.forms["myForm"]["cmotpasse"].value;


    
    // var classe = $('#classe').val();
        // vérifier que le champ nom n'est pas vide
    if (nom == '') {
      $('#message1').html('Veuillez entrer votre nom.');
      return false ;
    }
        else {
        // Sinon, effacez le message d'erreur
        $('#message1').html('');
      }
        // vérifier que le champ prénoms n'est pas vide
     if (prenoms == '') {
      $('#message2').html('Veuillez entrer votre prénom.');
      return false;
    }
        else {
        // Sinon, effacez le message d'erreur
        $('#message2').html('');
      }
    // vérifier que le champ email est un email valide
     if (!isValidEmail(email ) && telephone == '') {
      $('#message3').html('Veuillez entrer une adresse email valide ou un numéro de téléphone.');
      return false;
    }        
        else {
            // Sinon, effacez le message d'erreur
            $('#message3').html('');
          }
    // vérifier que le champ telephone est valide
     if (email == "") {
      $('#message4').html('Veuillez entrer une adresse mail.');
      return false;
    }
    else {
        // Sinon, effacez le message d'erreur
        $('#message4').html('');
      }
      if (telephone =="" && email == "") {
      $('#message9').html('Veuillez entrer un numéro valide valide (10 chiffres) ou une adresse mail.');
      return false;
    }
    else {
        // Sinon, effacez le message d'erreur
        $('#message9').html('');
      }

    // vérifier que le champ mot de passe est suffisamment long
     if (motdepasse.length < 8) {
      $('#message5').html('Le mot de passe doit contenir au moins 8 caractères.');
      return false;
    }
    else {
        // Sinon, effacez le message d'erreur
        $('#message5').html('');
      }
    // vérifier que le champ de confirmation de mot de passe est suffisamment long
     if (motdepasse_confirm.length < 8) {
      $('#message6').html('Le mot de passe de confirmation doit contenir au moins 8 caractères.');
      return false;
    }
    else {
        // Sinon, effacez le message d'erreur
        $('#message6').html('');
      }
    // vérifier que le champ confirmation de mot de passe correspond au mot de passe
     if (motdepasse_confirm !== motdepasse) {
      $('#message7').html('La confirmation du mot de passe ne correspond pas au mot de passe.');
      return false;
    }
    else {
        // Sinon, effacez le message d'erreur
        $('#message7').html('');
      }
    
        
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