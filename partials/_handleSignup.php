<?php 
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $nid_no = $_POST['nid_no'];
    $road_no = $_POST['road_no'];
    $area = $_POST['area'];
    $zip = $_POST['zip'];
    $city = $_POST['city'];

    $user_email = $_POST['signupEmail'];  // Corrected the POST key name
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    


    // Check whether this email exists
    $existsSql = "SELECT * FROM users WHERE user_email = '$user_email'";
    $result = mysqli_query($conn, $existsSql);
    $numRows = mysqli_num_rows($result);

    if ($numRows > 0){
        $showError = "Email already in use";  // Added missing semicolon
    } else {
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `timestamp`,`name`,`phone`,`nid_no`, `road_no`,`area`,`zip`,`city`) 
                    VALUES ('$user_email', '$hash', current_timestamp(),'$name','$phone','$nid_no','$road_no','$area','$zip','$city')";
            $result = mysqli_query($conn, $sql);

            if ($result){
                $showAlert = true;
                header("Location: /donation/index.php?signupsuccess=true");
                exit();
            }
        } else {
            $showError = "Passwords do not match";  // Added missing semicolon
        }
    }
    echo $showError;
    header("Location: /donation/index.php?signupsuccess=false&error=$showError");  // Corrected the URL format
    exit();
}

?>
