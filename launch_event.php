<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ashtha - Coding Forum</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/jumbu.css">
        
    </head>

<body>
    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>
    <?php
        if(isset($_GET['requestsuccess']) && $_GET['requestsuccess']=="true"){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations. You have successfully Submitted you donation request. Now please wait for response reply.</strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';};
        
        ?>
<div class="custom-jumbotron">

    <div class=" p-5 mb-4  text-bg-dark rounded-3 ">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">launch a Donations Event.</h1>
            <p class="col-md-8 fs-4">You can simply launch a event from here. So go ahead boss.</p>
            <hr class="my-4">

            <div class="">
                <form action="/donation/partials/_handleLaunch_event.php" method="post">

                    <div class="mb-3">
                        <label for="Title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="EventTitile" name="EventTitle"
                            placeholder="Enter you request Subject" required>
                    </div>

                    

                   

                    <div class="mb-3">
                        <label for="donorMessage" class="form-label">Description</label>
                        <textarea class="form-control" id="EventMessage" name="EventMessage" rows="4"
                            placeholder="Describe about you Event here."></textarea>
                    </div>





                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit Request</button>
                    </div>
                </form>
            </div>


            <button class="btn btn-outline-light btn-lg" type="button">contact Us</button>

        </div>
    </div>
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