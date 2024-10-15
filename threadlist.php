<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    #ques {
        min-height: 433px;
    }
    </style>
    <title>Ashtha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>
    <?php 
    $id =$_GET['catid'];
    $sql = "SELECT * From categories where category_id = $id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    ?>

    <?php 
    $showAlert = false;
    $method =$_SERVER['REQUEST_METHOD'];
    
    if($method== 'POST'){
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];
        $sno = $_POST['sno'];

        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp())";

        ;$result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>  Your thread has been added ! Please wait while someone from the community respond.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
    }

    
    ?>


    <div class="p-5 mb-4  text-bg-dark rounded-3 mx-4 my-4">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome to <?php echo $catname?> donation by Ashtha</h1>
            <p class="col-md-8 fs-4"><?php echo $catdesc?> </p>
            <hr class="my-4">
            <p>this is the perfect and the most trust worthy place for donating you most valuable assests. 
            </p>
            <button class="btn btn-outline-light btn-lg" type="button">contact Us</button>

        </div>
    </div>



    <div class="container my-3" id="ques">
<?php
          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
          echo '<div class="containter">
            <h1 class="py-2">Ask a Question</h1>
            <form action="'. $_SERVER['REQUEST_URI'] .'" method="post">
                <div class="mb-3 mx-4">
                    <label for="exampleFormControlInput1" class="form-label"> <b> Problem Title </b></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="write your title here">
                    <small id="emailHelp" class="form-text text-muted my-2 mx-4"> keep your title as short and as crisp
                        as possible</small>
                </div>
                <input type="hidden" name="sno" value="'.$_SESSION['sno']. '">

                <div class="mb-3 mx-4">
                    <label for="exampleFormControlTextarea1" class="form-label"> <b> Ellaborate Your concern
                        </b></label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                    <button class="btn btn-dark btn-lg mx-3 my-3" type="submit">Submit</button>

                </div>
            </form>
            

        </div>';
        }
        else{
            echo '<div class="container">
            
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
            <div class="alert alert-warning d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            You are not logged in. Please loging to ask Questions.
            </div>

        </div>';
        }
        ?>
        
        <h1 class="py-2">Browse Opinions</h1>
        <?php 
    $id =$_GET['catid'];
    $sql = "SELECT * From threads where thread_cat_id = $id";
    $result = mysqli_query($conn,$sql);
    $noResult = true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_time = $row['timestamp'];

        $thread_user_id = $row['thread_user_id'];
        $sql2 = "SELECT `name` FROM `users` WHERE sno='$thread_user_id'";  // Use backticks around the table name
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);

        

    echo '
    <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="pic/user.jpg" width="50px" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">

                <h5 class="mt-0"> <a class ="text-dark text-decoration-none" href="thread.php?threadid='.$id.'"> '.$title.'</a></h5>
                '.$desc.'
            </div> <p class="font-weight-bold my-0"> <b>'.$row2['name'].'  at </b>'.$thread_time.' </p>
        </div>';    
    }
    
    if($noResult){
        echo '<div class="text-bg-dark text-light rounded-3 mx-4">
        <div class="container-fluid py-5">
                <h2 > No Result Found</h2>
                <p class="lead">Be the first person to Share your opinion about us</p>
            </div>    
        
        </div>
        
        ';
    }



    ?>





    </div>





    <?php include 'partials/_footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>