<?php 

session_start();
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    
    // Get POST data from the form
    $r_title = $_POST['requestTitle'];  // Corrected the POST key name
    $type = $_POST['donationType'];
    $amount = $_POST['requestAmount'];
    $msg = $_POST['Message'];
    
    // Fetch user email or user_id from session
    $user_id = $_SESSION['user_sno'];  // Make sure 'name' holds the correct value

    // Prepare the SQL query to insert into the 'request' table
    $sql = "INSERT INTO `request` (`user_id`, `request_title`, `category`, `request_des`, `amount`, `time`) 
            VALUES ('$user_id', '$r_title', '$type', '$msg', '$amount', current_timestamp())";
    
    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Redirect after successful insertion
    if ($result) {
        header("Location: /donation/request.php?requestsuccess=true");
        exit();
    } else {
        // Show an error if the query fails
        echo "Error: " . mysqli_error($conn);
    }
}
?>
