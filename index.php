<?php 
    include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/short-logo-removebg-preview.png">
    <title> Prayas Electro-Systems </title>
    <link rel="stylesheet" href="/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html{
            font-family: 'Poppins';
        }
        body{
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .container-fluid{
            margin: 0;
            padding: 0;
        }
        div.home-nav-logo{
            width: 15%;
        }
        .home-nav-logo-img {
            width: 100%;
            margin: 3%;
        }
        .navbar-expand-lg{
            background-color: #d6ecec;
            /* background-color: #009999; */
            padding: 0.5em 0.5em;  
        }
        .navbar-nav{
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-link {
            color: black;
            font-weight: 600;
        }
        .nav-link{
            font-size: medium;
        }
        .nav-link2{
            font-size: medium;
            text-decoration: none;
            margin: 0.5em 0;
        }
        .right-nav{
            width: 42%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .foot-links {
            display: flex;
            flex-direction: column;
        }
        .main-heading{
            font-weight: 900;
        }
        .home-info {
            font-size: large;
            font-family: 'Poppins';
            font-weight: 600;
            color: slategrey;
            width: 50%;
        }

        .service-details-info {
            background-color: #d6ecec;
            color: black;
            padding: 1em 0;
        }

        /* .home-services {
            font-size: medium;
            font-weight: 400;
            color: darkslategrey;
            font-family: 'Poppins';
        } */
        .custom-bg {
            background-color: #d6ecec;
        }
        .container{
            justify-content: space-between;
        }
        .comp-logo{
            width: 50%;
        }
        .comp-text{
            padding-top: 3%;
            font-size: small;
            width: 80%;
        }
        .comp-details{
            width: 30%;
        }
        .imp-links{
            width: 15%;
            display: flex;
            align-items: center;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .social-img{
            width: 30px;
            margin: 0.5em;
        }
        .social-div{
            display: flex;
        }
        .slogan{
            font-size: 2rem;
        }
        .border-top{
            background-color: #d6ecec;
        }

        @media (max-width: 576px) {
            html{
                padding: 0;
                margin: 0;
            }
            body{
                padding: 0;
                margin: 0;
                font-family: 'Poppins';
            }
            .container-fluid {
                margin: 0;
                padding: 0;
            }
            div.home-nav-logo {
                width: 35%;
            }
            .home-nav-logo-img {
                margin-left: 0;
                width: 100%;
            }
            .navbar-expand-lg {
                padding: 0.5em 1em;
            }
            .comp-details{
                display: none;
            }
            .sd{
                flex-direction: column;
            }
            .cat-trans{
                margin-bottom: 2%;
            }
            .last-card{
                height: 375px;
            }
            .justify-content-around {
                justify-content: space-around!important;
                margin-bottom: -100px;
                flex-direction: column-reverse;
            }
            .navbar-toggler-icon {
                filter: invert(1);
            }

            .nav-link{
                font-size: small;
                margin-bottom: 5%;
            }
            .service-image {
                width: 80%;
            }
            .home-info {
                width: 90%;
            }
            img.prayas-head-img {
                width: 65%;
            }
            .service-details-info {
                margin-top: 15em;
            }
            div.service-titles {
                width: 75%;
            }
            .slogan {
                font-size: 1rem;
                width: 90%;
            }
            .custom-bg {
                margin-top: 10em;
            }
            .copyright {
                font-size: x-small;
            }
            
        }

        /* Styles for medium screens (576px - 768px) */
        @media (min-width: 577px) and (max-width: 767px) {
            .home-nav-logo-img {
                width: 25%;
                margin-left: 3%;
            }
        }

        /* Styles for large screens (768px and above) */
        @media (min-width: 768px) and (max-width: 1024px) {
            .navbar-toggler-icon {
                filter: invert(1);
            }
            .home-nav-logo {
                width: 10%;
            }
            .home-nav-logo-img {
                margin: 3%;
                width: 80%;
            }
            .service-titles {
                width: 60%;
            }
            img.service-image {
                width: 80%;
            }
            .s-img-2 {
                width: 50% !important;
            }
            .slogan {
                font-size: 1.5rem;
            }
        }

        p.serv{
            font-size: large;
            font-weight: 700;
            font-family: 'Poppins';
            color: darkslategray;
        }
        .prayas-head-img {
            width: 35%;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top" style="z-index: 100;">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="index.php"><img src="./assets/logo-removebg-preview.png" alt="home-logo" class="home-nav-logo-img"></a>
                </div>
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse right-nav" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link m-0" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="clients.php">Our Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="contact_form.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" style="margin-top: 60px;">

        </div>

        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/carousel_1.jpg" class="d-block w-100" alt="Carousel Image 1">
                </div>
                <div class="carousel-item">
                    <img src="./assets/carousel_2.png" class="d-block w-100" alt="Carousel Image 2">
                </div>
                <div class="carousel-item">
                    <img src="./assets/carousel_3.jpg" class="d-block w-100" alt="Carousel Image 3">
                </div>
                <div class="carousel-item">
                    <img src="./assets/carousel_4.jpg" class="d-block w-100" alt="Carousel Image 3">
                </div>
                <div class="carousel-item">
                    <img src="./assets/carousel_5.jpg" class="d-block w-100" alt="Carousel Image 3">
                </div>
                <div class="carousel-item">
                    <img src="./assets/carousel_6.jpg" class="d-block w-100" alt="Carousel Image 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="mt-3">
            <h1 class="text-center main-heading">WELCOME TO PRAYAS</h1>
        </div>

        <div class="row d-flex justify-content-around all-cards">
            <div class="col-md-11">
                <div class="d-flex justify-content-around align-items-center">
                    <p class="home-info"><strong>“Prayas Electro Systems (Thane) Pvt. Ltd.”</strong> is an established company in Power Sector for their prompt and quality services since 2002, 
                        they are experienced for Turn Key Project Execution, seamless Installations, Precision Testing and Commissioning.
                        They have proved their services for reliable partnership with the client. 
                        Prayas is capable to provide Custom-built solutions for Client's Electrical requirements.
                        <br/><br/>Together, let's illuminate success!</p>
                    <img src="./assets/two-people-working-at-an-office.png" class="prayas-head-img" alt="">
                </div>
            </div>
        </div>

        <div class="service-details-info">

            <div class="my-5">
                <h3 class="text-center">SERVICES WE PROVIDE</h3>
            </div>

            <div class="row d-flex justify-content-evenly my-5 all-cards">
                <div class="col-md-11">
                    <div class="d-flex justify-content-around align-items-center">
                        
                        <div class="service-img">
                            <img src="./assets/entrepreneurship-and-startup-business-concept (2).png" alt="" class="service-image">
                        </div>

                        <div class="service-titles">
                            <p class="serv"><span>&#8226</span> EHV/HT SUBSTATION MAINTENANCE WORK</p>
                            <p class="serv"><span>&#8226</span> EHV/HT EQUIPMENT TESTING</p>
                            <p class="serv"><span>&#8226</span> SOLAR PROJECTS</p>
                            <p class="serv"><span>&#8226</span> TRANSFORMERS</p>
                            <p class="serv"><span>&#8226</span> CIRCUITR BREAKERS</p>
                            <p class="serv"><span>&#8226</span> C&R PANELS</p>
                            <p class="serv"><span>&#8226</span> PROTECTION RELAYS</p>
                            <p class="serv"><span>&#8226</span> INSULATOR COATING</p>
                            <p class="serv"><span>&#8226</span> HARMONIC STUDIES AND SOLUTIONS</p>
                            <p class="serv"><span>&#8226</span> CT & PT</p>
                            <p class="serv"><span>&#8226</span> SUBSTATIONS & TOWER LINE WORK</p>
                        </div>
                        
                    </div>
                    <!-- <img src="./assets/pngkit_contractor-png_2658852.png" class="service-span-img" alt=""> -->
                </div>
            </div>

        </div>

        <?php include('service_bar.php'); ?>


        <section id="why-choose-us">
            <h2 class="text-center m-4">WHY CHOOSE PRAYAS</h2>
            <div class="choose-list d-flex justify-content-around align-items-center">
            <ul>
                <li>
                    <p class="serv">Expertise That Matters</p>
                    <!-- <p>With decades of collective experience in the electrical industry, our team comprises seasoned engineers, technicians, and project managers who are at the forefront of innovation. We understand the complexities of electricity transmission, SCADA systems, and automation like no one else.</p> -->
                </li>
                <li>
                    <p class="serv">Experience Supports Reliability</p>
                    <!-- <p>With decades of collective experience in the electrical industry, our team comprises seasoned engineers, technicians, and project managers who are at the forefront of innovation. We understand the complexities of electricity transmission, SCADA systems, and automation like no one else.</p> -->
                </li>
                <li>
                    <p class="serv">Safety is the Priority</p>
                    <!-- <p>Electrical projects come with inherent risks, but we mitigate them with stringent safety protocols. Our safety-first approach means that every project we undertake is executed with utmost care, protecting your assets, our team, and the environment.</p> -->
                </li>
                <li>
                    <p class="serv">Customized Approach</p>
                    <!-- <p>We don't believe in one-size-fits-all solutions. Each project is unique, and we tailor our services to meet your specific needs. Whether you're a data center demanding uninterrupted power or an energy-intensive manufacturing unit seeking optimized energy usage, our solutions are designed to align with your goals.</p> -->
                </li>
                <li>
                    <p class="serv">Advanced Technology and Proven Solutions</p>
                    <!-- <p>We thrive on cutting-edge technology. Our commitment to staying ahead of the curve means we bring you the latest advancements in electrical infrastructure and automation. Our track record is a testament to our ability to deliver solutions that work seamlessly and stand the test of time.</p> -->
                </li>
                <li>
                    <p class="serv">Quality Assurance</p>
                    <!-- <p>Quality is non-negotiable for us. From meticulous planning to rigorous implementation, we ensure every aspect of our work adheres to the highest industry standards. Our commitment to quality not only guarantees your project's success but also your peace of mind.</p> -->
                </li>
                <li>
                    <p class="serv">Promptness reduces downtime</p>
                    <!-- <p>Our work goes beyond electrical infrastructure. We power industries that drive progress – from data centers shaping the digital age to energy-intensive operations fueling economies. By choosing us, you're choosing to be a part of a bigger, more sustainable future.</p> -->
                </li>
                <li>
                    <p class="serv">Value for Client</p>
                    <!-- <p>Quality is non-negotiable for us. From meticulous planning to rigorous implementation, we ensure every aspect of our work adheres to the highest industry standards. Our commitment to quality not only guarantees your project's success but also your peace of mind.</p> -->
                </li>
                
                <p class="serv"><a href="contact_form.php">Get in Touch</a> to explore possibilities.</p>
            </ul>
            
            <img src="./assets/entrepreneurship-and-startup-business-concept (4).png" alt="" class="service-image s-img-2">
        </div>
        </section>

        <?php include('servicebar2.php'); ?>

        <div class="section">
            <div class="">
                <div class="row d-flex justify-content-center">
                    <div class="text-center d-flex col-md-11 justify-content-around align-items-center offer-text">
                        <p class="display-6 fw-bold slogan">Empowering the future of electrical power systems through expert maintenance, innovative solutions and reliable services.</p>
                        <img src="./assets/entrepreneurship-and-startup-business-concept (3).png" class="prayas-head-img" alt="">
                    </div>
                </div>
            </div>
        </div>



            <footer>
                <div class="custom-bg text-dark py-3">
                <div class="container d-flex">
                    <div class="comp-details">
                        <img class="comp-logo" src="./assets/logo-removebg-preview.png" alt="company-logo">
                        <p class="comp-text">Telfax: +91-(022) – 2779 0351. <br/> Mob: 9223537217 <br/> E-mail: prayaselectrosystems.com</p>
                    </div>
                    <div class="imp-links">
                        <!-- <thead><h5 class="text-center">Important links:</h5></thead> -->
                        <tbody>
                            <div class="foot-links">
                            <td><a class="nav-link2 text-dark py-0" aria-current="page" href="index.php">Home</a></td>
                            <td><a class="nav-link2 text-dark py-0" href="about.php">About Us</a></td>
                            <td><a class="nav-link2 text-dark py-0" href="contact_form.php">Contact Us</a></td>
                            </div>
                        </tbody>
                    </div>

                    <div class="imp-links">
                        <!-- <thead><h5 class="text-center">Important links:</h5></thead> -->
                        <tbody>
                            <div class="foot-links">
                            <td><a class="nav-link2 text-dark py-0" href="terms_conditions.php">Terms and Conditions</a></td>
                            <td><a class="nav-link2 text-dark py-0" href="privacy_policy.php">Privacy & Return Policy</a></td>
                            </div>
                        </tbody>
                    </div>

                    <div class="imp-links text-center">
                        <!-- <thead><h5>Social links:</h5></thead> -->
                        <tbody class="social-div">
                            <div class="d-flex justify-content-center m-auto sd">
                            <td><a class="nav-link2 text-dark py-0 cat-trans" aria-current="page" href="https://www.facebook.com/profile.php?id=100068964594739&mibextid=9R9pXO" target="_blank"><img class="social-img" src="./assets/facebook (3).png" alt=""></a></td>
                            <td><a class="nav-link2 text-dark py-0 cat-trans" href="https://www.instagram.com/yearbookcanvas/?hl=en" target="_blank"><img class="social-img" src="./assets/instagram (1).png" alt=""></a></td>
                            <td><a class="nav-link2 text-dark py-0 cat-trans" href="https://www.linkedin.com/company/prayas-electro-systems/" target="_blank"><img class="social-img" src="./assets/linkedin.png" alt=""></a></td>
                            </div>
                        </tbody>
                    </div>
                </div>
            </div>
                <div class="last-foot border-top">
                    <p class="text-center m-0 p-2 copyright">&copy; 2023 Prayas Electro-Systems (Thane) Pvt. Ltd. All Rights Reserved.</p>
                </div>
            </footer>
    </div>




    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <p id="messageText"></p>
            </div>
          </div>
        </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>