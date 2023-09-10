
<?php

include('../connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PREPABEPCBAC - Systèmes equations - inéquations</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logofivciciom.jpg" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <link href="../sets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="../assets/css/style.css" rel="stylesheet">



</head>

<body>

  <?php include ('header_con.php') ?>


  <main id="main">
  <?php
          if(isset($_GET['id'])){
              if (is_numeric($_GET['id'])) {
                  # code...
              
              $pre =(int)$_GET['id'];
      
          $req = mysqli_query($conn,"SELECT * FROM `anal_3eme` WHERE id_ana = $pre ");
          $count1 = mysqli_num_rows($req);
          if ($count1 == 1) {
          while($row = mysqli_fetch_assoc($req)){
          ?>

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="../index.php">Home</a></li>
          <li><a href="g_applications_affines.php?id=<?= $row['id_ana']?>"><?= $row['titre']; ?></a></li>
        </ol>
      </div>
    </section>


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

            </article>
            

          </div>

          <div class="col-lg-4 col-12">

            <div class="sidebar" style="background-color:#f6f7f870;">

              <form id="feedbackForm" action="" method="post">
                <div class="etoile">
                  <h3 class="sidebar-title">Note l'exercice :</h3>
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

                </div>

                <div class="comm">
                  <h3 class="sidebar-title">Commentaire sur l'exercice :</h3>
                  <div class="form-floating">
                    <textarea class="form-control"  style="height:150px;"  name="comment" id="comment" ></textarea>
                    
                  </div>
                  <p id="comm-message"></p>
                  <input type="hidden" name="utilisateur" value='255'>
                  <input type="hidden" name="exercice" value='<?php echo $row['id_ana'] ?>'>

                  <br>
                  <div class="col-10 text-center">
                      <button  class="btn w-100 py-3" style="background-color:#05496E; color:#fff"  type="submit" id="valide">Valider</button>
                  </div>
                </div>
                <br>
                <p style='color:green; font-size:15px;' id="user-message"></p>
              </form>

            </div>

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
               @media screen and (max-width: 991px) {
                    .etoile{
                      /* You may want to adjust styles for the headings */
                     margin:auto; 

                    }
                    
                                     
                  }

            </style>

          </div>

        </div>

      </div>
      <?php
                
              } 
            } else {
              header('location:../erreur1.php');
             } 
          } else {
              header('location:../erreur2.php'); 
              }
              }         
              ?>
    </section>

  </main>

  <?php include ('../footer.php'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <script src="../assets/js/main.js"></script>

</body>

</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
        $('input[type="radio"]').click(function() {
          var ratingValue = $(this).val();
          $('#rating-message').text('Votre note :' + ratingValue + ' étoiles.');
        });

      $(document).ready(function() {
        $("#feedbackForm").submit(function(event) {
          event.preventDefault(); 

          const comment = document.getElementById("comment").value.trim();
              if (comment === "") {
                document.getElementById("comm-message").textContent = "Veuillez laisser un commentaire.";
                return;
              } else {
                document.getElementById("comm-message").textContent = "";
              }

          var form_data = $(this).serialize();
          $.ajax({
              url:"../insert_feedback.php",
              method:"POST",
              data:form_data,
              success:function(data)
              {
                $('#feedbackForm')[0].reset();
                $('#rating-message').hide();
                $("#user-message").text("Votre avis a été enregister avec success");
                document.getElementById("valide").disabled = true;

                setTimeout(function() {
                  $("#user-message").text("");
                }, 3000); 
              }
          });
        });
      });

  </script>