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
    <title> PRAYAS | Projects </title>
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
        .project-img {
            width: 70%;
            height: 25vh;
            object-fit: contain;
            margin: auto;
        }
        .project-img2 {
            width: 15%;
            height: 25vh;
            object-fit: contain;
            margin: 2em 8em;
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
            font-size: x-large;
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
        div.project-row {
            flex-direction: column;
        }
        .soc-d {
            flex-direction: column;
        }
        .project-img2 {
            width: 70%;
            height: 25vh;
            object-fit: contain;
            margin: auto;
        }
        .sd {
            flex-direction: column;
        }
        .copyright {
            font-size: x-small;
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
        .project-img {
            width: 35%;
            height: 25vh;
            object-fit: contain;
            margin: auto;
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
                <h2 class="text-head">Major Projects Executed</h2>
            </div>
                <ul class="listed-items">
                    <div class="even mb-3">
                        <div class="d-flex project-row">
                        <li class="listed-items"><p class="list-sub-head">Bridge Data Centre (Mumbai) LLP.</p>
                            <ul class="listed-lines">
                                <li>Power Feasibility Report for in Navi Mumbai.</li>
                                <li>Providing 32MVA Load Sanction & Grid Connectivity Services for Project Byte.</li>
                                <li>CEI, EI, MSEDCL & MSETCL additional scope for completion of Project Byte.</li>
                                <li>Preparation of preliminary, tentative power feasibility report for 300 MVA at 220KV for a long
                                    termand 15 MVA at 22KV for Mukund site.</li>
                                <li>SITC of communication between 100KV BDC S/s & 220KV MSETCL Substation for BDC.</li>
                                <!-- Add other points here -->
                            </ul>
                        </li>
                        <img src="./assets/bridge-data-centres-malaysia-s-1597106077 (1).png" class="project-img" alt="">
                        </div>
                    </div>
                    <div class="d-flex project-row">
                        <img src="https://www.mahatransco.in/images/msetcl_marathi_logo.png" class="project-img" alt="">
                        <li class="listed-items"><p class="list-sub-head">Maharashtra State Electricity Transmission Company (MSETCL):</p>
                            <ul class="listed-lines">
                                <li>Supply, Retrofitting, Testing & Commissioning of 33 Nos Numerical Distance
                                    ProtectionRelay at MSETCL.</li>
                                <li>SITC of 24 NOs Line Differential Relays for 220KV system, 16 km OPGW & 5Km
                                    ADSScable Laying with Splicing at MSETCL Kalwa & Panvel Circle.</li>
                                <li>Supply, Erection, Testing & commissioning of Control and relay panels for feeders as
                                    wellas transformers (4 Nos.) at MSETCL EHV SS along with cable laying & cable
                                    termination. (400KV Kalwa SS, 400KV Kharghar SS, 220 KV Nerul SS, 220KV
                                    Anandnagar SS, 100KV Mohane SS).</li>
                                <li>Shifting, testing & commissioning of C&R Panel at 220/132 KV substations-51Nos.</li>
                                <li>Capacitor cell replacement in 220/132KV substations-6Nos.</li>
                                <li>Transformer Differential Protection relay-replacement & retrofitting at
                                    220/100KVsubstation-7Nos.</li>
                                <li>Work of Polysil RTV coating to bushing of ICT, 33KV IPS tubes, PT bushing &
                                    Insulatorsfor prevention of unwanted tripping of ICT on DR at 5substations.</li>
                                <li>Work order for scheme of replacement of pilot wire protection with latest numerical
                                    line differential relay through OPGW Communication cable of 220KV Pal-Palava line
                                    at EHV Lines S/Dn Padgha under EHV (O&M) Dn. Dombivali for FY2021-22.</li>
                            </ul>
                        </li>
                </div>
                    <div class="even mb-3">
                        <div class="d-flex project-row">
                    <li class="listed-items mb-3"><p class="list-sub-head">Solar Power Projects:</p>
                        <ul class="listed-lines">
                            <li>WAREE, Solapur (SHREE SWAMI SAMARTH SOLAR PARK):- Design, Supply, Installation, Testing
                                & Commissioning of 33KV Transmission Line with four pole structure with metering cubical &
                                data integration, acquisition/visibility at SLDC Kalwa.</li>
                            <li>HUOBAN PRIVATE LIMITED (100MWAC SOLAR PV PLANT, DHULE):- Supply, Installation, Testing
                                & Commissioning of FOTE & ADSS Cable for establishment of communication between solar
                                power substation & nearest MSETCL/MSEDCL Substations.</li>
                            <li>RENEW SOLAR ENERGY PVT LTD (43MW Bhandarwada Project):- Supply, Installation, Testing &
                                Commissioning of FOTE & ADSS Cable for establishment of communication between 43MW
                                Bhandarwada Project & MSETCL’S 132KV Pathari Substations.</li>
                            <!-- Add other points here -->
                        </ul>
                    </li>
                    <img src="./assets/WAREE.png" class="project-img" alt="">
                        </div>
                </div>
                <div class="d-flex project-row">
                    <img src="./assets/msedcl_hs_logo_transparent_bg.png" class="project-img" alt="">
                    <li class="listed-items mb-3"><p class="list-sub-head">Maharashtra State Electricity Distribution Company (MSEDCL):</p>
                        <ul class="listed-lines">
                            <li>SITC of 33KV & 22KV Multi-circuit tower line under MSEDCL Panvel City Sub Division under
                                area ofVashi Circle.</li>
                            <li>Work order for Civil works Towers Foundations of 33KV Panvel East & 22KV New panvel
                                feederunder Panvel U Division under Vashi Circle.</li>
                            <li>Supply, Installation, Testing & Commissioning including civil work of Energy metering
                                arrangement along with 7 metering cubicles for 33kv & 22KV Incoming Feeders of 33/11kv
                                substation & 22 kv switching station at various locations in THANE Under Bhandup zone.</li>
                        </ul>
                    </li>
                </div>
                    <div class="even mb-3">
                        <div class="d-flex project-row">
                            <li class="listed-items mb-3"><p class="list-sub-head">Karnataka Power Transmission Corporation Limited(KPTCL):</p>
                                <ul class="listed-lines">
                                    <li>110 KV Sub-station Erection and Commissioning at KPTCL Bagalkot.</li>
                                    <li>Erection, Testing & Commissioning work of 10MVA-2Nos. Power Transformer, outdoor
                                        Breaker 4Nos,Isolator-7Nos. & CTPT-15 Nos. at 110/11KV KPTCL, Bhutnal substations.</li>
                                    <!-- <li>Implementation of new schemes for C&R Panels.</li> -->
                                </ul>
                            </li>
                            <img src="./assets/kptcl-logo-21EFDB3785-seeklogo.com.png" class="project-img" alt="">
                        </div>
                </div>
                <div class="d-flex project-row">
                    <img src="./assets/mahagenco-maharashtra-state-power-generation-co-ltd-logo-vector.png" class="project-img" alt="">
                    <li class="listed-items"><p class="list-sub-head">Maharashtra State Power Generation Company (MSPGCL):</p>
                        <ul class="listed-lines">
                            <li>Generator Busbar replacement, testing & commissioning work at GTPS, Uran.</li>
                            <li>Replacement work of old damaged earth wire at Bhira TRHPS of HPC, Pune.</li>
                        </ul>
                    </li>
                </div>
                    <div class="even mb-3">
                        <div class="d-flex project-row">
                    <li class="listed-items"><p class="list-sub-head">Indian Oil Corporation Limited (IOCL):</p>
                        <ul class="listed-lines">
                            <li>Retrofitting of Earth Leakage Relay-322Nos, Mathura Refinery.</li>
                            <li>Shifting HT Line Passing through SCFP CIP Plant through Underground cable at IOCL Turbhe.</li>
                            <li>Up-gradation of existing electrical distribution system at IOCL CIP, Turbhe which includes
                                supply, installation, testing & commissioning of 500KVA Distribution Transformer, VCB, etc.</li>
                            <li>AMC for Electrical maintenance work at IOCL CIP, Turbhe.</li>
                            <li>Thermography study of Various Electrical Panels & equipment’s at various locations of IOCL Plants</li>
                        </ul>
                    </li>
                    <img src="./assets/pngwing.com (2).png" class="project-img" alt="">
                        </div>
                </div>
                <div class="d-flex project-row">
                    <img src="./assets/mmrda.jpg" class="project-img" alt="">
                    <li class="listed-items"><p class="list-sub-head">Mumbai Metropolitan Region Development Authority:</p>
                        <ul class="listed-lines">
                            <li>Shifting of Maharashtra State Electricity Distribution Company Limited (MSEDCL)’s 22KV Double Pole circuit tower line (CIDCO I & II Feeder) at
                                Airoli Creek obstructing construction of Katai Naka-Airoli Road.</li>
                            <!-- <li>HT & EHV Tower line SITC.</li>
                            <li>SITC of OPGW for New projects as well as for old replacement.</li>
                            <li>Thermography of various Electrical Panels, Equipment’s, Distribution Lines, etc with detailed study
                                And implementation of corrective actions.</li> -->
                        </ul>
                    </li>
                </div>
                    <div class="even mb-3">
                        <div class="d-flex project-row">
                    <li class="listed-items"><p class="list-sub-head">Bharat Petroleum Corporation Limited (BPCL):</p>
                        <ul class="listed-lines">
                            <li>Supply of Numerical Protection Relay for E&C at Mumbai Refinery.</li>
                            <!-- <li>Individual &Total Harmonic Distortion suppression substantially.(THD)</li>
                            <li>Saving in power. (KW)</li> -->
                        </ul>
                    </li>
                    <img src="./assets/Bharat_Petroleum-Logo.wine.png" class="project-img" alt="">
                        </div>
                </div>
                <div class="d-flex project-row">
                    <img src="./assets/Tata_Projects_Logo.jpg" class="project-img2" alt="">
                    <li class="listed-items mb-3"><p class="list-sub-head">Tata Projects:</p>
                        <ul class="listed-lines">
                            <li>Supply,
                                Installation &amp; Commissioning of Fiber Optic Test Equipment (FOTE) Panel for communication between 220KV Taloja Sub-Station (MSETCL) &amp; 220KV
                                Panchanad Sub-Station (MSETCL) for TATA Projects.</li>
                            <!-- <li>Routine Testing of CT&PT including Tan Delta Test.</li> -->
                        </ul>
                    </li>
                </div>
                <div class="even mb-3">
                    <div class="d-flex project-row">
                <li class="listed-items"><p class="list-sub-head">Alstom T&D India Ltd:</p>
                    <ul class="listed-lines">
                        <li>Smart-grid Erection, Testing & Commissioning work at 220 KV, Taloja.</li>
                        <li>I&C work Remote Operation at Taloja.</li>
                        <li>Retrofitting/replacement of Old Existing Distance Protection Relays on Various EHV SS
                            MSETCL System.</li>
                        <!-- <li>Service - Maintenance/Electrical power line & related spare/removing overhead HT cable line.</li> -->
                    </ul>
                </li>
                <img src="./assets/Alstom-Logo.wine.png" class="project-img" alt="">
                    </div>
            </div>
                <div class="d-flex project-row">
                    <img src="./assets/Goa govt.png" class="project-img" alt="">
                    <li class="listed-items mb-3"><p class="list-sub-head">GOA Electricity Department:</p>
                        <ul class="listed-lines">
                            <li>Work Order for Dismantling of 33KV Bay Structure at Pillar Substation & Fixing of new
                                RS Joist, Replacement of 33KV GOAB Switches, erection of new 33KV PT’s & CT’s and
                                other accessories.</li>
                            <!-- <li>Routine Testing of CT&PT including Tan Delta Test.</li> -->
                        </ul>
                    </li>
                </div>
                    <div class="even mb-3">
                        <div class="d-flex project-row">
                            <li class="listed-items mb-3"><p class="list-sub-head">Hindustan Petroleum Corporation Limited (HPCL):</p>
                                <ul class="listed-lines">
                                    <li>AMC for Testing of transformer at Mumbai Refinery.</li>
                                    <li>Service for 3 ph primary injection, stability testing of unit protections, testing of transformers-breaker-bus bar-relay, contactor replacement and control circuit related jobs.</li>
                                    <!-- <li>Tough, Durable, Atmosphere Insensitive Coatings to avoid Rusting, Oxidations & Life Enhancement,
                                        far better than enamels or epoxy paints on Electrical Installations.</li> -->
                                </ul>
                            </li>
                            <img src="./assets/HINDPETRO.NS-6dfea446.png" class="project-img" alt="">
                        </div>
                </div>
                <div class="d-flex project-row">
                    <img src="https://www.vhplgroup.com/data1/images/vhpllogo.gif" class="project-img" alt="">
                    <li class="listed-items mb-3"><p class="list-sub-head">Vindhyachal Hydro-Power Ltd.:</p>
                        <ul class="listed-lines">
                            <li>Supply of material & Job work for installation & commissioning of Main Meter & Check meter
                                at 100KV HT side at Vajra Hydro Power Plant, Shahapur.</li>
                            <li>Work Order for construction of new meter room at Vajra Power Plant Shahapur, District:
                                Thane.</li>
                            <!-- <li>Power Trading.</li>
                            <li>Open Access Connectivity & Representation to authorities.</li>
                            <li>Any Other work related with Electrical, Erection, Testing & Commissioning in Sub-Stations,
                                Switchyards, Factory Premises, etc.</li> -->
                        </ul>
                    </li>
                    
                </div>
                    <!-- Add other service sections in the same manner -->
                    <div class="even mb-3">
                        <div class="d-flex project-row">
                            <li class="listed-items mb-3"><p class="list-sub-head">Shivam Engineering Projects Pvt Ltd:</p>
                                <ul class="listed-lines">
                                    <li>Shifting /Rerouting of 220 kV & 100 kV D/C OH TLS through underground cable for
                                        BITSoM, Kamba (Kalyan): -Supply, Installation Retro fitting, Testing & Commissioning
                                        of line differential protection relay under Vashi Zone.</li>
                                    <!-- <li>Power Purchase Agreement (PPA).</li>
                                    <li>Power Trading.</li>
                                    <li>Open Access Connectivity & Representation to authorities.</li>
                                    <li>Any Other work related with Electrical, Erection, Testing & Commissioning in Sub-Stations,
                                        Switchyards, Factory Premises, etc.</li> -->
                                </ul>
                            </li>
                    
                    <img src="./assets/Shivam-agro-01-1024x293.png" class="project-img" alt="" style="width: 30%;">
                        </div>
                </div>
                <div class="d-flex project-row">
                    <img src="./assets/BVML.jpg" class="project-img" alt="">
                    <li class="listed-items"><p class="list-sub-head">Balmer Van Leer-Limited:</p>
                        <ul class="listed-lines">
                            <li>SITC & Removing 22kv Overhead HT Line to Underground Cable.</li>
                            <li>Additional Work at Kukshet Switching SS For Express Feeder 2.</li>
                            <li>Charges For Supply & Installation For HT Express Feeder Line 22kv.</li>
                            <li>Service - Maintenance/Electrical power line & related spare/removing overhead HT cable line.</li>
                        </ul>
                    </li>
                </div>
                <div class="even mb-3">
                    <div class="d-flex project-row">
                <li class="listed-items"><p class="list-sub-head">Supreme Petrochem Ltd.:</p>
                    <ul class="listed-lines">
                        <li>Fixing, Installation & Commissioning of Siemens Motor Protection Relays
                            for HT Motor Protection.</li>
                        <!-- <li>I&C work Remote Operation at Taloja.</li>
                        <li>Retrofitting/replacement of Old Existing Distance Protection Relays on Various EHV SS
                            MSETCL System.</li> -->
                        <!-- <li>Service - Maintenance/Electrical power line & related spare/removing overhead HT cable line.</li> -->
                    </ul>
                </li>
                    
                <img src="./assets/SPL_Logo.png" class="project-img" alt="">
            </div>
                    </div>
                    <div class="d-flex project-row">
                        <img src="./assets/pngwing.com (8).png" class="project-img" alt="">
                        <li class="listed-items"><p class="list-sub-head">TATA Power:</p>
                            <ul class="listed-lines">
                                <li>Dismantling of 110kV AIS switchyard along with all primary and secondary directly and indirectly associated equipment.</li>
                                <li>Removing of old control panels including cables, earthing systems and lightning system.</li>
                                <li>Packaging of dismantled equipment, loading, transportation and unloading of equipment at Salsette store.</li>
                                <!-- <li>Service - Maintenance/Electrical power line & related spare/removing overhead HT cable line.</li> -->
                            </ul>
                        </li>
                    </div>
                </ul>
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