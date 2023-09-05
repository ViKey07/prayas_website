<!DOCTYPE html>
<html>
<head>
    <style>
        .marquee {
          width: 100%;
          overflow: hidden;
          height: 30vh;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .marquee ul {
            display: flex;
            list-style-type: none; /* Remove bullet points */
            padding: 0; /* Remove default padding */
            animation: marquee 40s linear infinite; /* Start the animation */
            animation-delay: 2s; /* Delay the animation start by 2 seconds */
        }

        .marquee li {
            margin-right: 10%; /* Adjust the spacing between logos */
            height: 100px; /* Set fixed height for logos */
            display: flex;
            flex-direction: column;
            align-items: center; /* Vertically center the logo and title */
        }

        .marquee li img {
            height: 70%; /* Ensure the image takes up 70% of the li height */
            margin-bottom: 5px; /* Adjust spacing between logo and title */
        }

        .marquee li span {
          font-size: medium;
          text-align: center;
          font-weight: 600;
          color: gray;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(calc(-100% - 30px));
            }
        }

        .heading {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            margin-top: 2em;
        }

        .line {
            width: 50%;
            height: 1px;
            background-color: #c5cae2;
            margin-bottom: 5%;
        }
        .line-div{
          display: flex;
          justify-content: center;
        }


        @media only screen and (max-width: 768px) {
            .marquee li {
                margin-right: 5%;
            }
            .line-div{
                margin-bottom: 10%;
            }
            .heading {
                margin-top: 5em;
            }
        }
    </style>
</head>
<body>

  <div class="heading"><h2>OUR CLIENTS</h2></div>
  
    <div class="marquee">
        
        <ul>
            <?php
                // Array of logos and titles
                $logos = [
                    ["./assets/msetcl_logo.jpg", "MSETCL"],
                    ["./assets/msedcl_hs_logo_transparent_bg.png", "MSEDCL"],
                    ["./assets/msedcl_hs_logo_transparent_bg.png", "MSPGCL"],
                    ["./assets/640px-Tata_Power_Logo.png", "TATA POWER"], 
                    ["./assets/Tata_Project_Limited.png", "TATA PROJECTS"],     
                    ["./assets/pngwing.com (2).png", "Indian Oil"],
                    ["./assets/bridge-data-centres-malaysia-s-1597106077 (1).png", "Bridge Data Centre"],
                    ["./assets/Bharat_Petroleum-Logo.wine.png", "BPCL"],
                    ["./assets/kptcl-logo-21EFDB3785-seeklogo.com.png", "KPTCL"],
                    ["./assets/mmrda.jpg", "MMRDA"],
                    ["./assets/Goa govt.png", "Goa Electricity Dept."],
                    ["./assets/Alstom-Logo.wine.png", "Alstom"],
                    ["./assets/WAREE.png", "WAREE"],
                    // Add more logos and titles as needed
                ];

                foreach ($logos as $logo) {
                    $logoPath = $logo[0];
                    $title = $logo[1];
                    echo '<li><img src="' . $logoPath . '" alt="' . $title . '"><span>' . $title . '</span></li>';
                    // echo '<li><img2 src="' . $logoPath . '" alt="' . $title . '"><span>' . $title . '</span></li>';
                }
            ?>
        </ul>
        
    </div>
    <div class="line-div">
        <div class="line"></div>
    </div>
    
</body>
</html>






