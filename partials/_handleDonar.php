<?php 

session_start();
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    
    // Get POST data from the form
    $title = $_POST['donarTitle'];  // Corrected the POST key name
    $type = $_POST['dType'];
    $amount = $_POST['donarAmount'];
    $msg = $_POST['dMessage'];
    
    // Fetch user email or user_id from session
    $user_id = $_SESSION['user_sno'];  // Make sure 'name' holds the correct value

    // Prepare the SQL query to insert into the 'request' table
    $sql = "INSERT INTO `doner` (`user_id`, `d_title`, `category`, `d_msg`, `amount`, `time`) 
        VALUES ('$user_id', '$title', '$type', '$msg', '$amount', current_timestamp())";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Redirect after successful insertion
    if ($result) {
        header("Location: /donation/donar.php?requestsuccess=true");
        exit();
    } else {
        // Show an error if the query fails
        echo "Error: " . mysqli_error($conn);
    }
}
?>
