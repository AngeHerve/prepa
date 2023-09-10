<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUPS!!!! Erreur de saisie</title>

          <!-- Favicons -->
  <link href="assets/img/logofivciciom.jpg" rel="icon">

<!-- Vendor CSS Files -->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
    <style>

        #main {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f6f7f84f;
            padding: 0;
            margin-top: 70px;
            z-index: 3;
            position: relative;
            }

        .containers {
            padding-top: 150px;
            padding-bottom: 250px;
        }

        h1 {
            font-size: 80px;
            color: #e74c3c;
        }

        p {
            font-size: 40px;
            color: #333;
        }

        #btnRetour
        {
            background-color: #05496E;
            color:#fff ;
        }

    </style>
</head>
<body>

    <?php include ('header_con.php') ?> 

    <main id="main">
        <div class="containers">
            <h1>OUPS!!!!</h1>
            <p>Erreur de saisie.</p>
            <button class="btn btn-lg" id="btnRetour">Retour</button>
        </div>
    </main>

    <?php include ('footer.php'); ?>
</body>
</html>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
        document.getElementById("btnRetour").addEventListener("click", function() {
            // Revenir à la page précédente dans l'historique du navigateur
            window.history.back();
        });
    </script>
