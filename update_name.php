
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
if(isset($_POST['nom'])){

    $email = addslashes($_POST ['email']);
    $telephone = ($_POST ['phone']);
    $nom = addslashes($_POST ['nom']);
    $pnom = addslashes($_POST ['pnoms']);


    $sql =  "UPDATE utilisateurs SET nom = '$nom',prenoms = '$pnom',
     telephone = '$telephone' ,email = '$email' WHERE id= $user";


if ($conn->query($sql) === TRUE) {
        // Return a success message as a JSON response
        echo "Vos informations ont été modifiées avec success";
    }else{
        // Return an error message as a JSON response
        echo  "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>