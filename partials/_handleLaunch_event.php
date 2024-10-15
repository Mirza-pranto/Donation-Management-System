<?php 

session_start();
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    
    // Get POST data from the form
    $e_title = $_POST['EventTitle']; 
    $msg = $_POST['EventMessage'];   
    
   
    $user_id = $_SESSION['user_sno'];  

 
    $sql = "INSERT INTO `categories` (`category_name`, `category_description`) 
            VALUES ('$e_title', '$msg')";
    
    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Redirect after successful insertion
    if ($result) {
        header("Location: /donation/launch_event.php?requestsuccess=true");
        exit();
    } else {
        // Show an error if the query fails
        echo "Error: " . mysqli_error($conn);
    }
}
?>
