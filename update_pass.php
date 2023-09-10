
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



//--------------- If user Sign Up-------------------------
if(isset($_POST['motdepasse_'])){


    $motpasse = $_POST ['motdepasse_'];
    $hashedPassword = password_hash($motpasse, PASSWORD_DEFAULT);

        $sql =  "UPDATE utilisateurs SET motpasse = '$hashedPassword' WHERE id= $user";
    

if ($conn->query($sql) === TRUE) {
        // Return a success message as a JSON response
        echo  "Votre mot de passe a été modifié avec success";
    }else{
        // Return an error message as a JSON response
        echo  "Error: " . $sql . "<br>" . $conn->error;    
    }
}
?>