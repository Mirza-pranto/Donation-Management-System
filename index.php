<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        ques{
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
    


    <!-- Slider -->
    
    <div id="carouselExampleAutoplaying" class="carousel slide mx-3 my-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pic/11.jpg" class="d-block w-100" alt="..." width="640" height="460">
            </div>
            <div class="carousel-item">
                <img src="pic/22.jpg" class="d-block w-100" alt="..." width="640" height="460">
            </div>
            <div class="carousel-item">
                <img src="pic/33.jpg" class="d-block w-100" alt="..." width="640" height="460">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
 
    <!-- Category container starts here -->
     <div class="container my-3">
    <h1 align = center> Ashtha - Catagories</h1>
        <hr>
        <h5>Ashtha is a compassionate and community-driven organization dedicated to making 
            a positive impact on society by addressing urgent needs through money, food, and blood donations. 
            We believe in the power of trust and collective effort to bring hope and healing to those in need. Our mission is to foster a culture of giving, where individuals from all walks of life can come together to support those who are vulnerable. Through Ashtha, we aim to be the bridge between the givers and those in need, offering not only resources but also hope and care to the community.
            Join us in this journey of 
            trust, compassion, and action as we work together to create a brighter tomorrow.</h5>
    
    <div class="row ">


    <?php

        $sql = "SELECT * From categories";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){

            $id = $row['category_id'];
            $cat = $row['category_name'];
            $desc = $row['category_description'];
            
            

            echo '<div class="col-md-4 my-4">
                <div class="card text-bg-dark" style="width: 18rem;">
                    <img src="pic/22.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="threadlist.php?catid='.$id.'"> '.$cat.' </a></h5>
                        <p class="card-text">'.substr($desc, 0, 90).'...</p>
                        <a href="threadlist.php?catid='.$id.'"" class="btn  btn-outline-light btn-lg" >Go somewhere</a>
                    </div>
    
                </div>
            </div>';

        }
    ?>    
        
        


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