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
      background-color: #f4f4f4;
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
</head>
<link href="assets/img/logofivciciom.jpg" rel="icon">

<body>

<?php
  include 'connect.php';

//--------------- If user Sign Up-------------------------
if(isset($_POST['inscrire'])){

    $email = addslashes($_POST ['email']);
    $telephone = $_POST ['phone'];
    $nom = addslashes($_POST ['nom']);
    $pnom = addslashes($_POST ['pnoms']);
    $classe =$_POST ['subject-type'];

    $motpasse = $_POST ['motpasse'];
    $hashedPassword = password_hash($motpasse, PASSWORD_DEFAULT);


    $query = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email ='$email' || telephone='$telephone'");
    
    $rows = mysqli_num_rows($query);
    if($rows!=1){
    $array = $query->fetch_assoc();
    if ($email == '') {
      # code...
      mysqli_query($conn, 
      "INSERT INTO utilisateurs (classe, nom ,prenoms, telephone, motpasse)
       VALUES ('$classe','$nom','$pnom','$telephone','$hashedPassword')");
  
       header("location: login.php");
    }
    if ($telephone =='') {
      # code...
      mysqli_query($conn, 
      "INSERT INTO utilisateurs (classe, nom ,prenoms,email, motpasse)
       VALUES ('$classe','$nom','$pnom', '$email','$hashedPassword')");
  
       header("location: login.php");
    }

    if (!$telephone =='' and !$email == '') {
      # code...
      mysqli_query($conn, 
      "INSERT INTO utilisateurs (classe, nom ,prenoms,email, telephone, motpasse)
       VALUES ('$classe','$nom','$pnom', '$email', '$telephone','$hashedPassword')");
  
       header("location: login.php");
    }
   

    }else{
      ?>

    <div class="message">   
      <p style="color: #BDB76B;" class="text">L'adresse mail ou le numero de telephone existe déja.</p>
      <a href="register.php">Retour</a>
    </div>

        <?php
    }

}

?>


</body>
</html>