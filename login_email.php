<!DOCTYPE html>
<html>
<head>
  <title>Page de succès</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      background-color: #f6f7f84f;
    }
    
    .message {
      text-align: center;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .message p {
      color: green;
      font-size: 18px;
      font-weight: bold;
    }
    
    .message a {
      color: #007bff;
      text-decoration: none;
    }

    @media screen and (max-width: 991px) {
              .message .text {
                font-size:65px;
              }

              .message a {
                font-size:45px;
              }
            }

            @media (min-width: 991px) {
              .message .text {
                font-size:50px;
              }

              .message a {
                font-size:38px;
              }
            }
  </style>
    <link href="assets/img/logofivciciom.jpg" rel="icon">

</head>
<body>

<?php

// Se connecter à la base de données avec mysqli
$mysqli = new mysqli("localhost", "root", "", "prepabep_math_sp");

if ($mysqli->connect_errno) {
    // Gérer l'erreur de connexion
    echo 'Database Connection Error';
}

if(isset($_POST['mail'])){
    // Récupérer le hachage du mot de passe stocké en base de données pour l'utilisateur correspondant à l'identifiant donné
    $email = addslashes($_POST ['email_']);  
    $password_cnn = addslashes($_POST ['password_']);  
    $mot_de_passe_bdd;
    $nom_eleve;
    $niveau;
$stmt = $mysqli->prepare('SELECT id, nom,email, motpasse, classe  FROM utilisateurs WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->bind_result($id,$nom_eleve, $email, $mot_de_passe_bdd, $niveau);
if ($stmt->fetch()) {
  $result = array(
      'id' => $id,
      'nom' => $nom_eleve,
      'email' => $email,
      'motpasse' => $mot_de_passe_bdd,
      'classe' => $niveau,
  );
}
// Gérer l'erreur
// L'utilisateur n'existe pas
if (@!$result) { ?>

    <div class="message">
        <p style="color: red;" class="text">L'adresse email <span style='color:#05496E; font-weight:600;'><?php echo $email ?> </span> n'existe pas dans notre base de donnée.</p>
        <a href="login.php">Retour</a>
    </div>

    <?php
}
else {
  # code...
if (password_verify($password_cnn, $mot_de_passe_bdd)) {
    echo 'Le mot de passe est valide pour l\'utilisateur '.$email.' !';
    $tabl = $result;
    session_start();
    $_SESSION['logged_in']= true;
    $_SESSION['id'] = $tabl['id'];
    $_SESSION['nom'] = $tabl['nom'];
    $_SESSION['class'] = $tabl['classe'];
    header('location:accueil.php');
} else {?>

    <div class="message">   
        <p style="color: #BDB76B;" class="text">Le mot de passe saisie ne correspond pas à celle de l'adresse mail.</p>
        <a href="login.php">Retour</a>
    </div>

    <?php
}
}
  }

?>

</body>
</html>