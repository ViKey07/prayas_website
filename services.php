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
    <title> PRAYAS | Services </title>
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
            justify-content: space-around;
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
        .nav-link2{
            font-size: medium;
            text-decoration: none;
            margin: 0.5em 0;
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
            margin: 0.5em 0;
        }
        .serv-img {
            width: 15%;
            margin-right: 5em;
        }
        .serv-img-odd {
            width: 15%;
            margin-left: 5em;
        }
        .d-flex2 {
            display: flex;
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
        li.listed-items {
            padding: 2em 2em;
        }
        div.d-flex {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        div.d-flex2 {
            justify-content: space-between;
            align-items: center;
        }
        .serv-img {
            width: 55%;
            margin: 1em;
        }
        .serv-img-odd {
            width: 55%;
            margin: 1em;
        }
        .d-flex2 {
            display: flex;
        }
        .copyright {
            font-size: x-small;
        }
    }

    /* Styles for medium screens (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .home-nav-logo-img {
            width: 30%;
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
        img.home-nav-logo-img {
            width: 150%;
            margin: 5%;
        }
        .serv-img {
            width: 40%;
            object-fit: contain;
        }
        .serv-img-odd {
            width: 40%;
            object-fit: contain;
        }
        li.listed-items {
            padding: 2em 2em;
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
                <h2 class="text-head">Our Services</h2>
            </div>
                <ul class="listed-items">
                    <div class="even mb-3">
                        <li class="listed-items"><p class="list-sub-head">HT, EHV MAINTENANCE WORK:</p>
                            <div class="d-flex">
                            <img src="./assets/—Pngtree—telephone pole line_5394566.png" class="serv-img" alt="">
                            <ul class="listed-lines">
                                <li>Pre-monsoon maintenance of substation switchyard.</li>
                                <li>VCB, SF6 overhauling & maintenance work.</li>
                                <li>C&R panel, LT distribution, DC distribution maintenance work, CT&PT replacement, Cable testing,
                                    cable laying & termination, testing of equipment’s & switchyard maintenance.</li>
                                <li>Modification / Replacement of the Protection Scheme.</li>
                                <li>Earth contact resistance measurement, Earth pit preparation and strengthing of Earthing.</li>
                                <!-- Add other points here -->
                            </ul>
                        </div>
                        </li>
                    </div>
                    <li class="listed-items mb-3"><p class="list-sub-head">EHV/HT EQUIPMENT TESTING:</p>
                        <div class="d-flex">
                        <ul class="listed-lines">
                            <li>Tan Delta Testing of Transformer.</li>
                            <li>CT, PT and CVT Testing.</li>
                            <li>CRM Testing of Circuit Breaker.</li>
                            <li>Numerical and Auxiliary Protection Relay Testing.</li>
                            <li>Operation Timing Test of a Circuit Breaker.</li>
                            <li>Thermal Imaging Measurement for Hotspots.</li>
                            <li>Power Quality Measurement for Total Harmonic Distortion and Power Factor.</li>
                            <li>Automatic Power Factor Controller (APFC) with Active Harmonic Filters (AHF).</li>
                            <!-- Add other points here -->
                        </ul>
                        <img src="./assets/EHV panel 2.png" alt="" class="serv-img-odd">
                    </div>
                    </li>
                    <div class="even mb-3">
                    <li class="listed-items"><p class="list-sub-head">SOLAR PROJECTS:</p>
                        <div class="d-flex">
                            <img src="./assets/pngwing.com (7).png" class="serv-img" alt="">
                        <ul class="listed-lines">
                            <li>AC Electrical services for solar power plant substations.</li>
                            <li>FOTE & OPGW Supply & Services for establishment of communication between solar power substation &
                                nearest MSETCL/MSEDCL Substations.</li>
                            <li>Liasoning work related to visibility of solar substation at SLDC of MSETCL.</li>
                        </ul>
                        </div>
                    </li>
                </div>
                    <li class="listed-items mb-3"><p class="list-sub-head">TRANSFORMERS:</p>
                        <div class="d-flex">
                        <ul class="listed-lines">
                            <li>Complete testing of Transformer at site including Tan Delta, SFRA & All protection Relay healthiness
                                check.</li>
                            <li> On site solutions of Transformers such as Oil Leakage, Bushing Replacement, Fitment of Air Cell in
                                the existing Transformer Conservator Tank, off line Oil filtration etc.</li>
                            <li>Radiator replacement, cooling improvement by special treatment of Radiator fins of existing
                                Transformers.</li>
                        </ul>
                        <img src="./assets/transformer-oil-electric-power-distribution-distribution-transformer-others-f55edc6d4f319c04516529e76bce80e4.png" alt="" class="serv-img-odd">
                    </div>
                    </li>
                    <div class="even mb-3">
                        
                    <li class="listed-items"><p class="list-sub-head">CIRCUITR BREAKERS:</p>
                        <div class="d-flex">
                            <img src="./assets/Circuit-Breaker-PNG-Clipart.png" class="serv-img" alt="">
                        <ul class="listed-lines">
                            <li>ACB’s (440volts)/HT (11KV, 22KV, 33KV)/EHV (66KV, 132KV, 220KV) Overhauling, One Time Services
                                (OTS), Retrofitting for all types of C.B., fault analysis & solutions for site problems.</li>
                        </ul>
                    </div>
                    </li>
                </div>
                    <li class="listed-items mb-3"><p class="list-sub-head">C&R PANELS:</p>
                        <div class="d-flex">
                        <ul class="listed-lines">
                            <li>C&R Panel replacement & Retrofitting.</li>
                            <li>Augmentation, Changes in Protection Scheme & SITC (Supply, Installation, Testing & Commissioning)
                                Of C&R Panels.</li>
                            <li>Implementation of new schemes for C&R Panels.</li>
                        </ul>
                        <img src="./assets/NicePng_control-panel-png_7699886.png" alt="" class="serv-img-odd">
                    </div>
                    </li>
                    <div class="even mb-3">
                    <li class="listed-items"><p class="list-sub-head">PROTECTION RELAYS:</p>
                        <div class="d-flex">
                            <img src="./assets/siemens_sipro.png" class="serv-img" alt="">
                        <ul class="listed-lines">
                            <li>Replacement/Retrofitting of Electro-Mechanical Relays by Numerical Relays for Feeder Protection,
                                Transformer Protection, Motor Protection etc.</li>
                            <li>Fault level Calculations, Parameterization, Configuration of Numerical Relays, SCADA connectivity of
                                Relays, Software Downloading & Commissioning of Protection Relays.</li>
                            <li>Relay Testing for healthy check & trials with Breaker (OTC) for all types of Protection Relays.</li>
                            <li>Protection Relays & Protection Scheme up-gradation work.</li>
                        </ul>
                    </div>
                    </li>
                </div>
                    <li class="listed-items mb-3"><p class="list-sub-head">INSULATOR COATING:</p>
                        <div class="d-flex">
                        <ul class="listed-lines">
                            <li>All kind of Insulators (Indoor/Outdoor) coating by Nano-Technology based polymer to avoid
                                Corona/ Insulator flashover.</li>
                            <li>Nano-Technology based polymer coating for Bus-bars in-panels to avoid short circuits, flashover,
                                due to moisture & lizards, by developing high surface insulation.</li>
                            <li>Tough, Durable, Atmosphere Insensitive Coatings to avoid Rusting, Oxidations & Life Enhancement,
                                far better than enamels or epoxy paints on Electrical Installations.</li>
                        </ul>
                        <img src="./assets/favpng_insulator-electricity-epoxy-bushing-izolátor.png" alt="" class="serv-img-odd">
                    </div>
                    </li>
                    <div class="even mb-3">
                    <li class="listed-items"><p class="list-sub-head">HARMONIC SUPPRESSIONS:</p>
                        <div class="d-flex">
                            <img src="./assets/unilizer900-900c-grey.jpg" class="serv-img" alt="">
                        <ul class="listed-lines">
                            <li>Power quality improvement by Harmonic Analysis, Designing and Providing Passive & Active
                                filters to suit system requirement.</li>
                            <li>Individual &Total Harmonic Distortion suppression substantially.(THD)</li>
                            <li>Saving in power. (KW)</li>
                        </ul>
                        </div>
                    </li>
                </div>
                    <li class="listed-items mb-3"><p class="list-sub-head">CT & PT:</p>
                        <div class="d-flex">
                        <ul class="listed-lines">
                            <li>Replacement, Retrofitting, Installation, Testing & Commissioning of CT&PT for HT/EHV
                                Consumers &State Power Utilities.</li>
                            <li>Routine Testing of CT&PT including Tan Delta Test.</li>
                        </ul>
                        <img src="./assets/pngegg (5).png" alt="" class="serv-img-odd">
                    </div>
                    </li>
                    <div class="even mb-3">
                    <li class="listed-items"><p class="list-sub-head">SUBSTATION & TOWER LINE WORK:</p>
                        <div class="d-flex">
                            <img src="./assets/pngegg (6).png" class="serv-img" alt="">
                        <ul class="listed-lines">
                            <li>HV, EHV Bay work including civil & SITC.</li>
                            <li>HT & EHV Tower line SITC.</li>
                            <li>SITC of OPGW for New projects as well as for old replacement.</li>
                            <li>Thermography of various Electrical Panels, Equipment’s, Distribution Lines, etc with detailed study
                                And implementation of corrective actions.</li>
                        </ul>
                        </div>
                    </li>
                </div>
                    <li class="listed-items mb-3"><p class="list-sub-head">We do also offer our specialized services for effective liaisoning for</p>
                        <div class="d-flex">
                        <ul class="listed-lines">
                            <li>EHV connection.</li>
                            <li>Power Purchase Agreement (PPA).</li>
                            <li>Power Trading.</li>
                            <li>Open Access Connectivity & Representation to authorities.</li>
                            <li>Any Other work related with Electrical, Erection, Testing & Commissioning in Sub-Stations,
                                Switchyards, Factory Premises, etc.</li>
                        </ul>
                        <img src="./assets/Lovepik_com-401176420-may-1st-labor-day-professional-character-electrician-worker.png" alt="" class="serv-img-odd">
                    </div>
                    </li>
                    <!-- Add other service sections in the same manner -->
                
                </ul>
            </div>
        </div>

        <footer>
                <div class="custom-bg text-dark py-3">
                <div class="container d-flex2">
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