<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Virutcham enterprises</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Virutcham enterprises" name="keywords">
    <meta content="Virutcham enterprises" name="description">

    <!-- Favicon -->
    <!-- <link href="image/logo/logo.jpg" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 3rem;
            height: 3rem;
            background-color: #59232b;
            border: 10px solid #59232b;
            border-radius: 3rem;
        }

        .bg {
            /* background-image: url(""); */
            width: 100%;
            background-size: cover;
            height: 60vh;
            background-position: center right;
        }

        .gold {
            background-image: url("image/banner/gold.jpg");
            background-size: cover;

        }
    </style>
</head>


<body>
    <?php
    include "header.php";

    ?>
     
    <section>
        <div class="container-xxl py-5  ">
            <div class="container">
                <div class="row g-0 justify-content-center gx-5 align-items-end">
                    <div class="col-lg-7">
                        <div class="  text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="display-5 mb-3">Our Products </h1>

                            <p class=" ">At Virutcham Enterprises, we offer a wide variety of premium, natural
                                products that cater to your health, wellness, and culinary needs. Our products are
                                carefully sourced, processed, and designed to enhance your everyday life. Explore our
                                diverse range of categories below:</p>
                             
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="my-5  ">
                        <div class="row justify-content-center g-4">
                        <?php
                        include "config.php";
                        $sel ="SELECT * FROM `pro` ";
                        $q = mysqli_query($con,$sel);
                        while($row = mysqli_fetch_array($q)){

                        
                        ?>
                            <div class="col-xl-3  col-lg-4 col-md-6 wow fadeInUp pb-2 my-5" data-wow-delay="0.1s">
                                <div class="product-item border rounded">
                                    <div class="position-relative bg-light overflow-hidden border border-2 border-dark"
                                        style="border-radius: 20px 20px 0px 0px; height: 250px;">
                                        <img class="img- w-100" height="250px" style="object-fit: cover"
                                            src="image/product/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>">
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-3 text-capitalize" href="">
                                        <?php echo $row['name'] ?>
                                        </a>
                                        <div class="m-auto text-center">
                                            <a class="btn btn-primary w-75" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal" href="">Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
    </section>



 

    <?php
    include "footer.php";
    ?>