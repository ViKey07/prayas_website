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
    <title> About PRAYAS </title>
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
        .right-nav{
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
        .btn-primary {
            color: #fff;
            background-color: teal;
            border-color: teal;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            
        }
        .btn{
            background-color: teal;
            border-radius: 0;
            font-weight: 600;
            font-size: x-large;
        }
        .container{
            justify-content: space-around;
        }
        .vision-info {
            font-size: large;
            padding: 0 2em;
            font-weight: 600;
            color: slategray;
            font-family: 'Poppins';
            width: 90%;
        }
        .mission-info {
            width: 90%;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .row{
            align-items: center;
            justify-content: center;
            padding: 0;
        }
        .l-logo-container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: #d6ecec;
        }

        .l-logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            object-fit: contain;
            padding: 1em;
            
        }

        .l-box{
            transition: transform 0.5s ease, background-color 0.3s ease;
        }

        .l-box:hover {
            background-color: blue;
            cursor: context-menu;
            object-fit: contain;

            transition: transform 0.5s ease;
            .l-title{
                color: aqua;
                transition: color 0.5s ease;
            }
            .l-info{
                color: white;
                transition: color 0.5s ease;
            }
        }

        .l-img-1 {
            width: 35%;
            height: 6vh;
            object-fit: contain;
        }

        .l-img-2 {
            width: 35%;
            height: 6vh;
            object-fit: contain;
        }

        .l-img-3 {
            width: 20%;
            height: 6vh;
            object-fit: contain;
        }

        .l-img-4 {
            width: 35%;
            height: 6vh;
            object-fit: contain;
        }

        .l-title {
            font-size: large;
            font-weight: 600;
            color: #707070;
        }

        .l-detailss {
            width: 100%;
        }

        .l-info {
            font-size: medium;
            font-weight: 600;
            padding: 0;
            margin: 0;
            color: gray;
        }
        .board {
            margin: 0.5em 5em;
        }

        @media (min-width: 768px) and (max-width: 1024px) {
        .navbar-toggler-icon {
            filter: invert(1);
        }
        img.home-nav-logo-img {
            width: 150%;
            margin: 5%;
        }

        .l-logo-container {
            flex-direction: column;
            padding: 2em 0;
        }

        .l-logo {
            margin-bottom: 2em;
        }

        .vision-info {
            padding: 0;
        }

        .l-img-1,
        .l-img-2 {
            width: 20%;
            height: auto;
            object-fit: contain;
        }

        .l-img-3,
        .l-img-4 {
            width: 15%;
            height: auto;
            object-fit: contain;
        }

        .l-detailss {
            font-size: larger;
        }
        .board {
            margin: 0 0 2em 0;
            flex-direction: column;
            align-items: center;
        }
        div.box {
            width: 65%;
            height: 45vh;
        }
        p.text-grey2 {
            font-size: medium;
        }
        p.comp-text {
            font-size: medium;
        }
    }

    .l-arrows {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .l-arrow {
        width: 40px;
        height: 40px;
        border: 3px solid blue;
        border-radius: 50%;
        color: blue;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: xxx-large;
        cursor: pointer;
        box-sizing: border-box; /* Add this property to include the border size in width and height calculations */
    }

    .l-previous-arrow {
        margin-right: 10px;
        padding-right: 3px; /* Add padding to separate the arrow from the border */
        padding-bottom: 12px;
    }

    .l-next-arrow {
        margin-left: 10px;
        padding-left: 3px; /* Add padding to separate the arrow from the border */
        padding-bottom: 12px;
    }



    .row2 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .box {
        width: 25%;
        text-align: center;
        background-color: #d6ecec;
        padding: 20px;
        margin: 20px;
        border-radius: 5px;
        height: 62vh;
        transition: transform 0.5s ease;
    }
    .box:hover{
        transform: scale(1.05);
        cursor: pointer;
    }

    .box img {
        width: 100%;
        max-width: 200px;
        height: auto;
        object-fit: contain;
        margin-bottom: 10px;
    }

    .box h3 {
        font-size: 15px;
        font-weight: bold;
        margin-bottom: 5px;
        color: darkslategrey;
    }

    
    .box2-img{
        width: 35%;
    }

    .right-img{
        width: 75%;
    }
    .bottom-img{
        width: 95%;
    }

    .box img {
        /* width: 100%; */
        /* max-width: 200px; */
        height: 20vh;
        object-fit: contain;
        margin-bottom: 10px;
    }

    .container-fluid2 .text-center {
        background-image: url("./assets/About Us Page Assets-09.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        color: #ffffff; /* Set the text color to white or any desired color */
        padding: 50px 20px; /* Adjust the padding as needed */
    }

    .text-area{
        position: absolute;
        text-align: center;
        color: #016363;
        left: 25%;
    }

    .text-lg{
        font-size: x-large;
        font-weight: 600;
        color: #016363;
    }

    .text-head {
        font-size: xxx-large;
        font-weight: 800;
        color: #016363;
        text-align: center;
    }
    .text-head1 {
        font-size: xxx-large;
        font-weight: 800;
        color: #016363;
        margin-bottom: 8%;
    }

    .text-head2 {
        font-size: xx-large;
        font-weight: 600;
        color: #016363;
    }

    .text-sub-head {
        font-size: medium;
        font-weight: 600;
        color: #787878;
    }
    .text-sub-head2 {
        font-size: medium;
        font-weight: 600;
        color: #787878;
    }
    .last-div{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .text-grey{
        color: gray;
        font-size: large;
    }
    .text-grey2{
        color: #707070;
        font-size: small;
        font-weight: 500;
        padding: 0.5em 0;
        }

    .listed-items {
        list-style-type: none; /* Remove bullet points */
        padding-left: 0; /* Remove default padding */
        flex-direction: column;
    }

    .listed-items, .listed-lines {
        display: flex; /* Make list items flex containers */
        align-items: start; /* Vertically align content */
        margin-bottom: 10px; /* Add spacing between list items */
        color: darkslategrey;
        font-size: large;
    }

    .listed-items, .listed-lines:before {
        content: '\2022'; /* Add bullet point using Unicode character */
        color: black; /* Set bullet point color */
        /* font-size: 12px; Adjust bullet point size */
        margin-right: 10px; /* Add spacing between bullet point and text */
    }

    .vision {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .mission {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .v-img {
        width: 95%;
    }
    .box-dir-info {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        height: 35vh;
        align-items: center;
    }
    .adv-img {
        text-align: center;
    }
    .cont-btn {
        text-align: center;
    }
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
            font-size: medium;
            width: 100%;
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
        .foot-links {
            display: flex;
            flex-direction: column;
        }
        .social-div{
            display: flex;
        }
        .border-top{
            background-color: #d6ecec;
        }
        .nav-link2 {
            font-size: medium;
            text-decoration: none;
            margin: 0.5em 0;
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
            font-size: small;
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
            height: 60vh;
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
        div.comp-details1 {
            width: 90%;
        }
        div.board {
            flex-direction: column;
            align-items: center;
            margin: 0;
        }
        div.vision {
            flex-direction: column;
        }
        .vision-info {
            font-size: medium;
            width: 100%;
        }
        div.mission {
            flex-direction: column-reverse;
            margin-top: 4em;
        }
        .sd {
            flex-direction: column;
        }
        .copyright {
            font-size: x-small;
        }
    }

    @media screen and (width: 280px) and (height: 653px) {
        h1.text-head1 {
            font-size: x-large;
        }
        .box {
            width: 85%;
            height: 80vh;
        }
    }

    @media screen and (width: 1024px) and (height: 600px) {
        /* Your CSS rules for screens with 1024x600 resolution here */
        div.box {
            width: 65%;
            height: 58vh;
        }
    }

    /* Styles for medium screens (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .home-nav-logo-img {
            width: 30%;
            margin-left: 3%;
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

        <div class="container-fluid" style="margin-top: 120px;">

        </div>

        <div class="container-fluid3" >

            <div class="row mb-5">
                

                <!-- Title and details column -->
                <div class="col-md-5 d-flex justify-content-center">
                    <div class="comp-details1">
                        <h1 class="text-head1">Who We Are?</h1>
                        <h6 class="text-sub-head">Prayas Electrosystems (Thane) Pvt. Ltd. is based at Airoli, Navi Mumbai, was established in the year 2002, providing the services of Supply, Installation, Testing and Commissioning in the Power Sector, since 21 years, The Enineering Team, highly experienced, technically qualified & dedicated with strong adherence to the quality is offering the services.</h6>
                        <p class="comp-text text-sub-head">Our organization has a strong trained own workforce, who are well trained & equipped to handle problems expertly.</p>
                        <h6 class="text-sub-head2 italic">We do undertake special jobs like capacitor cell replacement, Earth wire replacement by OPGW in Live condition, Bay extension work at EHV levels</h6>
                        <p class="comp-text text-sub-head">We do provide expert services for Sub-Station SCADA implementation.</p>
                    </div>
                </div>

                <!-- Image column -->
                <div class="col-md-6">
                    <img class="img-fluid" src="./assets/pngwing.com (5).png" alt="Image">
                </div>
            </div>

            <h3 class="text-center text-head2">BOARD OF DIRECTORS</h3>
            <div class="d-flex justify-content-center board">
            <div class="box">
                <img src="./assets/Prasad sir Photo-fotor-20230818101952.png" alt="Director 1">
                
                <h3>Mr. Prasad Kulkarni (Director)</h3>

                <p class="text-grey2">Experience: Electrical & Electronics Engineer having varied experience of more than 30 years, in power Sector which involves Business Development, Product Applications & Execution of projects for Electricity Generation, Transmission & Distribution.</br></br>
                     Portfolio: Business Policies, Service Vertical Development, Client Relations, Finance Control & Banking.</p>
                    
            </div>
            <!-- Director 2 -->
            <div class="box">
                <img src="./assets/Shailesh_Joshi_Photo-fotor-20230818102146-removebg-fotor-20230818111752.png" alt="Director 2">
                
                <h3>Mr. Shailesh Joshi (Director)</h3>

                <p class="text-grey2">Experience: Electronics Engineer Experienced with 28 years of Power Sector which involves Business Development, EPC Project execution, Smart Management of Manpower, Critical Execution of work in Outages.</br></br>
                     Portfolio: Testing of Electrical Equipments, Operations and Execution, Outsourcing Vendor Control, Client Lisoning.</p>
                    
            </div>
            <div class="box">
                <img src="./assets/Kelkar_sir.png" alt="Director 3">
                
                <h3>Mr. Subhash G Kelkar (Associate Technical Director)</h3>

                <p class="text-grey2">Experience: BE (Electrical) having 33 years of experience as Engineer in MSEB (Maharashtra State Electricity
                    Board) & Retired from MSETCL as Executive Director.<br></br>
                    Portfolio: Responsible for technical confirmations of project contracts & work executions.</p>
            
        </div>
        <div class="box">
            <img src="./assets/Dhore_sir.png" alt="Director 2">
            
            <h3>Mr. M B Dhore (CEO)</h3>

            <p class="text-grey2">Experience: 35 years of Power Sector. Retired Superintending 
                Engineer Testing and Communication Circle (MSETCL) – Maharashtra State Electricity Transmission 
                Company Limited, Vashi, Navi Mumbai.</br></br>
                Portfolio: Testing of Electrical Equipments, Fault analysis, Technical confirmation for Bidding, Planning co-ordination and
                Man-Machine Management.</p>
            
        </div>
            </div>
            <div class="d-flex justify-content-center board">
            
        </div>
        </div>

              

              <div class="vision">
                <div class="vision-img">
                    <img src="./assets/data-or-cloud-migration.png" class="v-img" alt="">
                </div>
                <div class="vision-info">
                    <h3 class="text-center text-head2">VISION</h3>
                    <p class="vision-info col-md-12 m-auto text-center">At Prayas Electro Systems (Thane) Pvt. Ltd., we envision a future where our leadership in the Power Sector is defined by unwavering precision, integrity, and innovation. Our aspirations lie in reshaping power infrastructure through cutting-edge technology fused with proven methodologies. As the partner of choice, we strive to illuminate a tomorrow where communities and industries thrive on sustainable and efficient power solutions, forging a lasting positive imprint on society and the planet.</p>
                </div>
              </div>

              <div class="mission">
                <div class="mission-info">
                    <h3 class="text-center text-head2">MISSION</h3>
                    <p class="vision-info col-md-8 m-auto text-center">We are dedicated to revolutionizing the Power Sector through our expertise. Rooted in a commitment to excellence and client satisfaction, we craft tailored electrical solutions that empower our partners for success. Our team of adept professionals drives innovation and fosters enduring collaborations, thus illuminating the path to achievement in the power industry.</p>
                </div>
                <div class="mission-img">
                    <img src="./assets/person-planning-a-startup-business (1).png" class="v-img" alt="">
                </div>
              </div>

              <div class="my-5">
                
                <!-- <h3 class="text-center text-head">Benefits</h3> -->
                <h5 class="text-center text-head2">Our Specialized Services</h5>
            </div>


            <div class="row">
                <div class="box">
                    <img src="./assets/successful-state-feedback.png" alt="Image 1">
                    <h3>Electrical Equipments Erection</h3>
                    <p class="text-grey2">We provide comprehensive services for the seamless installation, setup, and commissioning of electrical systems. Our experienced team ensures efficient and reliable solutions, adhering to industry standards while maximizing performance and safety.</p>
                </div>
                <div class="box">
                    <img src="./assets/startup-culture (1).png" alt="Image 2">
                    <h3>Testing</h3>
                    <p class="text-grey2">Our electrical testing services offer thorough assessment and verification of electrical systems functionality and compliance. Backed by skilled professionals, we provide comprehensive testing solutions to ensure optimal performance for all your electrical projects.</p>
                </div>
                <div class="box">
                    <img src="./assets/education-.png" alt="Image 3">
                    <h3>Commissioning Services</h3>
                    <p class="text-grey2">We oversee the final stages of your projects to guarantee systems readiness for operation. Our team ensures comprehensive checks, testing, and integration, aligning with industry standards to ensure a seamless transition to full functionality and reliable performance.</p>
                </div>
            </div>
        
            <div class="row">
                <div class="box">
                    <img src="./assets/collaboration-between-human-and-machine (2).png" alt="Image 4">
                    <h3>Electrical Maintenance Services</h3>
                    <p class="text-grey2">We offer proactive and reliable solutions to ensure the continuous and efficient operation of electrical systems. With a skilled team and comprehensive approach, we deliver regular inspections, repairs and optimizations, ensuring prolonged equipment lifespan, minimized downtime and peak performance.</p>
                </div>
                <div class="box">
                    <img src="./assets/entrepreneurship-and-startup-business-concept (1).png" alt="Image 5">
                    <h3>Energy Conservation</h3>
                    <p class="text-grey2">Expertly optimizing energy use, our services enhance efficiency and lower costs. Through advanced techniques and eco-friendly practices, we curtail energy consumption, benefiting both your project's performance and environmental impact.</p>
                </div>
                <div class="box">
                    <img src="./assets/information-technology-specialist-at-work.png" alt="Image 6">
                    <h3>Various Analysis and Fault Diagnosis</h3>
                    <p class="text-grey2">Our comprehensive electrical analysis and fault detection services provide accurate diagnostics and solutions. With advanced tools and expertise, we swiftly identify issues, enabling prompt rectification and ensuring your projects operate at peak performance and reliability.</p>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <hr class="w-25" style="height: 3px; color: blue;">
            </div>


            <div class="box2 ">
                <div class="adv-img">
                    <img src="./assets/installation.jpg" alt="Image 2" class="box2-img">
                </div>
                <div class="upgrade w-75 m-auto">
                    <p class="text-head">ADVANTAGES OF PRAYAS</p>
                    <div class="detailed-text">
                        <p class="text-grey"><ul class="col-md-8 m-auto listed-items">
                            <li class="listed-lines">Prompt, reliable & consistent quality services.</li>
                            <li class="listed-lines">Commercially competitive prices.</li>
                            <li class="listed-lines">Trustful Technical support.</li>
                            <li class="listed-lines">Daily operation and maintenance of the plant/site.</li>
                            <li class="listed-lines">Planned and unplanned maintenance services and remote monitoring and diagnostics.</li>
                            <li class="listed-lines">Comprehensive training.</li>
                            <li class="listed-lines">Environmental health and safety programs.</li>
                            <li class="listed-lines">Site documentation and procedure development.</li>
                            <li class="listed-lines">Site-specific computerized maintenance management programs.</li>
                            <li class="listed-lines">Facilities on load testing of all the substation related electrical products.</li>
                            <li class="listed-lines">Easy & safe for technician to isolate protection relays, inject & verify.</li>
                            <li class="listed-lines">Substantially reduces breakdown & unknown Failures.</li>
                            <li class="listed-lines">Prayas drives its strength from customers. The growth of the latter is prerequisite <br/>to the growth of company & hence customer satisfaction is our prime objective.</li>
                        </ul>
                        </p>
                        <!-- <p class="text-grey">Another advantage of a digital yearbook is its flexibility. With a physical yearbook, the content is static and unchangeable once it has been printed. A digital yearbook, however, can be updated and revised as needed. This allows schools to add new photos or information to the yearbook, correcting any errors or omissions that may have occurred during the initial creation of the book.</p> -->
                    </div>
                    <div class="cont-btn mb-5">
                        <a href="contact_form.php"><input type='submit' value='CONTACT US' class='btn btn-primary px-5 py-2 mx-2 mt-3 border-0' name='contact_us'></a>
                    </div>
                </div>
            </div>


            
            <!-- <div class="container-fluid2 d-flex">
                
                <div class="row text-center last-div">
                    <div class="col-md-3">
                        <img src="./assets/About Us Page Assets-10.png" alt="Left Image" class="right-img">
                    </div>
                    
                    <div class="col-md-6 text-area" style="z-index: 2;">
                        <p class="text-lg">“Empowering transformation and progress, our company drives innovation to light the path towards a brighter future for the nation.”</p>
                    </div>
                    <div class="col-md-3">
                        <img src="./assets/About Us Page Assets-11.png" alt="Right Image" class="right-img">
                    </div>

                </div>
                
            </div> -->

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