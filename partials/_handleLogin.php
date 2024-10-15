<?php 
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];
    $name = $_POST['name'];

    $sql = "SELECT * FROM users WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    $sql2 = "SELECT * FROM `users` WHERE user_email='$email'";  // Use backticks around the table name
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);

    if ($numRows == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['user_pass'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['useremail'] = $email;
            $_SESSION['name'] = $row2['name'];
            $_SESSION['user_sno'] = $row2['sno'];
            $_SESSION['user_type'] = $row2['type'];
            //echo "logged in ".$email;
            header("Location: /donation/index.php");
        } else {
            echo "Unable to login! Incorrect password.";  // Error message for incorrect password
        }
    } else {
        echo "Unable to login! Email not found.";  // Error message for no matching email
    }
}
?>
