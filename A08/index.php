<?php
include("connect.php");


$islandQuery = "SELECT * FROM islandsofpersonality";
$islandResult = executeQuery($islandQuery);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Island's Inside Out</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <style>
    @font-face {
      font-family: 'InsideOut';
      src: url('dir/font/GOODGIRL.TTF') format('truetype');
      font-weight: normal;
      font-style: normal;

    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'InsideOut', sans-serif;
    }

    p {
      font-family: 'Montserrat', sans-serif;
    }

    body,
    .card {
      background-color: #E9EBB7;

    }

    footer .social-icons a {
      color: white;
      margin: 10px;
      font-size: 25px;
    }

    .card {
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    @media only screen and (max-width: 600px) {
      #main {
        margin-left: 0;
      }
    }
  </style>
</head>

<body>

  <!-- New Navbar with 'My Personality' -->
  <div class="w3-bar w3-center w3-black p-5 mb-5">
    <h1 class="w3-padding-large w3-xxlarge" style="width:100%; font-weight: 900; cursor:default;">Island's Inside Out
    </h1>
  </div>

  <div class="w3-center mb-5">
  <h1 class="w3-padding-large w3-xxlarge animate__animated animate__fadeInUp" style="width:100%; font-weight: 900; cursor:default;"> My Islands
    </h1>
    <img src="dir/img/shared/main.jpg" alt="Centered Image" class="img-fluid shadow animate__animated animate__fadeInUp" style="max-width: 400px; border: 3px solid black;">
  </div>

  <!-- Cards with Photos -->
  <div class="w3-bar w3-center w3-border-black w3-text-black" style="color:black;">
    <!-- Container for the cards using Bootstrap Grid System -->
    <div class="container mt-4">
      <div class="row g-4 m-auto">
        <?php
        while ($islandRow = mysqli_fetch_assoc($islandResult)): ?>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card shadow animate__animated animate__fadeInUp">
              <a href="view.php?islandOfPersonalityID=<?php echo ($islandRow['islandOfPersonalityID']); ?>"
                class="text-decoration-none text-dark">
                <div class="card-body text-center">
                  <h5 class="card-title"><?php echo ($islandRow['name']); ?> Island</h5>
                  <img src="dir/img/shared/<?php echo $islandRow['name']; ?>Island.svg"
                    alt="<?php echo ($islandRow['name']); ?>" class="img-fluid"
                    style="max-width: 250px; margin-top: 5px;">
                </div>
                <!-- Page Content Inside Card Body -->
                <div id="<?php echo ($islandRow['name']); ?>" class="card-body">
                  <p><?php echo ($islandRow['shortDescription']); ?></p>
                </div>
              </a>
            </div>
          </div>
          <?php
        endwhile;
        ?>
      </div>
    </div>

  </div>

  <!-- Page Content (Will be inside individual card bodies) -->
  <div class="w3-padding-large" id="main">
    <!-- Sections will dynamically display based on the card clicked -->
  </div>

  <!-- Footer -->
  <footer class="text-center" style="background-color: #000000;">
    <div class="container p-5">
      <section class="social-icons d-flex justify-content-center align-items-center mb-2">
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=louisito75@gmail.com&su=Hello&body=I%20would%20like%20to%20connect."
          target="_blank" role="button"><i class="fab fa-google"></i></a>
        <a href="https://www.linkedin.com/in/louis-santos-0a733b259/" target="_blank" role="button"><i
            class="fab fa-linkedin"></i></a>
        <a href="https://github.com/wE-tUrKzzz" target="_blank" role="button"><i class="fab fa-github"></i></a>
      </section>
      <div class="text-center p-4">
        <a style="color: rgb(255, 255, 255); text-decoration: none;">Website is just a project. All Rights Reserved.</a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>