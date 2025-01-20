<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ala and Sons </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 3rem;
            height: 3rem;
            background-color: #8a0e0e;
            border: 10px solid #8a0e0e;
            border-radius: 3rem;
        }

        .service_bg {
            background-image: linear-gradient(#00000000, #000000d1), url("image/product/potato.jpg");
            padding: 1rem 1rem;

        }

        .content_box {
            border: 1px dashed rgba(255, 255, 255, .2);
            padding: 4rem 1rem;
        }
    </style>
</head>


<body>
    <?php
    include "header.php";
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.637),rgba(0, 0, 0, 0.685)),url(image/banner/export.jpg);"
        data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown text-white">We Export</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                    <li class="breadcrumb-item text-white active " aria-current="page">Export</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- export supply -->
    <section class="margin">
        <div class="container">
            <div class="row">
            <div class="col-lg-7 my-4">
                    <!-- <img src="image/banner/export.jpg" height="auto" width="100%" class="rounded mb-4" alt=""> -->
                    <h4 class="mb-3 display-6">Why Choose <a href="/" class="text-primary">Ala and Sons</a> for Your Export Needs?</h4>

                    <h6>Our Export Offerings</h6>
                    <ul class="justify">
                        <li><b>Agricultural Products: </b> We export a wide range of agricultural products including seeds, fertilizers, organic farming solutions, and fresh produce. Our products are sourced from trusted local farmers and undergo rigorous quality checks to ensure they meet international standards. From the rich soils of West Bengal, we bring the best of local farming to global markets, ensuring freshness, quality, and sustainability.</li>
                        <li><b>Sustainable Energy Solutions:</b> Ala and Sons is also making a significant impact on the global energy market with our sustainable energy solutions. We export solar panels, wind energy systems, and energy storage technologies, enabling businesses and homes in other countries to reduce their carbon footprint while lowering energy costs.</li>
                    </ul>

                    <ul class="justify">
                        <li><b>Commitment to Quality: </b> Our products are crafted with the highest quality materials and undergo thorough testing to ensure they meet global standards.</li>
                        <li><b>Sustainability: </b>Whether it's agriculture or energy solutions, we prioritize sustainability in all of our exports, helping customers make eco-friendly choices.</li>
                        <li><b>Reliable Delivery: </b> We ensure timely and secure delivery of our products to international markets, maintaining strong relationships with logistics partners across the globe.</li>
                        <li><b>Competitive Pricing: </b> Our global customers enjoy premium products at competitive prices, making Ala and Sons a trusted partner for businesses worldwide.</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary   px-5 py-3">Contact Now</a>
                </div>
                <div class="col-lg-5 my-4">
                    <div class="service_bg rounded">
                        <div class="content_box text-white">
                            <h4 class="text-white my-3">How Can We Help?</h4>
                            <p>
                                If you need any help, please
                                feel free to contact us.
                            </p>
                            <a href="tel:919733197328 " class="my-3  fw-bold ">+91 9733197328 </a>
                        </div>
                    </div>
                    <form action="" class=" mt-5 shadow-lg p-4 rounded">
                        <h5 class="my-3">Send Enquiry Now </h5>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control name" id="Name" placeholder="Name">
                            <label for="Name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control message" id="floatingPassword" placeholder="Enquiry For">
                            <label for="floatingPassword">Enquiry For</label>
                        </div>
                        <a href="" class="btn btn-dark mt-3   w-100" onclick="contact1()">Submit</a>
                    </form>
                </div>
               
            </div>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>