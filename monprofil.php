<?php

session_start();

if(!isset($_SESSION['logged_in']))
{
    header('location:login.php');
    exit();
}
$user = $_SESSION['id'];
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
  <link href="assets/img/logofivciciom.jpg" rel="icon">

  <!-- Google Fonts -->
  <link href="assets/img/logofivciciom.jpg" rel="icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<link href="sets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

 <?php include ('header.php') ?>

  <main id="main">
    <?php
    $req ="SELECT*FROM utilisateurs where id = $user";
    $result = mysqli_query($conn, $req);

    if(mysqli_num_rows($result) > 0){
        while($har = mysqli_fetch_assoc($result)){
    ?>

        <section id="contact" class="contact">
        <div class="container">


          <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0" >
          <div class="text-center"  style='margin-top:10px;'><button class="btn btn-dark" id="btnRetour" style=" color:#fff;"
                  ><i class="bi bi-arrow-left-circle"></i> RETOUR</button></div>
          </div>

            <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
              <br>

            <h2 class="text-center">Mes informations personnelles</h2>

                <div  class="php-email-form">
                <div class="form-group mt-3 col-lg-8">
                    <input type="text" class="form-control" value="<?php echo $har['classe']; ?>" disabled>
                </div>
                <div class="form-group mt-3 col-lg-8">
                <input type="text" class="form-control" value="<?php echo $har['nom']; ?>"  disabled>
                </div>
                <div class="form-group mt-3 ">
                <input type="text" class="form-control" value="<?php echo $har['prenoms']; ?>" disabled>
                </div>
                <div class="form-group mt-3">
                    <input type="email" class="form-control" value="<?php echo $har['email']; ?>" disabled >
                </div>
                <div class="form-group mt-3 col-lg-8">
                <input type="tel" class="form-control" value="<?php echo $har['telephone']; ?>" disabled >
                </div>
                <div class="text-center"><button class="btn btn-info " style=" color:#ffff;" data-toggle="collapse" 
                data-target="#demo"><i class="bi bi-pencil-square"></i> Modifier</button></div>
        </div>

                
                <div id="demo" class="collapse">
                  <br>
                    <form  class="php-email-form" id='users_infos' method='post'>
                    <div class="form-group mt-3 col-lg-8">
                        <input type="text" class="form-control"  value="<?php echo $har['classe']; ?>" disabled>
                    </div>
                    <div class="form-group mt-3 col-lg-8">
                    <input type="text" class="form-control" name="nom" value="<?php echo $har['nom']; ?>"  >
                    </div>
                    <div class="form-group mt-3 ">
                    <input type="text" class="form-control" name="pnoms" value="<?php echo $har['prenoms']; ?>" >
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" value="<?php echo $har['email']; ?>"  >
                    </div>
                    <div class="form-group mt-3 col-lg-8">
                    <input type="tel" class="form-control" name="phone" value="<?php echo $har['telephone']; ?>"  >
                    </div>
                    <div class="col-6 text-center">
                      <button  class="btn w-100 py-3" style="background-color:#2E8B57; color:#fff"  
                      type="submit" id="valide1"><i class="bi bi-check2-circle"></i> Valider</button>
                    </div>
                    </form>

                    <p style='color:green; font-size:15px;' id="user-message1"></p>
                </div>

            </div>

            <div class="col-lg-6" data-aos="fade-right" style='margin-top:50px;'>

              <div style='margin:auto;'>
                <br>

                <div class="text-center"  style='margin:auto;'><button class="btn btn-primary " style=" color:#ffff;" data-toggle="collapse" 
                  data-target="#motpasse"><i class="bi bi-pencil-square"></i> Modifier mon mot de passe</button></div>

                  <div id="motpasse" class="collapse ">
                    <br>
                    <form id="update_passw" action="" method="post" >
                      <div class="col-lg-8" >
                          <div class='row'>
                              <div class='form-group'>
                                  <input type="password" class="form-control form-control-user" id='motdepasse'
                                      name="motdepasse_" id="exampleInputPassword" placeholder="Mot de passe">    
                              </div>
                              <div id="message1" style="color:red;"></div>
                          <div>
                          <div class='row'>
                              <div class="form-group">    
                                  <input type="password" class="form-control form-control-user" id='conf_motpasse'
                                      name="motdepasse__" id="exampleRepeatPassword" placeholder="Confirmation du mot de passe">
                              </div>
                              <div id="message2" style="color:red;"></div>
                              <div id="message3" style="color:red;"></div>
                          </div>
                          <p style='color:green; font-size:15px;' id="user-message1"></p>

                      </div>
                      <div class="col-6 text-center">
                        <button  class="btn w-100 py-3" style="background-color:#2E8B57; color:#fff"  
                        type="submit" id="valide2"><i class="bi bi-check2-circle"></i> Valider</button>
                      </div>
                    </form>

                    <p style='color:green; font-size:15px;' id="user-message2"></p>

                  </div>
                  
                </div>
              
                
            </div>

          </div>

        </div>
        </section>
    <?php
    }
    }
    mysqli_close($conn);
    ?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include ('footer.php'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    document.getElementById("btnRetour").addEventListener("click", function() {
        // Revenir à la page précédente dans l'historique du navigateur
        window.history.back();
    });
    $(document).ready(function() {
        $("#users_infos").submit(function(event) {
          event.preventDefault(); // Prevent default form submission

          // Get form data
          var formData = $(this).serialize();
          $.ajax({
              url:"update_name.php",
              method:"POST",
              data:formData,
              success:function(data)
              {
                $("#user-message1").text("Vos informations ont été modifiées avec succès");
                document.getElementById("valide1").disabled = true;

                setTimeout(function() {
                  $("#user-message1").text("");

                  // Rechargement de la page après 3 secondes
                  setTimeout(function() {
                    location.reload();
                  }, 3000);
                }, 2000);
              }
          });
        });
      });




      $(document).ready(function() {
        $("#update_passw").submit(function(event) {
          event.preventDefault(); // Prevent default form submission

          const motdepasse = document.getElementById("motdepasse").value;
          const conf_motpasse = document.getElementById("conf_motpasse").value;
              if (motdepasse.length < 8) {
                document.getElementById("message1").textContent = "Le mot de passe doit contenir au moins 8 caractères.";
                return false;
              } else {
                document.getElementById("message1").textContent = "";
              }

              if (conf_motpasse.length < 8) {
                document.getElementById("message2").textContent = "Le mot de passe de confirmation doit contenir au moins 8 caractères.";
                return false;
              } else {
                document.getElementById("message2").textContent = "";
              }

              if (conf_motpasse !== motdepasse) {
                document.getElementById("message2").textContent = "La confirmation du mot de passe ne correspond pas au mot de passe.";
                return false;
              } else {
                document.getElementById("message2").textContent = "";
              }

          // Get form data
          var formData = $(this).serialize();

          // Perform AJAX request
          $.ajax({
              url:"update_pass.php",
              method:"POST",
              data:formData,
              success:function(data)
              {
                $("#user-message2").text("Votre mot de passe a été modifié avec success");
                document.getElementById("valide2").disabled = true;

                setTimeout(function() {
                  $('#update_passw')[0].reset();
                  $("#user-message2").text("");

                  // Rechargement de la page après 3 secondes
                  setTimeout(function() {
                    location.reload();
                  }, 3000);
                }, 2000);
              }
          });
        });
      });
</script>
