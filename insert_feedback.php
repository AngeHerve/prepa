<?php
include('connect.php');

// Handle the form data
if (isset($_POST["rating"]) && isset($_POST["comment"])) {
    $user = $_POST["utilisateur"];
    $lamateire = $_POST["chapitre"];
    $titre = $_POST["title"];
    $lexo = $_POST["exercice"];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];

    // Insert the data into the database (assuming you have a table named "feedback")
    $sql = "INSERT INTO avis_uti (id_user, id_exo, etoile, commentaire, matiere, titre) 
    VALUES ('$user', '$lexo','$rating', '$comment', '$lamateire', '$titre')";

    if ($conn->query($sql) === TRUE) {
        // Return a success message as a JSON response
        echo 'good';
    } else {
        // Return an error message as a JSON response
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
