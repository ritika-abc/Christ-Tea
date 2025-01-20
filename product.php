<?php
// include "config.php";
// $cat_name = $_GET['cat_name'];
// $select = "SELECT * from `cat` where `cat_name`='$cat_name' ";
// $qu = mysqli_query($con, $select);
// while ($row = mysqli_fetch_array($qu)) {

// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Virutcham enterprises</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Virutcham enterprises" name="keywords">
    <meta content="Virutcham enterprises" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

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
</head>

<body>
    <?php
    include "header.php";
    ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-image: url(image/product/1.jpg);">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown text-white">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                    <li class="breadcrumb-item text-white active " aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container  ">
            <div class="font-math ">
                <div class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                        include "config.php";
                        $cat_name = $_GET['cat_name'];
                        $select = "SELECT * from `pro` where `cat_name`='$cat_name' ";
                        $qu = mysqli_query($con, $select);
                        while ($row = mysqli_fetch_array($qu)) {
                        ?>
                            <div class="col-12 col-sm-6 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                                <div class="cat_inner    border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                                    <div class="cat_icon pro_box border border-4 border-dark"><img src="image/product/<?php echo $row['image'] ?>" height="250px" width="100%" style="object-fit:cover" alt="<?php echo $row['name'] ?>">
                                    </div>
                                    <h6 class="cat_name mt-3 fw-bold mt-4  mx-2 text-dark"> <?php echo $row['name'] ?> </h6>
                                </div>
                                <a href="" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry now</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product End -->





    <?php include_once "footer.php"; ?>