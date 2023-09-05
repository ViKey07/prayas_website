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
    <title> PRAYAS | Clients </title>
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
            margin: 0 0.5em;
        }
        .right-nav {
            width: 42%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-item{
            color: white;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .container{
            justify-content: space-between;
            align-items: center;
        }
        .vision-info {
            font-size: large;
            padding: 0 2em;
            font-weight: 600;
            color: slategray;
            font-family: 'Poppins';
        }
        .navbar-collapse {
            flex-grow: unset;
        }

        .custom-bg {
            background-color: #d6ecec;
        }

    @media only screen and (max-width: 768px) {
        

    }

    .container-fluid2 .text-center {
        background-image: url("./assets/About Us Page Assets-09.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        color: #ffffff; /* Set the text color to white or any desired color */
        padding: 50px 20px; /* Adjust the padding as needed */
    }
    .text-head {
        font-size: xxx-large;
        font-weight: 800;
        color: #016363;
        margin-bottom: 1em;
    }

    li.listed-items {
        padding: 2em 10em;
    }

    p.list-sub-head {
        font-weight: bolder;
        color: darkslategray;
        font-size: larger;
    }
    
    .listed-items {
        list-style-type: none; /* Remove bullet points */
        padding-left: 0; /* Remove default padding */
        flex-direction: column;
        display: flex;
        /* align-items: center; */
        justify-content: center;
        margin: auto;
    }

    .listed-items, .listed-lines {
        text-align: start;
        width: 100%;
        font-family: 'Poppins';
    }

    .even {
        background-color: #d6ecec;
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
        .foot-links {
            display: flex;
            flex-direction: column;
        }
        .img-fluid {
            height: 25vh;
            width: 70%;
        }
        .client-name {
            text-align: center;
            margin: 1em 0;
            font-size: large;
            font-weight: 900;
            color: slategray;
            font-family: 'Poppins';
        }
        .clients-align{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
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
        .navbar-toggler-icon {
            filter: invert(1);
        }
        .comp-details{
            display: none;
        }
        .text-head{
            margin-bottom: 10%;
        }
        .text-sub-head{
            font-size: small;
        }
        .text-sub-head2{
            font-size: medium;
        }
        .l-logo-container{
            display: flex;
            justify-content: center;
        }
        .l-detailss{
            width: 80%;
        }
        .l-previous-arrow {
            padding-bottom: 5px;
        }
        .l-next-arrow {
            padding-bottom: 5px;
        }
        .box {
            width: 80%;
            height: 45vh;
        }
        .right-img {
            width: 50%;
        }
        .last-div{
            display: none;
        }
        .text-area{
            width: 75%;
        }
        .box2{
            margin-bottom: 10%;
        }
        .soc-d {
            flex-direction: column;
        }
        div.row {
            text-align: center;
        }
        .copyright {
            font-size: x-small;
        }
        .sd{
                flex-direction: column;
            }
    }

    /* Styles for medium screens (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .home-nav-logo-img {
            width: 30%;
            margin: 3%;
        }
    }

    /* Styles for large screens (768px and above) */
    @media (min-width: 768px) and (max-width: 1024px) {
        .navbar-toggler-icon {
            filter: invert(1);
        }
        .home-nav-logo {
            width: 15%;
        }
        .home-nav-logo-img {
            margin: 3%;
            width: 100%;
        }
        .img-fluid {
            height: 15vh;
            width: 85%;
            object-fit: contain;
        }
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

        <div class="container-fluid" style="margin-top: 100px;">
            <div class="text-center">
                <h2 class="text-head">Our Clients</h2>
            </div>
                
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/Tata_Projects_Logo.jpg" alt="Logo 1" class="img-fluid text-center">
                        <p class="client-name">Tata Projects</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/msetcl_logo.jpg" alt="Logo 2" class="img-fluid">
                        <p class="client-name">MSETCL</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/msedcl_hs_logo_transparent_bg.png" alt="Logo 3" class="img-fluid">
                        <p class="client-name">MSEDCL</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/pngegg (1).png" alt="Logo 4" class="img-fluid">
                        <p class="client-name">TATA POWER</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/pngwing.com (2).png" alt="Logo 1" class="img-fluid">
                        <p class="client-name">Indian Oil</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/bridge-data-centres-malaysia-s-1597106077 (1).png" alt="Logo 2" class="img-fluid">
                        <p class="client-name">Bridge data Centre</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/Bharat_Petroleum-Logo.wine.png" alt="Logo 3" class="img-fluid">
                        <p class="client-name">Bharat Petroleum</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/mmrda.jpg" alt="Logo 4" class="img-fluid">
                        <p class="client-name">MMRDA</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/WAREE.png" alt="Logo 4" class="img-fluid">
                        <p class="client-name">WAREE</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/Goa govt.png" alt="Logo 2" class="img-fluid">
                        <p class="client-name">Goa Electricity Dept.</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/Alstom-Logo.wine.png" alt="Logo 3" class="img-fluid">
                        <p class="client-name">Alstom</p>
                    </div>
                    <div class="col-md-3 mb-4 clients-align">
                        <img src="./assets/kptcl-logo-21EFDB3785-seeklogo.com.png" alt="Logo 1" class="img-fluid">
                        <p class="client-name">KPTCL</p>
                    </div>
                    <!-- <div class="col-md-3 mb-4">
                        <img src="./assets/Tata_Projects_Logo.jpg" alt="Logo 1" class="img-fluid">
                        <p class="client-name">KPTCL</p>
                    </div> -->
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