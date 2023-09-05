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
    <title> Contact PRAYAS </title>
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
        .card-img-top{
            background-color: #e7e7e7;
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
        .nav-item{
            color: white;
        }
        .whole-form-box{
            padding: 3em;
        }
        .btn-primary {
            color: #fff;
            background-color: #d6ecec;
            border-color: #d6ecec;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            /* box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11); */
        }
        .form-control{
            border-color: #9a9a9a;
            background-color: #f3f3f300;
        }
        .form-control:focus{
            border-color: #9a9a9a;
            background-color: #f3f3f300;
        }
        .btn{
            background-color: teal;
            border-radius: 0;
        }
        .form-image{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
        }
        .contact-img{
            width: 50%;
        }

        .form-container{
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
        }
        .form-content{
            width: 40%;
        }
        .display-content{
            display: flex;
            width: 100%;
            justify-content: space-between;
        }
        .contact-img-info {
            width: 50%;
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
        .social-img{
            width: 30px;
            margin: 0.5em;
        }
        .social-div{
            display: flex;
        }
        .foot-links {
            display: flex;
            flex-direction: column;
        }
        .serv-img {
            width: 15%;
            margin-right: 5em;
        }
        .d-flex2 {
            display: flex;
            justify-content: space-between;
        }
        .custom-bg {
            background-color: #d6ecec;
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
            .form-container{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                width: 100%;
                margin: 0 0 2em 0;
            }
            .form-content {
                width: 60%;
                margin-top: 2em;
            }
            .navbar-toggler-icon {
                filter: invert(1);
            }
            div.contact-img-info {
                width: 100%;
            }
            .contact-img {
                width: 90%;
            }
            .form-image {
                width: 80%;
            }
            .copyright {
                font-size: x-small;
            }
            .sd{
                flex-direction: column;
            }
            .comp-details {
                display: none;
            }
        }

        /* Styles for medium screens (576px - 768px) */
        @media (min-width: 577px) and (max-width: 768px) {
            .home-nav-logo-img {
                width: 30%;
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
            .form-image {
                width: 90%;
            }
            .form-container {
                flex-direction: column;
            }
            .contact-img-info {
                width: 90%;
                font-size: larger;
                font-weight: 600;
                font-family: 'Poppins';
            }
        }

        

    </style>
</head>

<>
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

        <div class="container-fluid" style="margin-top: 80px;">

        </div>

    <div class="container-fluid my-6 whole-form-box">
        <h2 class="text-center my-6" >Reach to Us</h2>
            <div class="col-lg-12 col-xl-6 form-container">
                <div class="form-image d-flex flex-column">
                    <img src="./assets/onboarding-state-feedback (1).png" alt="contact-image" class="contact-img">
                    <img src="./assets/logo-removebg-preview.png" alt="" class="form-image m-5">
                    <div class="contact-img-info">
                        <p class="add text-center"><strong>Address:</strong><br/>
                            15, Om Shree Mahavir CHS, Opp. Priyanka Hotel, Near Airoli Railway
                            Station, Sector 3, Airoli, Navi Mumbai - 400708.
                        </p>
                        <p class="add text-center"><strong>Contact Numbers:</strong><br/>
                            022 27790351 / 9223537217
                        </p>
                    </div>
                </div>
                <div class="form-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h3 class="text-center m-5">Want to say something?</h3>
                        <div class="form-outline mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your name" autocomplete="off" required name="name"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter email" autocomplete="off" required name="email"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="mobile_number" class="form-label">Mobile Number</label>
                            <input type="number" id="mobile_number" class="form-control" placeholder="Enter your mobile number" autocomplete="off" required name="mobile_number"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="message" class="form-label">What would you like to discuss:</label>
                            <textarea id="message" class="form-control" placeholder="Please write your message here." autocomplete="off" required name="message"></textarea>
                        </div>

                        <div class="mt-4 pt-2">
                            <input type="submit" value="Contact Us" class="btn btn-primary py-2 px-3 border-0" name="user_register">
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <footer>
                <div class="custom-bg text-dark py-3">
                <div class="container d-flex justify-content-between">
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


    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobileNumber = $_POST['mobile_number'];
        $message = $_POST['message'];

        // Insert data into the database
        $sql = "INSERT INTO contact_messages (name, email, mobile_number, message) 
                VALUES ('$name', '$email', '$mobileNumber', '$message')";
        
        if ($con->query($sql) === TRUE) {
            // Data inserted successfully
            // You can display a success message or redirect to another page
            echo '<script>alert("Message sent successfully!");</script>';
        } else {
            // Error in inserting data
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    ?>

</body>
</html>


