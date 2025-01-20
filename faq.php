<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ala and Sons</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Ala and Sons" name="keywords">
    <meta content="Ala and Sons" name="description">

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
    </style>
</head>


<body>
    <?php
    include "header.php";
    ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
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

    <section>

<div class="container">
    <div class="my-5">
        <h6 class="text-secondary text-uppercase">FAQ</h6>
        <h1 class="mb-0">Frequently Asked Questions </h1>
    </div>
    <div class="row">
      
        <div class="col-lg-6 my-4">
            <img src="image/banner/faq-banner-img.jpg" class="shadow-lg fit rounded border border-2 border-dark" height="100%" width="100%" alt="">
        </div>
        <div class="col-lg-6 my-4">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Where are your products sourced from?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Our agricultural products are locally sourced from trusted farms and growers in <b>West Bengal</b>, ensuring that they meet the highest standards of quality. Our solar panels are sourced from leading manufacturers in the renewable energy sector, helping us deliver reliable and eco-friendly energy solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Are your products environmentally friendly?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p><b>Yes!</b> We are committed to sustainability. Our solar panels provide eco-friendly energy solutions, while our agricultural products are produced with a focus on responsible farming practices. </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How can I purchase products from Ala and Sons?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>You can easily purchase our products by visiting our website or by reaching out to our sales team for inquiries and orders. We also offer direct sales and partnerships for bulk or wholesale orders.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
                        Can I get support if I have technical issues with solar panels?
                        </button>
                    </h2>
                    <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Yes, we offer technical support and assistance for all solar panel installations. Our team is available to provide guidance on setup, maintenance, and troubleshooting to ensure that your solar energy system operates efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


        <?php
        include "footer.php";
        ?>