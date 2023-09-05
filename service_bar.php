<div class="heading"><h2>INDUSTRIES WE WORK FOR</h2></div>
<div class="l-logo-container">
  <div class="l-logo">
    <img class="l-img-1" src="./assets/data-cent.png" alt="Logo 1" />
    <div class="l-detailss">
      <p class="l-title">Data Centers Industry</p>
      <!-- <p class="l-info">Free shipping across India.</p> -->
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-2" src="./assets/factory (2).png" alt="Logo 2" />
    <div class="l-detailss">
      <p class="l-title">Steel & Aluminium Industry</p>
      <!-- <p class="l-info">14 Days Easy Returns Policy.</p> -->
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-3" src="./assets/factory.png" alt="Logo 3" />
    <div class="l-detailss">
      <p class="l-title">Oil & Gas Industry</p>
      <!-- <p class="l-info">Order from anywhere in the world.</p> -->
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-4" src="./assets/power-plant.png" alt="Logo 4" />
    <div class="l-detailss">
      <p class="l-title">Power Sector Industry</p>
      <!-- <p class="l-info">Quality is the pride of our workmanship.</p> -->
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-4" src="./assets/chemical.png" alt="Logo 4" />
    <div class="l-detailss">
      <p class="l-title">Chemical Industry</p>
      <!-- <p class="l-info">Quality is the pride of our workmanship.</p> -->
    </div>
  </div>

  <div class="line-div">
    <div class="line"></div>
</div>
</div>

<!DOCTYPE html>
<html>
<head>
  <title>Service Bar Example</title>
  <style>
    .l-logo-container {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      /* background-color: #70809014; */
      padding: 2em 1em;
      margin: 4em 0 0 0;
    }

    .l-logo {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 25%;
    }

    .l-img-1 {
      width: 35%;
      height: 8vh;
      object-fit: contain;
    }

    .l-img-2 {
      width: 45%;
      height: 8vh;
      object-fit: contain;
    }

    .l-img-3 {
      width: 20%;
      height: 8vh;
      object-fit: contain;
    }

    .l-img-4 {
      width: 35%;
      height: 8vh;
      object-fit: contain;
    }

    .l-title {
      font-size: large;
      text-align: center;
      font-weight: 600;
      color: gray;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .l-detailss {
      text-align: center;
      margin: 1em 0 0 0;
    }

    .l-info {
      font-size: medium;
      font-weight: 600;
      color: #a2a2a2;
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
      .l-logo-container {
        flex-direction: column;
        padding: 2em 0;
      }

      .l-logo {
        margin-bottom: 2em;
        width: 80%;
      }

      .l-img-1,
      .l-img-2 {
        width: 30%;
        height: auto;
        object-fit: contain;
      }

      .l-img-3,
      .l-img-4 {
        width: 25%;
        height: auto;
        object-fit: contain;
      }

      .l-detailss {
        font-size: larger;
      }
    }
  </style>
</head>
<body>
</body>
</html>
